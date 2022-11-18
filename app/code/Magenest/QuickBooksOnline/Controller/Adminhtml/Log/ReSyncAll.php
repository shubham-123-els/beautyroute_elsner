<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Log;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractLog;
use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\ResourceModel\Log\CollectionFactory;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\Synchronization\Customer;
use Magenest\QuickBooksOnline\Model\Synchronization\Item;
use Magenest\QuickBooksOnline\Model\Synchronization\Order;
use Magenest\QuickBooksOnline\Model\Synchronization\Invoice;
use Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo;
use Magenest\QuickBooksOnline\Model\Synchronization\PaymentMethods;
use Magenest\QuickBooksOnline\Model\Synchronization\TaxCode;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Model\ResourceModel\Order as OrderResource;
use Magento\Backend\App\Action\Context;

/**
 * Resync all failed rows
 * Class Sync
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class ReSyncAll extends AbstractLog
{
    const PREFIX_GUEST  = 'Guest ';
    const STATUS_FAILED = 2;

    /**
     * @var TaxCode
     */
    protected $taxCode;

    /**
     * @var PaymentMethods
     */
    protected $paymentMethods;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var Item
     */
    protected $item;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @var ManagerInterface
     */
    protected $messageManager;

    /**
     * @var Creditmemo
     */
    protected $creditmemo;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var TaxFactory
     */
    protected $taxFactory;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var OrderFactory
     */
    protected $orderFactory;

    /**
     * @var OrderResource
     */
    protected $orderResource;

    /**
     * ReSyncAll constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param CollectionFactory $collectionFactory
     * @param Config $config
     * @param Customer $customer
     * @param Item $item
     * @param Order $order
     * @param Invoice $invoice
     * @param Creditmemo $creditmemo
     * @param PaymentMethods $paymentMethods
     * @param TaxCode $taxCode
     * @param ManagerInterface $messageManager
     * @param ScopeConfigInterface $scopeConfig
     * @param TaxFactory $taxFactory
     * @param OrderFactory $orderFactory
     * @param OrderResource $orderResource
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        CollectionFactory $collectionFactory,
        Config $config,
        Customer $customer,
        Item $item,
        Order $order,
        Invoice $invoice,
        Creditmemo $creditmemo,
        PaymentMethods $paymentMethods,
        TaxCode $taxCode,
        ManagerInterface $messageManager,
        ScopeConfigInterface $scopeConfig,
        TaxFactory $taxFactory,
        OrderFactory $orderFactory,
        OrderResource $orderResource
    ) {
        parent::__construct($context, $resultPageFactory, $collectionFactory);
        $this->config         = $config;
        $this->customer       = $customer;
        $this->item           = $item;
        $this->order          = $order;
        $this->invoice        = $invoice;
        $this->creditmemo     = $creditmemo;
        $this->messageManager = $messageManager;
        $this->paymentMethods = $paymentMethods;
        $this->taxCode        = $taxCode;
        $this->scopeConfig    = $scopeConfig;
        $this->taxFactory     = $taxFactory;
        $this->orderFactory   = $orderFactory;
        $this->orderResource  = $orderResource;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $connect = $this->config->getConnected();
        if ($connect && $connect == 1) {
            try {
                $count = 0;
                if ($this->config->isEnableByType('customer')) {
                    $count += $this->reSyncCustomer();
                }
                if ($this->config->isEnableByType('item')) {
                    $count += $this->reSyncItem();
                }
                if ($this->config->isEnableByType('order')) {
                    $count += $this->reSyncOrder();
                    $count += $this->reSyncOrderVoid();
                }
                if ($this->config->isEnableByType('invoice')) {
                    $count += $this->reSyncInvoice();
                }
                if ($this->config->isEnableByType('creditmemo')) {
                    $count += $this->reSyncCreditmemo();
                }
                $count += $this->reSyncPaymentMethod();
                $count += $this->reSyncTaxCode();
                if ($count == 0) {
                    $this->messageManager->addSuccessMessage(__('Nothing failed in logs to resync.'));
                } else {
                    $this->messageManager->addSuccessMessage(__('A total of %1 record(s) are processed.', $count));
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage('Error Re-Syncing Data to QuickbookOnline: ' . $e->getMessage());
            }

        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online. Please go to Configuration to finish the connection.'));
        }

        return $this->_redirect('*/log/');
    }

    /**
     * @return \Magenest\QuickBooksOnline\Model\ResourceModel\Log\Collection
     */
    public function getLogCollection()
    {
        return $this->_collectionFactory->create();
    }

    public function reSyncCustomer()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'customer');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    if (mb_substr($log->getTypeId(), 0, 6) != self::PREFIX_GUEST) {
                        $this->customer->sync($log->getTypeId(), true);
                        $count++;
                    } else {
                        $orderId    = (int)mb_substr($log->getTypeId(), 6, strlen($log->getTypeId()));
                        $modelSales = $this->orderFactory->create();
                        $this->orderResource->load($modelSales, $orderId);
                        $this->customer->syncGuest($modelSales->getBillingAddress(), $modelSales->getShippingAddress(), true);
                        $count++;
                    }
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    public function reSyncItem()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'item');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    $this->item->sync($log->getTypeId(), true);
                    $count++;
                } catch (\Exception $exception) {
                }

            }
        }

        return $count;
    }

    public function reSyncOrder()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'order');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    $this->order->sync($log->getTypeId());
                    $count++;
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    public function reSyncOrderVoid()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'ordervoid');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    $this->order->void($log->getTypeId());
                    $count++;
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    public function reSyncInvoice()
    {
        $count = 0;

        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'invoice');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    $this->invoice->sync($log->getTypeId());
                    $count++;
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    /**
     * sync credit memo
     */
    public function reSyncCreditmemo()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'creditmemo');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $log->delete();
                    $this->creditmemo->sync($log->getTypeId());
                    $count++;
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    /**
     * sync payment method
     */
    public function reSyncPaymentMethod()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'paymentmethod');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $codeMethod = $log->getTypeId();
                    $log->delete();
                    $paymentMethodsList = $this->scopeConfig->getValue('payment');
                    foreach ($paymentMethodsList as $key => $value) {
                        if (mb_substr($key, 0, 20) == $codeMethod) {
                            $codeMethod = $key;
                            break;
                        }
                    }
                    $title = $paymentMethodsList[$codeMethod]['title'];
                    if (strlen($title) > 31) {
                        $title = mb_substr($title, 0, 31);
                        $this->messageManager->addNoticeMessage(
                            __(
                                'Payment Methods %1 renamed to "%2" when syncing to QuickBooks Online due to character limit',
                                $paymentMethodsList[$codeMethod]['title'],
                                $title
                            )
                        );
                    }
                    try {
                        $this->paymentMethods->sync($title, $codeMethod);
                        $count++;
                    } catch (\Exception $e) {
                        $this->messageManager->addErrorMessage($e->getMessage());
                    }

                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }

    /**
     * sync credit memo
     */
    public function reSyncTaxCode()
    {
        $count      = 0;
        $collection = $this->getLogCollection();
        $collection->addFieldToFilter('status', self::STATUS_FAILED)->addFieldToFilter('type', 'taxcode');
        if ($collection->count() > 0) {
            /** @var Log $log */
            foreach ($collection as $log) {
                try {
                    $taxId = $log->getTypeId();
                    $log->delete();
                    $taxMapping = $this->taxFactory->create()->loadbyTaxId($taxId);
                    if (!empty($taxMapping->getData())) {
                        try {
                            $this->taxCode->sync($taxMapping->getTaxId(), trim($taxMapping->getTaxCode()), $taxMapping->getRate());
                            $count++;
                        } catch (\Exception $e) {
                            $this->messageManager->addErrorMessage($e->getMessage());
                        }
                    }
                } catch (\Exception $exception) {
                }
            }
        }

        return $count;
    }
}
