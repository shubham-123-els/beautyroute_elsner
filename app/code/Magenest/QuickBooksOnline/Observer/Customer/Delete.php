<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Observer\Customer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class Delete
 * @package Magenest\QuickBooksOnline\Observer\Customer
 */
class Delete extends AbstractCustomer implements ObserverInterface
{
    /**
     * Admin delete customer event
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        //TODO in next version
    }
}
