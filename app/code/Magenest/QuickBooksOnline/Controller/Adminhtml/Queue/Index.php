<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;

/**
 * Class Index
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class Index extends AbstractQueue
{
    /**
     * Execute the action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $this->messageManager->addNoticeMessage(__('Adding all customers/products/orders/invoices to queue may need a lot of time to execute'));
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend((__('List Queue')));

        return $resultPage;
    }
}
