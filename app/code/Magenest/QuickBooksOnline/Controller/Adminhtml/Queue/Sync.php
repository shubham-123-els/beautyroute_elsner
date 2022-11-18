<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\Synchronization\Customer;
use Magenest\QuickBooksOnline\Model\Synchronization\Item;
use Magenest\QuickBooksOnline\Model\Synchronization\Order;
use Magenest\QuickBooksOnline\Model\Synchronization\Invoice;
use Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo;
use Magenest\QuickBooksOnline\Logger\Logger;
use Magento\Framework\Message\ManagerInterface;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Backend\App\Action\Context;

/**
 * Class Sync
 * Sync all entities in queue
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class Sync extends AbstractQueue
{
    /**
     * @var Config
     */
    protected $config;

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
     * @var Logger
     */
    protected $logger;

    /**
     * Sync constructor.
     *
     * @param Context $context
     * @param QueueFactory $queueFactory
     * @param Filter $filter
     * @param QueueCollectionFactory $queueCollection
     * @param Config $config
     * @param Customer $customer
     * @param Item $item
     * @param Order $order
     * @param Invoice $invoice
     * @param Creditmemo $creditmemo
     * @param Logger $logger
     */
    public function __construct(
        Context $context,
        QueueFactory $queueFactory,
        Filter $filter,
        QueueCollectionFactory $queueCollection,
        Config $config,
        Customer $customer,
        Item $item,
        Order $order,
        Invoice $invoice,
        Creditmemo $creditmemo,
        Logger $logger
    ) {
        parent::__construct($context, $queueFactory, $filter, $queueCollection);
        $this->customer       = $customer;
        $this->item           = $item;
        $this->order          = $order;
        $this->invoice        = $invoice;
        $this->creditmemo     = $creditmemo;
        $this->messageManager = $context->getMessageManager();
        $this->config         = $config;
        $this->logger         = $logger;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $connect = $this->config->getConnected();
        if ($connect && $connect == 1) {
            $processed = $this->syncQueue();
            $this->messageManager->addSuccessMessage(__('A total of %1 records are processed', $processed));
        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online. Please go to Configuration to finish the connection.'));
        }

        return $this->_redirect('*/*/index');
    }

    /**
     * @return \Magenest\QuickBooksOnline\Model\ResourceModel\Queue\Collection
     */
    public function getQueueCollection()
    {
        if ($this->queueCollection->create()->getSize() > 2000) {
            $this->messageManager
                ->addWarningMessage('To avoid timeout, only the oldest 2000 records are processed. To force sync all records in queue please use the checkboxes and Action menu.');
        }

        return $this->queueCollection->create()->setPageSize(2000)->setCurPage(1);
    }

    /**
     * @return int
     */
    public function syncQueue()
    {
        $collection = $this->getQueueCollection();
        $processed  = 0;
        //FIFO for queue
        /** @var \Magenest\QuickBooksOnline\Model\Queue $queueItem */
        foreach ($collection->getItems() as $queueItem) {
            $type = $queueItem->getType();
            try {
                if ($type == 'customer' && $this->config->isEnableByType('customer')) {
                    $queueItem->delete();
                    $this->customer->sync($queueItem->getTypeId(), true);
                    $processed++;
                } elseif ($type == 'item' && $this->config->isEnableByType('item')) {
                    $queueItem->delete();
                    $this->item->sync($queueItem->getTypeId(), true);
                    $processed++;
                } elseif ($type == 'order' && $this->config->isEnableByType('order')) {
                    $queueItem->delete();
                    $this->order->sync($queueItem->getTypeId());
                    $processed++;
                } elseif ($type == 'ordervoid' && $this->config->isEnableByType('order')) {
                    $queueItem->delete();
                    $this->order->void($queueItem->getTypeId());
                    $processed++;
                } elseif ($type == 'invoice' && $this->config->isEnableByType('invoice')) {
                    $queueItem->delete();
                    $this->invoice->sync($queueItem->getTypeId());
                    $processed++;
                } elseif ($type == 'creditmemo' && $this->config->isEnableByType('creditmemo')) {
                    $queueItem->delete();
                    $this->creditmemo->sync($queueItem->getTypeId());
                    $processed++;
                }
            } catch (\Exception $e) {
                $this->logger->debug(__('Error syncing from queue for %1: %2', $type, $e->getMessage()));
            }
        }

        return $processed;
    }
}
