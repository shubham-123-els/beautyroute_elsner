<?php
/**
 * Copyright © 2018 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Elsner\Email\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class SalesOrderCreditmemoSaveAfter implements ObserverInterface
{
    public function __construct(
        \Elsner\Email\Model\OrderEmail $orderemail
    ) {
        $this->_orderemail = $orderemail;
    }

    public function execute(Observer $observer)
    {
        try {
            $creditmemo = $observer->getEvent()->getCreditmemo();
            $this->_orderemail->CreditMemoAfter($creditmemo->getorderId());
        } catch (Exception $e) {
            return $e->getmessage();
        }
    }
}