<?php

namespace MageArray\Customeractivation\Observer;

use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Customer\Model\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;

/**
 * Class AfterCustomerLogin
 * @package MageArray\Customeractivation\Observer
 */
class AfterCustomerLogin implements ObserverInterface
{
    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var DataHelper
     */
    private $dataHelper;

    /**
     * @var ManagerInterface
     */
    private $messageManager;

    /**
     * AfterCustomerLogin constructor.
     * @param DataHelper $dataHelper
     * @param ManagerInterface $messageManager
     * @param Session $customerSession
     */
    public function __construct(
        DataHelper $dataHelper,
        ManagerInterface $messageManager,
        Session $customerSession
    ) {
        $this->customerSession = $customerSession;
        $this->dataHelper = $dataHelper;
        $this->messageManager = $messageManager;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if (!$this->dataHelper->isActive()) {
            return;
        }
        $customer = $observer->getCustomer();

        if ($this->dataHelper->isCustomerActivationByGroup()
            && !in_array(
                $customer->getGroupId(),
                $this->dataHelper
                    ->getCustomerActivationGroupIds()
            )
        ) {
            return;
        }

        $statusValue = $this->dataHelper
                        ->getAttributeValue($customer->getId());

        if (!$statusValue) {
            $this->customerSession->setId(null);
            $errorMessage = $this->dataHelper
                ->getErrorMessageForUser();
            $this->messageManager->addError(__($errorMessage));
        }
    }
}
