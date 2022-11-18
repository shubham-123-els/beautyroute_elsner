<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Observer\Customer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class Update
 */
class Register extends AbstractCustomer implements ObserverInterface
{

    /**
     * Customer register success event
     *
     * @param Observer $observer
     * @return string|void
     */
    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var \Magento\Customer\Model\Customer $customer */
                $customer = $observer->getEvent()->getCustomer();
                $id = $customer->getId();
                if ($id && $this->isEnabled()) {
                    if ($this->isImmediatelyMode()) {
                        $this->_customer->sync($id, true);
                    } else {
                        $this->addToQueue($id);
                    }
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
    }
}
