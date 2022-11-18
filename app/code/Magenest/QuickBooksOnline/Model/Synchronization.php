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

namespace Magenest\QuickBooksOnline\Model;

use Magenest\QuickBooksOnline\Logger\Logger;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class Synchronization
 * @package Magenest\QuickBooksOnline\Model
 */
abstract class Synchronization
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Log
     */
    protected $log;

    /**
     * @var \Magento\Framework\DataObject
     */
    protected $_model;

    /**
     * @var array
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var Context
     */
    protected $context;

    protected $unSupportedChar = ["'", "’", "′", "″", "‴", "⁗", ":", "“", "”"];

    protected $companyId       = '';

    protected $shippingAllowed;

    /**
     * Synchronization constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param Context $context
     */
    public function __construct(
        Client $client,
        Log $log,
        Context $context
    ) {
        $this->logger          = ObjectManager::getInstance()->get(Logger::class);
        $this->client          = $client;
        $this->log             = $log;
        $this->companyId       = $this->getCompanyId();
        $this->context         = $context;
        $this->shippingAllowed = null;
    }

    /**
     * Set Model
     *
     * @param \Magento\Framework\DataObject $model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->_model = $model;

        return $this;
    }

    public function getCompanyId()
    {
        /**
         * @var \Magenest\QuickBooksOnline\Model\Config $config
         */
        $config = ObjectManager::getInstance()->create('Magenest\QuickBooksOnline\Model\Config');

        return $config->getCompanyId();
    }

    /**
     * @return \Magento\Framework\DataObject
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @return $this
     */
    public function unsetModel()
    {
        unset($this->_model);

        return $this;
    }

    /**
     * @param array $params
     *
     * @return $this
     */
    public function setParameter($params)
    {
        if ($this->parameter !== null && $params !== null) {
            $this->parameter = array_replace_recursive($this->parameter, $params);
        } else {
            $this->parameter = $params;
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Query to QuickBooks Online
     *
     * @param $query
     *
     * @return array
     * @throws LocalizedException
     */
    public function query($query)
    {
        try {
            $path      = 'query?query=' . rawurlencode($query) . '&minorversion=6';
            $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
            foreach ($responses as $response) {
                if (is_array($response)) {
                    foreach ($response as $item) {
                        if (is_array($item) && isset($item[0]['Id'])) {
                            return $item[0];
                        }
                    }
                }
            }

            return [];
        } catch (\Exception $e) {
            throw new LocalizedException(__($e->getMessage()));
        }
    }

    /**
     * @param $query
     *
     * @return array
     * @throws LocalizedException
     */
    public function queryAll($query)
    {
        try {
            $path      = 'query?query=' . rawurlencode($query);
            $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
            foreach ($responses as $response) {
                if (is_array($response)) {
                    foreach ($response as $items) {
                        $entities = [];
                        if (is_array($items)) {
                            foreach ($items as $item) {
                                if (isset($item['Id'])) {
                                    $entities[] = $item;
                                }
                            }

                            return $entities;
                        }
                    }
                }
            }

            return [];
        } catch (\Exception $e) {
            throw new LocalizedException(__($e->getMessage()));
        }
    }

    /**
     * Query to QuickBooks Online
     *
     * @param $query
     *
     * @return array
     * @throws LocalizedException
     */
    public function queryTax($query)
    {
        try {
            $path      = 'query?query=' . rawurlencode($query);
            $responses = $this->sendRequest(\Zend_Http_Client::GET, $path);
            foreach ($responses as $response) {
                if (is_array($response)) {
                    return $response;
                }
            }

            return [];
        } catch (\Exception $e) {
            throw new LocalizedException(__($e->getMessage()));
        }
    }

    /**
     * @param $method
     * @param $path
     * @param array $params
     *
     * @return mixed|string
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    protected function sendRequest($method, $path, $params = [])
    {
        if ($this->client->isExpiredToken()) {
            try {
                $this->client->refreshAccessToken();
            } catch (\Exception $e) {
                throw new LocalizedException(__($e->getMessage()));
            }
        }

        return $this->client->sendRequest($method, $path, $params);
    }

    /**
     * @param \Magento\Customer\Model\Address|\Magento\Sales\Model\Order\Address $address
     *
     * @return array
     */
    protected function getAddress($address)
    {
        return [
            'Line1'                  => $address->getFirstname() . ' ' . $address->getLastname(),
            'Line2'                  => $address->getStreetLine(1),
            'Line3'                  => $address->getStreetLine(2),
            'Line4'                  => $address->getTelephone(),
            'City'                   => $address->getCity(),
            'Country'                => $address->getCountryId(),
            'CountrySubDivisionCode' => $address->getCountryId() == 'US' ? $address->getRegionCode() : $address->getRegion(),
            'PostalCode'             => $address->getPostcode()
        ];
    }

    /**
     * Check if shipping is enabled on sales forms
     * @return bool
     */
    protected function getIsShippingEnabled()
    {
        if (isset($this->shippingAllowed)) {
            return $this->shippingAllowed;
        }

        try {
            $query             = "SELECT SalesFormsPrefs.AllowShipping FROM Preferences";
            $preferenceSetting = $this->query($query);

            $this->shippingAllowed = $preferenceSetting['SalesFormsPrefs']['AllowShipping'];

            return $this->shippingAllowed;
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @param $id
     * @param null $qboId
     * @param null $msg
     * @param null $status
     *
     * @throws \Exception
     */
    public function addLog($id, $qboId = null, $msg = null, $status = null)
    {
        /** @var \Magento\Framework\Registry $registryObject */
        $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');

        $skipLog = $registryObject->registry('skip_log');
        if ($skipLog !== true) {
            $data = [
                'type_id' => $id,
                'qbo_id'  => $qboId,
                'type'    => $this->type,
                'msg'     => $msg,
                'status'  => $status
            ];

            $this->log->setData($data);
            $this->log->save();
        }
    }

    /**
     * @param $model
     *
     * @return int|null
     */
    public function getQboId($model)
    {
        $qboId = $model->getQboId();
        if ($qboId) {
            $companyId = (string)$this->companyId;
            if (strpos($qboId, $companyId) === 0) {
                return (int)str_replace($companyId, '', $qboId);
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}
