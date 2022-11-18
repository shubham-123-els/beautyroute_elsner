<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */

namespace Magenest\QuickBooksOnline\Cron;

use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory;
use Magenest\QuickBooksOnline\Model\Synchronization\Customer;
use Magenest\QuickBooksOnline\Model\Synchronization\Item;
use Magenest\QuickBooksOnline\Model\Synchronization\Order;
use Magenest\QuickBooksOnline\Model\Synchronization\Invoice;
use Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magento\Framework\App\ObjectManager;

/**
 * Class Synchronization
 * @package Magenest\QuickBooksOnline\Cron
 */
class Synchronization
{
    /**
     * How many rows to process per minute for each entity type (with some headroom)
     */
    const PRODUCTS_PER_MIN  = 80;
    const CUSTOMERS_PER_MIN = 80;
    const ORDERS_PER_MIN    = 24;
    const INVOICES_PER_MIN  = 48;
    const MEMOS_PER_MIN     = 36;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

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
     * @var Config
     */
    protected $config;

    /**
     * @var array
     */
    protected $syncTime;

    /**
     * Synchronization constructor.
     *
     * @param CollectionFactory $collectionFactory
     * @param Customer $customer
     * @param Item $item
     * @param Order $order
     * @param Invoice $invoice
     * @param Creditmemo $creditmemo
     * @param ManagerInterface $messageManager
     * @param Config $config
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        Customer $customer,
        Item $item,
        Order $order,
        Invoice $invoice,
        Creditmemo $creditmemo,
        ManagerInterface $messageManager,
        Config $config
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->customer          = $customer;
        $this->item              = $item;
        $this->order             = $order;
        $this->invoice           = $invoice;
        $this->creditmemo        = $creditmemo;
        $this->messageManager    = $messageManager;
        $this->config            = $config;
        $this->syncTime          = [];
    }

    /**
     * Execute sync items in queue
     */
    public function execute()
    {

        // get config time
        $timeCustomer   = $this->config->getCronTimeByType('customer') ?? 5;
        $timeItem       = $this->config->getCronTimeByType('item') ?? 5;
        $timeOrder      = $this->config->getCronTimeByType('order') ?? 5;
        $timeInvoice    = $this->config->getCronTimeByType('invoice') ?? 5;
        $timeCreditmemo = $this->config->getCronTimeByType('creditmemo') ?? 5;

        // get sync mode
        $modeCustomer   = $this->config->getSyncModeByType('customer');
        $modeItem       = $this->config->getSyncModeByType('item');
        $modeOrder      = $this->config->getSyncModeByType('order');
        $modeInvoice    = $this->config->getSyncModeByType('invoice');
        $modeCreditmemo = $this->config->getSyncModeByType('creditmemo');

        /**
         * Cron time will be used to calculate how many rows is processed per minute for each cron run
         * Per 5 mins is the quickest cron frequency
         */
        $this->syncTime = [
            'customer'   => $timeCustomer,
            'item'       => $timeItem,
            'order'      => $timeOrder,
            'invoice'    => $timeInvoice,
            'creditmemo' => $timeCreditmemo
        ];

        $minute = date('i');
        $hour   = date('H');
        $time   = $hour * 60 + $minute;

        try {
            // cron sync with customer
            if ($modeCustomer == 1 && $timeCustomer && ($time % $timeCustomer == 0)) {
                $this->syncCustomer();
            }

            // cron sync with item
            if ($modeItem == 1 && $timeItem && ($time % $timeItem == 0)) {
                $this->syncItem();
            }

            // cron sync with order
            if ($modeOrder == 1 && $timeOrder && ($time % $timeOrder == 0)) {
                $this->syncOrder();
                $this->syncOrderVoid();
            }

            // cron sync with invoice
            if ($modeInvoice == 1 && $timeInvoice && ($time % $timeInvoice == 0)) {
                $this->syncInvoice();
            }

            // cron sync with creditmemo
            if ($modeCreditmemo == 1 && $timeCreditmemo && ($time % $timeCreditmemo == 0)) {
                $this->syncCreditmemo();
            }

        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Error when syncing data to QuickBooks Online: %1', $e->getMessage()));
        }
    }

    /**
     * @return \Magenest\QuickBooksOnline\Model\ResourceModel\Queue\Collection
     */
    public function getQueueCollection()
    {
        return $this->collectionFactory->create();
    }

    public function syncCustomer()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['customer'] * self::CUSTOMERS_PER_MIN;
        $collection->addFieldToFilter('type', 'customer')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->customer->sync($queue->getTypeId(), true);
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Customer Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }

    public function syncItem()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['item'] * self::PRODUCTS_PER_MIN;
        $collection->addFieldToFilter('type', 'item')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->item->sync($queue->getTypeId(), true);
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Item Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }

    public function syncOrder()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['order'] * self::ORDERS_PER_MIN;
        $collection->addFieldToFilter('type', 'order')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->order->sync($queue->getTypeId());
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Order Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }

    public function syncOrderVoid()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['order'] * self::ORDERS_PER_MIN;
        $collection->addFieldToFilter('type', 'ordervoid')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->order->void($queue->getTypeId());
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Order Void Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }

    public function syncInvoice()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['invoice'] * self::INVOICES_PER_MIN;
        $collection->addFieldToFilter('type', 'invoice')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->invoice->sync($queue->getTypeId());
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Invoice Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }

    public function syncCreditmemo()
    {
        $collection = $this->getQueueCollection();
        $rows       = $this->syncTime['creditmemo'] * self::MEMOS_PER_MIN;
        $collection->addFieldToFilter('type', 'creditmemo')->setPageSize($rows)->setCurPage(1);
        if ($collection->count() > 0) {
            /** @var \Magenest\QuickBooksOnline\Model\Queue $queue */
            foreach ($collection as $queue) {
                try {
                    $queue->delete();
                    $this->creditmemo->sync($queue->getTypeId());
                } catch (\Exception $exception) {
                    ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug('Memo Cron Sync: ' . $exception->getMessage());
                }
            }
        }
    }
}
