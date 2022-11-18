<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */
namespace Magenest\QuickBooksOnline\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magenest\QuickBooksOnline\Helper\Oauth as HelperOauth;

/**
 * Class Oauth
 *
 * @package Magenest\QuickBooksOnline\Model
 * @method string getOauthAccessToken()
 * @method string getOauthAccessTokenSecret()
 * @method string getRequestDatetime()
 * @method string getQbRealm()
 * @method string getOauthRequestToken()
 * @method string getOauthRequestTokenSecret()
 * @method string getAccessDatetime()
 * @method string getRefreshToken()
 */
class Oauth extends AbstractModel
{

    /**
     * @var HelperOauth
     */
    protected $helperOauth;

    /**
     * @var DateTime
     */
    protected $_coreDate;

    /**
     * @var Config
     */
    protected $config;

    /**
     * Oauth constructor.
     * @param Context $context
     * @param Registry $registry
     * @param HelperOauth $helperOauth
     * @param DateTime $coreDate
     * @param Config $config
     */
    public function __construct(
        Context $context,
        Registry $registry,
        HelperOauth $helperOauth,
        DateTime $coreDate,
        Config $config
    ) {
        $this->config = $config;
        $this->_coreDate = $coreDate;
        $this->helperOauth = $helperOauth;
        parent::__construct($context, $registry);
    }

    /**
     * Init
     */
    public function _construct()
    {
        $this->_init('Magenest\QuickBooksOnline\Model\ResourceModel\Oauth');
    }

    /**
     * Load by App Username
     *
     * @param  $token
     * @return $this
     */
    public function loadByAppUsername($token)
    {
        return $this->load($token, 'app_username');
    }

    /**
     * Save Oauth Request Token & Oauth Request Token Secret
     *
     * @param $data
     */
    public function saveRequestToken($data)
    {
        $data['request_datetime'] = $this->_coreDate->gmtDate();
        $data['touch_datetime']   = $data['request_datetime'];
        if ($this->getId()) {
            $this->addData($data);
        } else {
            $this->setData($data);
        }

        $this->save();
    }

    /**
     * Save Oauth Access Token & Oauth Access Token Secret
     *
     * @param $data
     */
    public function saveAccessToken($data)
    {
        $data['access_datetime'] = $this->_coreDate->gmtDate();
        $data['touch_datetime']  = $data['access_datetime'];
        if ($this->getId()) {
            $this->addData($data);
        } else {
            $this->setData($data);
        }

        $this->save();
    }

    /**
     * @return HelperOauth
     */
    protected function getHelper()
    {
        return $this->helperOauth;
    }

    /**
     *
     * @todo improve in the next version     *
     * @return $this
     */
    public function getCurrentConnection()
    {
//        $applicationToken = $this->getHelper()->getApplicationToken();
//        $this->loadByAppUsername($applicationToken);
        $companyId = $this->config->getCompanyId();
        $model = $this->getCollection()->addFieldToFilter('qb_realm', $companyId)->getLastItem();

        return $model;
    }
}
