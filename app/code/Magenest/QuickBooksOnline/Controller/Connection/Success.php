<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */

namespace Magenest\QuickBooksOnline\Controller\Connection;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Validator\Exception;
use Magenest\QuickBooksOnline\Model\Authenticate;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\App\Cache\Frontend\Pool;

/**
 * Class Success
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Connection
 */
class Success extends Action
{
    /**
     * @var Authenticate
     */
    protected $authenticate;

    /**
     * @var TypeListInterface
     */
    protected $cache;

    /**
     * @var Pool
     */
    protected $cachePool;

    /**
     * Success constructor.
     *
     * @param Context $context
     * @param Authenticate $authenticate
     * @param TypeListInterface $cache
     * @param Pool $cachePool
     */
    public function __construct(
        Context $context,
        Authenticate $authenticate,
        TypeListInterface $cache,
        Pool $cachePool
    ) {
        parent::__construct($context);
        $this->authenticate = $authenticate;
        $this->cache        = $cache;
        $this->cachePool    = $cachePool;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */

        try {
            $code  = $this->getRequest()->getParam('code');
            $state = $this->getRequest()->getParam('state');

            if (strcmp($state, "RandomState") != 0) {
                throw new Exception(__("The state from Intuit Server is incorrect. Your app might be compromised."));
            }

            $this->authenticate->getAccessToken("authorization_code", $code);

            $this->refreshCache();

            $this->messageManager->addSuccessMessage(__('You\'re connected!'));
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        return $this->_redirect('qbonline/connection/index');
    }

    /**
     * refresh cache
     */
    protected function refreshCache()
    {
        $types = ['config', 'full_page'];
        foreach ($types as $type) {
            $this->cache->cleanType($type);
        }
        foreach ($this->cachePool as $cacheFrontend) {
            $cacheFrontend->getBackend()->clean();
        }
    }
}
