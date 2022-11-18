<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax;

/**
 * Class Index
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Tax
 */
class Index extends AbstractTax
{
    /**
     * execute the action
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend((__('Mapping Tax')));
        return $resultPage;
    }
}
