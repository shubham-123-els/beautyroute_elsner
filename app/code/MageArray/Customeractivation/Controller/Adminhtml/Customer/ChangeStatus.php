<?php
namespace MageArray\Customeractivation\Controller\Adminhtml\Customer;

use MageArray\Customeractivation\Controller\Adminhtml\Customer;

/**
 * Class ChangeStatus
 * @package MageArray\Customeractivation\Controller\Adminhtml\Customer
 */
class ChangeStatus extends Customer
{
    /**
     * @return \Magento\Framework\App\ResponseInterface
     */
    public function execute()
    {
        $customerId = $this->getRequest()->getParam('customer_id');
        try {
            $customer = $this->datahelper->getCustomerById($customerId);
            $value = $this->datahelper->getAttributeValue($customerId);
            $statusValue = ($value && $value == 1) ? 0 : 1;
            $this->datahelper->setAttributeValue($customerId, $statusValue);
            $this->datahelper->saveCustomer($customer);

            if ($statusValue) {
                $this->datahelper->sendApprovalEmail($customer);
            }
            $this->messageManager->addSuccess(
                __($statusValue ?
                    'Customer account approved successfully' :
                    'Customer account disapproved successfully')
            );
        } catch (\Exception $e) {
            $this->messageManager->addSuccess(__($e->getMessage()));
        }

        return $this->_redirect('customer/index/edit', ['id' => $customerId]);
    }
}
