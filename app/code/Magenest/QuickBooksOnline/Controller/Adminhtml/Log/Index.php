<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Log;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractLog;

/**
 * Class Index
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Log
 */
class Index extends AbstractLog
{
    /**
     * execute the action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend((__('History Logs')));

        return $resultPage;
    }
}
