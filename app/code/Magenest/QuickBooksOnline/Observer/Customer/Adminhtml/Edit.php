<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Observer\Customer\Adminhtml;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magenest\QuickBooksOnline\Observer\Customer\AbstractCustomer;

/**
 * Class Edit
 * @package Magenest\QuickBooksOnline\Observer\Customer
 */
class Edit extends AbstractCustomer implements ObserverInterface
{

    /**
     * Admin edit information address
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $requests = $this->_request->getParams();
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                $event     = $observer->getEvent();
                $eventName = $event->getName();
                $toSave    = false;
                /** @var \Magento\Customer\Model\Customer $customer */
                if ($eventName == 'adminhtml_customer_save_after') {
                    $customer = $event->getCustomer();
                    $toSave   = true;
                } else {
                    $customer = $event->getCustomerDataObject();
                }
                $id = $customer->getId();
                if ($id && $this->isEnabled()) {
                    if ($this->isImmediatelyMode()) {
//                        $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
                        if ((isset($requests['isAjax']) && $requests['isAjax'] == 'true') || $toSave == true) {
                            $qboId = $this->_customer->sync($id, true);
                            if ($qboId && (empty($requests['isAjax']) || $requests['isAjax'] != 'true')) {
                                $this->messageManager->addSuccessMessage(
                                    __('Successfully updated this customer(Id: %1) in QuickBooksOnline.', $qboId)
                                );
                            }
                        }
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
