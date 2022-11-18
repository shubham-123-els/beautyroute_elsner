<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Log;

use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\Log\CollectionFactory;
use Magenest\QuickBooksOnline\Model\Synchronization\Customer;
use Magenest\QuickBooksOnline\Model\Synchronization\Item;
use Magenest\QuickBooksOnline\Model\Synchronization\Order;
use Magenest\QuickBooksOnline\Model\Synchronization\Invoice;
use Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo;
use Magenest\QuickBooksOnline\Model\Synchronization\PaymentMethods;
use Magenest\QuickBooksOnline\Model\Synchronization\TaxCode;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Model\ResourceModel\Order as OrderResource;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Backend\App\Action\Context;

/**
 * MassResync from Log page
 * Class MassResync
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Log
 */
class MassResync extends ReSyncAll
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * MassResync constructor.
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
     * @param Filter $filter
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
        OrderResource $orderResource,
        Filter $filter
    ) {
        parent::__construct($context, $resultPageFactory, $collectionFactory, $config, $customer, $item, $order, $invoice, $creditmemo, $paymentMethods, $taxCode, $messageManager, $scopeConfig, $taxFactory, $orderFactory, $orderResource);
        $this->filter = $filter;
    }

    /**
     * @return \Magenest\QuickBooksOnline\Model\ResourceModel\Log\Collection|\Magento\Framework\Data\Collection\AbstractDb
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getLogCollection()
    {
        return $this->filter->getCollection(parent::getLogCollection());
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
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
                    $this->messageManager->addSuccessMessage(__('Nothing failed in selected rows to resync.'));
                } else {
                    $this->messageManager->addSuccessMessage(__('A total of %1 record(s) are processed.', $count));
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage('Error Mass Re-Syncing Data to QuickbookOnline: ' . $e->getMessage());
            }

        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online. Please go to Configuration to finish the connection.'));
        }

        return $this->_redirect('*/log/');
    }
}
