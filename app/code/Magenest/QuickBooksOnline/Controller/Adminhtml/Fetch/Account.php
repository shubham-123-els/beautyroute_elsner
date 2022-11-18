<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Fetch;

use Magenest\QuickBooksOnline\Model\Synchronization\Account as FetchAccount;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Account
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Fetch
 */
class Account extends \Magento\Backend\App\Action
{
    /**
     * @var FetchAccount
     */
    protected $fetchAccount;

    /**
     * Account constructor.
     * @param Context $context
     * @param FetchAccount $fetchAccount
     */
    public function __construct(
        Context $context,
        FetchAccount $fetchAccount
    ) {
        $this->fetchAccount = $fetchAccount;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $this->fetchAccount->syncAllAccount();
            $this->fetchAccount->fetchAllAccount();

            $this->messageManager->addSuccessMessage(
                __('All Accounts are fetched successfully.')
            );
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(
                __('Something went wrong while syncing accounts. Please check your connection. Detail: ' . $e->getMessage())
            );
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());

        return $resultRedirect;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_QuickBooksOnline::config_qbonline');
    }
}
