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

namespace Magenest\QuickBooksOnline\Observer\Customer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\ObjectManager;

/**
 * Class Update
 * @package Magenest\QuickBooksOnline\Observer\Customer
 */
class Update extends AbstractCustomer implements ObserverInterface
{

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {

        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                $eventName = $observer->getEvent()->getName();
                if ($eventName == 'customer_address_save_commit_after') {
                    /** @var \Magento\Customer\Model\Customer $customer */
                    $customer = $observer->getEvent()->getCustomerAddress()->getCustomer();
                } else {
                    /** @var \Magento\Customer\Model\Customer $customer */
                    $customer = $observer->getEvent()->getCustomerDataObject();
                }

                $id = $customer->getId();
                if ($id && $this->isEnabled()) {
                    if ($this->isImmediatelyMode()) {
                        /** @var \Magento\Framework\Registry $registryObject */
                        $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
                        if ($registryObject->registry('check_to_syn_customer'.$id) == null) {
                            $this->_customer->sync($id, true);
                        }
                    } else {
                        $this->addToQueue($id);
                    }
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Something went wrong while saving. Please try again later.'));
            }
        }
    }
}
