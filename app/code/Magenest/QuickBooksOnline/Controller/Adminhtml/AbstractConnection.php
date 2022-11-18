<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magenest\QuickBooksOnline\Model\Authenticate;

/**
 * Class AbstractConnection
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Connect
 */
abstract class AbstractConnection extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var Authenticate
     */
    protected $authenticate;

    /**
     * AbstractConnection constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Authenticate $authenticate
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        Authenticate $authenticate
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->authenticate = $authenticate;
    }

    /**
     * Check Acl
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_QuickBooksOnline::config_qbonline');
    }
}
