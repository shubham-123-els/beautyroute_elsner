<?php

namespace MageArray\Customeractivation\Plugin\Account;

use Magento\Customer\Model\CustomerExtractor;
use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Request\Http as Request;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Model\Url as CustomerUrl;
use Magento\Framework\Message\ManagerInterface;
use Magento\Customer\Helper\Address;
use Magento\Framework\UrlFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Customer\Model\Account\Redirect;
use Magento\Framework\UrlInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Customer\Model\CustomerFactory;

class CreatePost
{
    public function __construct(
        DataHelper $dataHelper,
        CustomerExtractor $customerExtractor,
        Session $customerSession,
        Request $request,
        CustomerRepositoryInterface $customerRepositoryInterface,
        AccountManagementInterface $accountManagement,
        CustomerUrl $customerUrl,
        ManagerInterface $managerInterface,
        Address $addressHelper,
        UrlFactory $urlFactory,
        StoreManagerInterface $storeManager,
        Redirect $redirect,
        UrlInterface $url,
        ResultFactory $resultFactory,
        CustomerFactory $customerFactory
    ) {
        $this->dataHelper = $dataHelper;
        $this->customerExtractor = $customerExtractor;
        $this->session = $customerSession;
        $this->request = $request;
        $this->customerRepositoryInterface = $customerRepositoryInterface;
        $this->accountManagement = $accountManagement;
        $this->customerUrl = $customerUrl;
        $this->messageManager = $managerInterface;
        $this->addressHelper = $addressHelper;
        $this->urlModel = $urlFactory->create();
        $this->storeManager = $storeManager;
        $this->redirect = $redirect;
        $this->url = $url;
        $this->resultFactory = $resultFactory;
        $this->customerFactory = $customerFactory;
    }
    
    public function aroundExecute(\Magento\Customer\Controller\Account\CreatePost $subject, callable $proceed)
    {
        $email = $this->request->getParam('email');
        if ($email) {
               $websiteId = $this->storeManager->getWebsite()->getWebsiteId();
               $customerCheck = $this->customerFactory->create();
               $customerCheck->setWebsiteId($websiteId);
               $customerCheck->loadByEmail($email);
            if ($customerCheck->getId()) {
                return $proceed();
            } else {
                $returnValue = $proceed();
                $customer = $this->customerRepositoryInterface->get($email, $websiteId);
                $confirmationStatus = $this->accountManagement->getConfirmationStatus($customer->getId());
                $defaultStatus = $this->dataHelper->getDefaultActivationStatus($customer->getGroupId());
                
                if (!($defaultStatus == 0)) {
                             $this->session->setCustomerDataAsLoggedIn($customer);
                             $this->messageManager->addSuccess($this->getSuccessMessage());
                             return $returnValue;
                } else {
                             $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                             $result->setUrl($this->url->getUrl('customer/account/login/'));
                             return $result;
                }
            }
        }
        $returnValue = $proceed();
        return $returnValue;
    }
    
    protected function getSuccessMessage()
    {
        if ($this->addressHelper->isVatValidationEnabled()) {
            if ($this->addressHelper->getTaxCalculationAddressType() == Address::TYPE_SHIPPING) {
                // @codingStandardsIgnoreStart
                $message = __(
                    'If you are a registered VAT customer, please click <a href="%1">here</a> to enter your shipping address for proper VAT calculation.',
                    $this->urlModel->getUrl('customer/address/edit')
                );
                // @codingStandardsIgnoreEnd
            } else {
                // @codingStandardsIgnoreStart
                $message = __(
                    'If you are a registered VAT customer, please click <a href="%1">here</a> to enter your billing address for proper VAT calculation.',
                    $this->urlModel->getUrl('customer/address/edit')
                );
                // @codingStandardsIgnoreEnd
            }
        } else {
            $message = __('Thank you for registering with %1.', $this->storeManager->getStore()->getFrontendName());
        }
        return $message;
    }
}
