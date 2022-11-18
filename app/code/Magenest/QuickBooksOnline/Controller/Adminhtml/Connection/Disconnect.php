<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Connection;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractConnection;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\Authenticate;
use Magento\Backend\App\Action\Context;
use Magento\Config\Model\Config as ConfigModel;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\App\Cache\Frontend\Pool;

/**
 * Class Disconnect
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Connection
 */
class Disconnect extends AbstractConnection
{

    /**
     * @var ConfigModel
     */
    protected $config;

    /**
     * @var WriterInterface
     */
    protected $writer;

    /**
     * @var ResourceConnection
     */
    protected $resource;

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $adapter;

    /**
     * @var TypeListInterface
     */
    protected $cacheType;

    /**
     * @var Pool
     */
    protected $cachePool;

    /**
     * Disconnect constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Authenticate $authenticate
     * @param ConfigModel $config
     * @param WriterInterface $writer
     * @param ResourceConnection $resource
     * @param TypeListInterface $cacheType
     * @param Pool $cachePool
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        Authenticate $authenticate,
        ConfigModel $config,
        WriterInterface $writer,
        ResourceConnection $resource,
        TypeListInterface $cacheType,
        Pool $cachePool
    ) {
        parent::__construct($context, $resultPageFactory, $authenticate);
        $this->config    = $config;
        $this->writer    = $writer;
        $this->resource  = $resource;
        $this->cacheType = $cacheType;
        $this->cachePool = $cachePool;
        $this->adapter   = $resource->getConnection();
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $this->writer->delete(Config::XML_PATH_QBONLINE_IS_CONNECTED);
            $this->writer->delete(Config::XML_PATH_QBONLINE_COMPANY_ID);
            $this->writer->delete(Config::XML_PATH_ADJUSTMENT_ID);
            $this->removeCompanyData();
            $this->refreshCache();
            $this->messageManager->addSuccessMessage(__('You\'re disconnected from QuickBooks Online.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $referUrl     = $this->_redirect->getRefererUrl();
        $redirectPage = $this->resultRedirectFactory->create();

        return $redirectPage->setUrl($referUrl);
    }

    /**
     * Clean cache
     */
    protected function refreshCache()
    {
        $types = ['config', 'full_page'];
        foreach ($types as $type) {
            $this->cacheType->cleanType($type);
        }
        foreach ($this->cachePool as $cacheFrontend) {
            $cacheFrontend->getBackend()->clean();
        }
    }

    /**
     * Delete old company's accounts, tax codes and payment methods mappings upon disconnect
     */
    protected function removeCompanyData()
    {
        try {
            $this->adapter->truncateTable($this->adapter->getTableName('magenest_qbonline_oauth'));
            $this->adapter->truncateTable($this->adapter->getTableName('magenest_qbonline_account'));
            $this->adapter->truncateTable($this->adapter->getTableName('magenest_qbonline_payment_methods'));
            $this->adapter->truncateTable($this->adapter->getTableName('magenest_qbonline_tax'));
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage($e->getMessage());
        }
    }
}
