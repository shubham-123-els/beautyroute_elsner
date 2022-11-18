<?php
namespace MageArray\Customeractivation\Controller\Adminhtml\Customer;

use MageArray\Customeractivation\Controller\Adminhtml\Customer;
use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Backend\App\Action\Context;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory;
use Magento\Ui\Component\MassAction\Filter;

/**
 * Class MassStatus
 * @package MageArray\Customeractivation\Controller\Adminhtml\Customer
 */
class MassStatus extends Customer
{
    /**
     * MassStatus constructor.
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     * @param DataHelper $dataHelper
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        DataHelper $dataHelper
    ) {
        parent::__construct($context, $dataHelper);
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->dataHelper = $dataHelper;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface
     */
    public function execute()
    {
        try {
            $customers = $this->filter->getCollection($this->collectionFactory->create());
            $statusValue = $this->getRequest()->getParam('status', 0);

            $totalCustomer = $customers->getSize();
            if ($totalCustomer) {
                foreach ($customers as $customer) {
                    $customerId = $customer->getId();
                    $customer = $this->dataHelper->getCustomerById($customerId);
                    $value = $this->dataHelper->getAttributeValue($customerId);

                    if ($value == $statusValue) {
                        continue;
                    }

                    $this->dataHelper->setAttributeValue($customerId, $statusValue);
                    $this->dataHelper->saveCustomer($customer);

                    if ($statusValue == 1) {
                        $this->dataHelper->sendApprovalEmail($customer);
                    }
                }
                $this->messageManager->addSuccess(__('A total of %1 record(s) were updated.', $totalCustomer));
            }
        } catch (\Exception $e) {
            $this->messageManager->addSuccess(__($e->getMessage()));
        }

        return $this->_redirect('customer/index');
    }
}
