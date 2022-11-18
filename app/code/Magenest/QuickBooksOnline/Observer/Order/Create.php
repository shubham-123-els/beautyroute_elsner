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

namespace Magenest\QuickBooksOnline\Observer\Order;

use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface as ObserverInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\Order;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Sales\Model\OrderFactory;

/**
 * Class Create
 * @package Magenest\QuickBooksOnline\Observer\Order
 */
class Create extends AbstractObserver implements ObserverInterface
{
    /**
     * @var Order
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
     * @param Order $order
     * @param OrderFactory $orderFactory
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        Order $order,
        OrderFactory $orderFactory
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->_order = $order;
        $this->order  = $orderFactory;
        $this->type   = 'order';
    }

    /**
     * Dispatch when Invoice created
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var \Magento\Sales\Model\Order $order */
                $order = $observer->getEvent()->getOrder();
                if (empty($order)) {
                    $orderId = $observer->getEvent()->getOrderIds()[0];
                } else {
                    $orderId = $order->getId();
//                    if (!empty($order->getBaseTotalInvoiced()))
//                        return;
                }
                if ($orderId) {
                    $model       = $this->order->create()->load($orderId);
                    $incrementId = $model->getIncrementId();
                    if ($incrementId && $this->isEnabled()) {
                        if ($this->isImmediatelyMode()) {
                            $qboId = $this->_order->sync($incrementId, true);
                            /**
                             * @var \Magento\Backend\Model\Auth\Session $adminSession
                             */
                            $adminSession = ObjectManager::getInstance()->get('\Magento\Backend\Model\Auth\Session');
                            $isAdminPage  = $adminSession->isLoggedIn();
                            if ($qboId and $isAdminPage) {
                                $this->messageManager->addSuccessMessage(__('Successfully updated this Order(Id: %1) in QuickBooksOnline.', $qboId));
                            }
                        } else {
                            $this->addToQueue($incrementId);
                        }
                    }
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
    }
}
