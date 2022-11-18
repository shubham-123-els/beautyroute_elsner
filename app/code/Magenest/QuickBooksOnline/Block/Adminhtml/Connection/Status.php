<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Block\Adminhtml\Connection;

use Magento\Backend\Block\Template;
use Magenest\QuickBooksOnline\Model\Synchronization\Company;
use Magento\Config\Model\Config as ConfigModel;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;
use Magenest\QuickBooksOnline\Model\Config;

/**
 * Class Status
 * @package Magenest\QuickBooksOnline\Block\Adminhtml\Connection
 */
class Status extends Template
{
    /**
     * Set Template
     *
     * @var string
     */
    protected $_template = 'system/config/connection/status.phtml';

    /**
     * @var Company
     */
    protected $company;

    /**
     * @var ConfigModel
     */
    protected $configModel;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * Status constructor.
     *
     * @param Template\Context $context
     * @param ConfigModel $config
     * @param Company $company
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ConfigModel $config,
        Company $company,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->configModel = $config;
        $this->company = $company;
        $this->checkConnection();
    }

    /**
     * Check Connection with QBO each visit Configuration page
     */
    protected function checkConnection()
    {
        if ($this->isConnected()) {
            try {
                $this->company->getInformation();
                $isConnected = 1;
            } catch (LocalizedException $e) {
                \Magento\Framework\App\ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug($e->getMessage());
                $isConnected = 0;
            }

            $this->configModel->setDataByPath(Config::XML_PATH_QBONLINE_IS_CONNECTED, $isConnected);
            $this->configModel->save();
        }
    }

    /**
     * @return bool
     */
    public function isConnected()
    {
        return $this->_scopeConfig->isSetFlag(Config::XML_PATH_QBONLINE_IS_CONNECTED);
    }
}
