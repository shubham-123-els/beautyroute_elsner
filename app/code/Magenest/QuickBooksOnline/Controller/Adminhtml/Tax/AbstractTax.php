<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\TaxCode;
use Magento\Tax\Model\Calculation\Rate;
use Magenest\QuickBooksOnline\Model\TaxFactory;

/**
 * Class AbstractTax
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Tax
 */
abstract class AbstractTax extends Action
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
     * @var TaxCode
     */
    protected $taxCode;

    /**
     * @var Rate
     */
    protected $taxInfo;

    /**
     * @var TaxFactory
     */
    protected $taxModel;

    /**
     * AbstractTax constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param TaxCode $taxCode
     * @param ScopeConfigInterface $scopeConfig
     * @param Rate $rate
     * @param TaxFactory $taxFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        TaxCode $taxCode,
        ScopeConfigInterface $scopeConfig,
        Rate $rate,
        TaxFactory $taxFactory
    ) {
        $this->taxModel = $taxFactory;
        $this->taxInfo  = $rate;
        $this->resultPageFactory = $resultPageFactory;
        $this->_scopeConfig = $scopeConfig;
        $this->taxCode = $taxCode;
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
        $resultPage->setActiveMenu('Magenest_QuickBooksOnline::tax')
            ->addBreadcrumb(__('View Tax'), __('View Tax'));
        $resultPage->getConfig()->getTitle()->set(__('View Tax'));

        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_QuickBooksOnline::tax');
    }
}
