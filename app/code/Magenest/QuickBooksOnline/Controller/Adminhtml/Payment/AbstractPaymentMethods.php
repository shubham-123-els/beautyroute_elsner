<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Payment;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\PaymentMethods;

/**
 * Class AbstractPaymentMethods
 *
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Payment
 */
abstract class AbstractPaymentMethods extends Action
{
    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;
    
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var PaymentMethods
     */
    protected $paymentMethods;

    /**
     * AbstractPaymentMethods constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param PaymentMethods $paymentMethods
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        PaymentMethods $paymentMethods,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_scopeConfig = $scopeConfig;
        $this->paymentMethods = $paymentMethods;
        parent::__construct($context);
    }

    /**
     * Init actions
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function _initAction()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_QuickBooksOnline::categories')
            ->addBreadcrumb(__('View Payment Methods'), __('View Payment Methods'));
        $resultPage->getConfig()->getTitle()->set(__('View Payment Methods'));

        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_QuickBooksOnline::payment_methods');
    }
}
