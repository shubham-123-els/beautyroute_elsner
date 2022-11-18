<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\PaymentMethodsFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\PaymentMethods as PaymentMethodsResource;
use Magenest\QuickBooksOnline\Model\Synchronization;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Sales\Model\Order\Invoice as InvoiceModel;
use Magento\Sales\Model\Order\InvoiceFactory;
use Magento\Framework\Exception\LocalizedException;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magenest\QuickBooksOnline\Model\Config;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

/**
 * Class Invoice using to sync Invoice
 * @package Magenest\QuickBooksOnline\Model\Sync
 * @method InvoiceModel getModel()
 */
class Invoice extends Synchronization
{
    /**
     * @var Customer
     */
    protected $_syncCustomer;

    /**
     * @var CustomerRepositoryInterface
     */
    protected $_customerInterface;

    /**
     * @var InvoiceFactory
     */
    protected $_invoice;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Order
     */
    protected $orderSync;

    /**
     * @var PaymentMethodsFactory
     */
    protected $_paymentMethods;

    /**
     * @var PaymentMethodsResource
     */
    protected $_paymentMethodsResource;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var TimezoneInterface
     */
    protected $timezone;

    /**
     * Invoice constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param InvoiceFactory $invoice
     * @param Customer $customer
     * @param CustomerRepositoryInterface $customerInterface
     * @param Config $config
     * @param PaymentMethodsFactory $paymentMethods
     * @param PaymentMethodsResource $paymentMethodsResource
     * @param Order $orderSync
     * @param \Psr\Log\LoggerInterface $logger
     * @param Context $context
     * @param TimezoneInterface $timezone
     */
    public function __construct(
        Client $client,
        Log $log,
        InvoiceFactory $invoice,
        Customer $customer,
        CustomerRepositoryInterface $customerInterface,
        Config $config,
        PaymentMethodsFactory $paymentMethods,
        PaymentMethodsResource $paymentMethodsResource,
        Order $orderSync,
        \Psr\Log\LoggerInterface $logger,
        Context $context,
        TimezoneInterface $timezone
    ) {
        parent::__construct($client, $log, $context);
        $this->_invoice                = $invoice;
        $this->_syncCustomer           = $customer;
        $this->_customerInterface      = $customerInterface;
        $this->type                    = 'invoice';
        $this->config                  = $config;
        $this->_paymentMethods         = $paymentMethods;
        $this->_paymentMethodsResource = $paymentMethodsResource;
        $this->orderSync               = $orderSync;
        $this->logger                  = $logger;
        $this->timezone                = $timezone;
    }

    /**
     * @param $incrementId
     *
     * @return mixed
     * @throws \Zend_Http_Client_Exception
     * @throws \Exception
     */
    public function sync($incrementId)
    {
        try {
            $model            = $this->_invoice->create()->loadByIncrementId($incrementId);
            if (!$model->getId()) {
                throw new LocalizedException(__('We can\'t find the Invoice #%1', $incrementId));
            }
            if (is_array($this->config->getSyncFrom())) {
                if (!in_array($model->getStoreId(), $this->config->getSyncFrom())) {
                    $this->addLog($incrementId, null, 'Invoice sync is not enabled for this store.', 'skip');
                    return null;
                }
            }

            $modelOrder       = $model->getOrder();
            $orderIncrementId = $modelOrder->getIncrementId();
            $checkInvoice     = $this->checkInvoice($orderIncrementId);
            if (!isset($checkInvoice['Id'])) {
                //force a sync on order if order is not found on QBO
                $orderSyncEnabled = $this->config->isEnableByType('order');
                if ($orderSyncEnabled == true) {
                    $orderQBOId = $this->orderSync->sync($orderIncrementId);
                }

                if (empty($orderQBOId) || $orderSyncEnabled == false) {
                    $this->addLog($incrementId, null, __('We can\'t find the Order #%1 on QBO to map with this invoice #%2', $orderIncrementId, $incrementId));

                    return null;
                }
                $checkInvoice = $this->checkInvoice($orderIncrementId);
            }

            if (!isset($orderQBOId)) {
                $orderQBOId = $checkInvoice['Id'];
            }

            /**
             * check the case delete customer before sync their invoice
             */
            $customerIsGuest = true;
            if ($modelOrder->getCustomerId()) {
                try {
                    $this->_customerInterface->getById($modelOrder->getCustomerId());
                    $customerIsGuest = false;
                } catch (NoSuchEntityException $e) {
                    //customerIsGuest still true
                }
            }

            $this->setModel($model);
            $this->prepareParams($orderQBOId, $customerIsGuest);
            $checkPayment = $this->checkPayment($model->getIncrementId());
            $params       = array_replace_recursive($this->getParameter(), $checkPayment);

            //match payment amount with remaining invoice balance in case of rounding differences
            if (abs($params['TotalAmt'] - $checkInvoice['Balance']) <= 0.01) {
                $params['TotalAmt']          = $checkInvoice['Balance'];
                $params['Line'][0]['Amount'] = $checkInvoice['Balance'];
            }

            $response = $this->sendRequest(\Zend_Http_Client::POST, 'payment', $params);
            if (!empty($response['Payment']['Id'])) {
                $qboId = $response['Payment']['Id'];
                $this->addLog($incrementId, $qboId);
            }
            $this->parameter = [];

            return $qboId ?? null;

        } catch (LocalizedException $e) {
            $this->addLog($incrementId, null, $e->getMessage());
        }

        return null;
    }

