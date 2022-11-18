<?php

namespace Elsner\Email\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class SalesOrderCancelAfter implements ObserverInterface
{

    public function __construct(
        \Elsner\Email\Model\OrderEmail $orderemail
    ) {
        $this->_orderemail = $orderemail;
    }

    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $this->_orderemail->CancleOrderEmail($order->getCustomerEmail(),$order->getincrementId());
    }
}
