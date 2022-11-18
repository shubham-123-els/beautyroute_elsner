<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Synchronization;
use Magenest\QuickBooksOnline\Model\AccountFactory;
use Magenest\QuickBooksOnline\Model\Account as AccountModel;
use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Log;
use Magento\Config\Model\Config as ConfigModel;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Action\Context;

/**
 * Class Account
 * @package Magenest\QuickBooksOnline\Model\Sync
 */
class Account extends Synchronization
{
    /**
     * Core Config Model
     * @var ConfigModel
     */
    protected $configModel;

    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @var AccountFactory
     */
    protected $_accountFactory;

    /**
     * Account constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param ScopeConfigInterface $scopeConfig
     * @param ConfigModel $configModel
     * @param AccountFactory $_accountFactory
     * @param Context $context
     */
    public function __construct(
        Client $client,
        Log $log,
        ScopeConfigInterface $scopeConfig,
        ConfigModel $configModel,
        AccountFactory $_accountFactory,
        Context $context
    ) {
        parent::__construct($client, $log, $context);
        $this->configModel     = $configModel;
        $this->_scopeConfig    = $scopeConfig;
        $this->type            = 'account';
        $this->_accountFactory = $_accountFactory;
    }

    /**
     * @param string $type
     * @param bool $update
     *
     * @return mixed
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function sync($type = 'income', $update = false)
    {
        $id = $this->_scopeConfig->getValue('qbonline/account/' . $type . '_id');

        if ($id && !$update) {
            return $id;
        }

        if ($type == 'asset') {
            $params = [
                'Name'           => __('Asset Account using sync with Magento'),
                'SubAccount'     => false,
                'Active'         => true,
                'AccountType'    => __('Other Current Asset'),
                'Classification' => __('Asset'),
                'AccountSubType' => __('Inventory'),
            ];
        } elseif ($type == 'expense') {
            $params = [
                'Name'           => __('Expense Account using sync with Magento'),
                'SubAccount'     => false,
                'Active'         => true,
                'AccountType'    => __('Cost of Goods Sold'),
                'Classification' => __('Expense'),
                'AccountSubType' => __('SuppliesMaterialsCogs'),
            ];
        } else {
            $params = [
                'Name'           => __('Income Account using sync with Magento'),
                'SubAccount'     => false,
                'Active'         => true,
                'AccountType'    => __('Income'),
                'Classification' => __('Revenue'),
                'AccountSubType' => __('SalesOfProductIncome'),
            ];
        }

        $account = $this->checkAccount($params['Name']);
        if (isset($account['Id'])) {
            $this->saveDataByPath('qbonline/account/' . $type . '_id', $account['Id']);

            return $account['Id'];
        }
        $response = $this->sendRequest(\Zend_Http_Client::POST, 'account', $params);
        $this->saveDataByPath('qbonline/account/' . $type . '_id', $response['Account']['Id']);

        return $response['Account']['Id'];
    }

    /**
     * sync all accounts
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function syncAllAccount()
    {
        $isConnected = $this->_scopeConfig->getValue('qbonline/connection/is_connected');
        $isFrance    = $this->_scopeConfig->getValue('qbonline/tax_shipping/country') == 'FR' ? true : false;
        if (isset($isConnected) && $isConnected == 1 && $isFrance == false) {
            $arrayAccount = ['asset', 'expense', 'income'];
            $i            = 0;
            foreach ($arrayAccount as $key => $value) {
                $this->sync($value, true);
                $i++;
            }
        }
    }

    /**
     * @throws LocalizedException
     */
    public function fetchAllAccount()
    {
        $query = "select name,id,AccountType,AccountSubType from Account maxresults 1000";

        try {
            $path      = 'query?query=' . rawurlencode($query);
            $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
            foreach ($responses as $response) {
                if (is_array($response)) {
                    foreach ($response as $item) {
                        if (is_array($item) && isset($item[0]['Id'])) {
                            $data = $item;
                            break;
                        }
                    }
                }
            }
            /** @var AccountModel $model */
            $model      = $this->_accountFactory->create();
            $collection = $model->getCollection();
            $connection = $collection->getConnection();
            $tableName  = $collection->getMainTable();
            $connection->truncateTable($tableName);
            if (isset($data)) {
                foreach ($data as $datum) {
                    $_model = $this->_accountFactory->create();
                    $_model->setQboId(isset($datum['Id']) ? $datum['Id'] : '');
                    $_model->setType(isset($datum['AccountType']) ? $datum['AccountType'] : '');
                    $_model->setName(isset($datum['Name']) ? $datum['Name'] : '');
                    $_model->setDetailType(isset($datum['AccountSubType']) ? $datum['AccountSubType'] : '');
                    $_model->save();
                }
            }
        } catch (\Exception $e) {
            throw new LocalizedException(__($e->getMessage()));
        }
    }

    /**
     * Save to `core_config_data` table
     *
     * @param $path
     * @param $value
     *
     * @throws \Exception
     */
    protected function saveDataByPath($path, $value)
    {
        $this->configModel->setDataByPath($path, $value);
        $this->configModel->save();
    }

    /**
     * @param $name
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkAccount($name)
    {
        $name  = str_replace("'", "\'", $name);
        $query = "SELECT Id FROM Account WHERE Name='{$name}'";

        return $this->query($query);
    }
}