    /**
     * @param $id
     * @param null $customerIsGuest
     *
     * @return $this
     * @throws LocalizedException
     * @throws \Exception
     */
    protected function prepareParams($id, $customerIsGuest = null)
    {
        $model  = $this->getModel();
        $params = [
            'TxnDate'     => $this->timezone->date(new \DateTime($model->getCreatedAt()))->format('Y-m-d'),
            'CustomerRef' => $this->prepareCustomerId($customerIsGuest),
            'Line'        => $this->prepareLineInvoice($id),
            'TotalAmt'    => $model->getBaseGrandTotal() - $model->getBaseShippingAmount(),
        ];

        //required for France payments
        $params['PaymentRefNum'] = $model->getIncrementId();

        if ($this->getIsShippingEnabled() == true) {
            $params['TotalAmt'] = $model->getBaseGrandTotal();
        }
        $this->setParameter($params);
        $this->preparePaymentMethod();

        return $this;
    }

    /**
     *  get payment method
     */
    public function preparePaymentMethod()
    {
        $modelOrder    = $this->getModel()->getOrder();
        $code          = $modelOrder->getPayment()->getMethodInstance()->getCode();
        $paymentMethod = $this->_paymentMethods->create();
        $this->_paymentMethodsResource->load($paymentMethod, $code, 'payment_code');
        if ($paymentMethod->getId()) {
            $params['PaymentMethodRef'] = [
                'value' => $paymentMethod->getQboId(),
            ];
            if (!empty($paymentMethod->getDepositAccount())) {
                $params['DepositToAccountRef'] = [
                    'value' => $paymentMethod->getDepositAccount(),
                ];
            }
            $this->setParameter($params);
        }
    }

    /**
     * @param null $customerIsGuest
     *
     * @return array
     * @throws LocalizedException
     */
    public function prepareCustomerId($customerIsGuest = null)
    {
        try {
            $modelOrder = $this->getModel()->getOrder();
            $customerId = $modelOrder->getCustomerId();
            if ($customerId and $customerIsGuest == false) {
                $cusRef = $this->_syncCustomer->sync($customerId, false);
            } else {
                $cusRef = $this->_syncCustomer->syncGuest(
                    $modelOrder->getBillingAddress(),
                    $modelOrder->getShippingAddress()
                );
            }

            return ['value' => $cusRef];
        } catch (\Exception $e) {
            throw new LocalizedException(
                __('Can\'t sync customer on Invoice to QBO')
            );
        }
    }

    /**
     * Add Item to Order
     *
     * @param $id
     *
     * @return array
     */
    public function prepareLineInvoice($id)
    {
        $invoice[] = [
            'TxnId'   => $id,
            'TxnType' => 'Invoice'
        ];

        if ($this->getIsShippingEnabled() == true) {
            $amount = $this->getModel()->getBaseGrandTotal();
        } else {
            $amount = $this->getModel()->getBaseGrandTotal() - $this->getModel()->getBaseShippingAmount();
        }

        $lines[] = [
            'Amount'    => $amount,
            'LinkedTxn' => $invoice,
        ];

        return $lines;
    }


    /**
     * Check invoice by Increment Id
     *
     * @param $id
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function checkInvoice($id)
    {
        $prefix = $this->config->getPrefix('order');
        $name   = $prefix . $id;
        $query  = "SELECT Id, SyncToken, Balance FROM invoice WHERE DocNumber='{$name}'";

        return $this->query($query);
    }

    /**
     * Check if payment exists
     *
     * @param $incrementId
     *
     * @return array
     * @throws LocalizedException
     */
    protected function checkPayment($incrementId)
    {
        $query = "SELECT Id, SyncToken FROM Payment WHERE PaymentRefNum='{$incrementId}'";

        return $this->query($query);
    }
}
