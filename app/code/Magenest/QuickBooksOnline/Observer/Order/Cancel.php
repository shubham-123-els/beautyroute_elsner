<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 */

namespace Magenest\QuickBooksOnline\Observer\Order;

use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\Order as OrderSync;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\OrderFactory;

/**
 * Class Cancel
 * @package Magenest\QuickBooksOnline\Observer\Order
 */
class Cancel extends AbstractObserver implements ObserverInterface
{
    /**
     * @var OrderSync
     */
    protected $_order;

    /**
     * @var OrderFactory
     */
    protected $order;

    /**
     * Create constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     * @param OrderSync $order
     * @param OrderFactory $orderFactory
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        OrderSync $order,
        OrderFactory $orderFactory
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->_order = $order;
        $this->order  = $orderFactory;
        $this->type   = 'ordervoid';
    }

    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var Order $order */
                $order = $observer->getEvent()->getOrder();
                //orders are synced immediately, so order cancel can be synced immediately too
                if ($this->isImmediatelyMode('order')) {
                    $this->_order->void($order->getIncrementId());
                } else {
                    $this->addToQueue($order->getIncrementId());
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
    }
}
