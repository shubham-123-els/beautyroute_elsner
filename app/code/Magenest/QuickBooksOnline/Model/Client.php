<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model;

use Magenest\QuickBooksOnline\Helper\Oauth as OauthHelper;
use Magento\Framework\HTTP\ZendClientFactory;
use Magento\Config\Model\Config as ConfigModel;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magenest\QuickBooksOnline\Logger\Logger;

/**
 * Class Client
 * @package Magenest\QuickBooksOnline\Model
 */
class Client
{
    /**#@+
     * Constants
     */
    const URL_QBO_RECONNECT           = 'https://appcenter.intuit.com/api/v1/Connection/Reconnect';
    const URL_QBO_DISCONNECT          = 'https://appcenter.intuit.com/api/v1/Connection/Disconnect';
    const URL_APP_MENU                = 'https://appcenter.intuit.com/api/v1/Account/AppMenu';
    const URL_REQUEST_PRODUCTION_LINK = 'https://quickbooks.api.intuit.com/v3/company/';
    const URL_REQUEST_SANDBOX_LINK    = 'https://sandbox-quickbooks.api.intuit.com/v3/company/';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var OauthHelper
     */
    protected $_oauthHelper;

    /**
     * @var ZendClientFactory
     */
    protected $_httpClientFactory;

    /**
     * @var Oauth
     */
    protected $oauthModel;

    /**
     * @var \Magenest\QuickBooksOnline\Logger\Logger
     */
    protected $_logger;

    /**
     * Client constructor.
     *
     * @param ZendClientFactory $httpClientFactory
     * @param Oauth $oauthModel
     * @param ScopeConfigInterface $scopeConfig
     * @param OauthHelper $oauthHelper
     * @param Logger $logger
     */
    public function __construct(
        ZendClientFactory $httpClientFactory,
        Oauth $oauthModel,
        ScopeConfigInterface $scopeConfig,
        OauthHelper $oauthHelper,
        Logger $logger
    ) {
        $this->_httpClientFactory = $httpClientFactory;
        $this->oauthModel         = $oauthModel;
        $this->_oauthHelper       = $oauthHelper;
        $this->scopeConfig        = $scopeConfig;
        $this->_logger            = $logger;
    }

    /**
     * @return \Magento\Framework\HTTP\ZendClient
     */
    public function getZendClient()
    {
        return $this->_httpClientFactory->create();
    }

    /**
     * Using ZendClient to request authenticate to QBO
     *
     * @param $url
     * @param $params
     *
     * @return string
     * @throws \Zend_Http_Client_Exception
     */
    public function request($url, $params)
    {
        $this->_oauthHelper->sign($url, $params);
        $desUrl = $this->_oauthHelper->getDestinationUrl();
        $client = $this->getZendClient();
        $client->setUri($desUrl);
        $client->setConfig([
            'timeout' => 300
        ]);

        return $client->request()->getBody();
    }


    /**
     * @param $tokenEndPointUrl
     * @param $parameters
     * @param $method
     *
     * @return \Exception
     */
    public function authenticate($tokenEndPointUrl, $parameters, $method)
    {
        $header = [
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded'
        ];

        try {
            $url  = $tokenEndPointUrl;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt_array($curl, [
                CURLOPT_POSTFIELDS     => http_build_query($parameters),
                CURLOPT_RETURNTRANSFER => true
            ]);
            $result = curl_exec($curl);
            curl_close($curl);
            $resultDecode = json_decode($result, true);

            return $resultDecode;
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * @return mixed
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function refreshAccessToken()
    {
        $url       = 'https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer';
        $companyId = $this->scopeConfig->getValue('qbonline/connection/company_id');
        $model     = $this->oauthModel->getCollection()
            ->addFieldToFilter('qb_realm', $companyId)
            ->getLastItem();

        $client = $this->getZendClient()->setUri($url);
        $key    = $this->_oauthHelper->generateHeader();
        $header = [
            "Authorization: " . trim($key),
            "Content-type: application/x-www-form-urlencoded",
            "Accept: application/json",
        ];
        $client->setHeaders($header);
        $client->setConfig(['timeout' => 300]);
        $client->setRawData('grant_type=refresh_token&refresh_token=' . $model->getRefreshToken());
        $response      = $client->request('POST')->getBody();
        $responseArray = json_decode($response, true);
        \Magento\Framework\App\ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug($key);
        \Magento\Framework\App\ObjectManager::getInstance()->get(\Magenest\QuickBooksOnline\Logger\Logger::class)->debug($response);
        if ($client->getLastResponse()->getStatus() >= 400) {
            $errorMsg = __($response);
            if (isset($responseArray['Fault']['Error'][0]['Detail'])) {
                $errorMsg = __($responseArray['Fault']['Error'][0]['Detail']);
            }
            throw new LocalizedException($errorMsg);
        } else {
            $this->saveRefreshAccessToken($model, $responseArray);
        }

        return $responseArray;
    }

    /**
     * @param $model
     * @param $responseArray
     */
    public function saveRefreshAccessToken($model, $responseArray)
    {
        $datetime = \Magento\Framework\App\ObjectManager::getInstance()->create('Magento\Framework\Stdlib\DateTime\DateTime')->gmtDate();
        $params   = [
            'refresh_token'      => $responseArray['refresh_token'],
            'oauth_access_token' => $responseArray['access_token'],
            'access_datetime'    => $datetime
        ];

        $model->addData($params)->save();
    }

    /**
     * Send Request to QBO
     *
     * @param string $method
     * @param $path
     * @param array $params
     *
     * @return mixed|string
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function sendRequest($method, $path, $params = [])
    {
        $url       = $this->getRequestUrl($path);
        $companyId = $this->scopeConfig->getValue('qbonline/connection/company_id');
        $model     = $this->oauthModel->getCollection()
            ->addFieldToFilter('qb_realm', $companyId)
            ->getLastItem();

        $client = $this->getZendClient()->setUri($url);
        $header = [
            "Authorization: Bearer " . trim($model->getOauthAccessToken()),
            "Content-type: application/json",
            "Accept: application/json",
        ];
        $client->setHeaders($header);
        $client->setConfig(['timeout' => 300]);

        if (!empty($params)) {
            $dataBody = json_encode($params);
            if ($path == 'taxservice/taxcode') {
                $string1 = str_replace('"TaxRateDetails":', '"TaxRateDetails":[', $dataBody);
                $string2 = str_replace('"Sales"}', '"Sales"}]', $string1);
                $client->setRawData($string2);
            } else {
                $client->setRawData($dataBody);
            }
        }

        $time = round(microtime(true) * 1000);
        if ($this->isDebugEnabled()) {
            $this->log($url, 'REQUEST URL '.$time);
            if (!empty($params)) {
                $this->log($params, 'REQUEST PARAMETERS '.$time);
            }
        }
        $response      = $client->request($method)->getBody();
        $responseArray = json_decode($response, true);
        if ($client->getLastResponse()->getStatus() >= 400) {
            $errorMsg = __($response);
            if (isset($responseArray['Fault']['Error'][0]['Detail'])) {
                $errorMsg = __($responseArray['Fault']['Error'][0]['Detail']);
            }
            throw new LocalizedException($errorMsg);
        }

        if ($this->isDebugEnabled()) {
            $this->log($responseArray, 'RESPONSE '.$time);
        }

        return $responseArray;
    }

    /**
     * @return bool
     */
    public function isDebugEnabled()
    {
        if ($this->scopeConfig->getValue('qbonline/debug/enable') == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $data
     * @param string $title
     */
    private function log($data, $title = '')
    {
        if ($data instanceof \Magento\Framework\DataObject) {
            $data = $data->getData();
        }
        if (is_array($data)) {
            $data = print_r($data, true);
        }
        if (is_string($data)) {
            $this->_logger->debug("{$title}: {$data}");
        }
    }

    /**
     * Request Url
     *
     * @param $path
     *
     * @return string
     */
    protected function getRequestUrl($path)
    {
        $isSandbox = $this->scopeConfig->getValue(Config::XML_PATH_QBONLINE_APP_MODE);
        if ($isSandbox == "2") {
            $url = self::URL_REQUEST_SANDBOX_LINK;
        } else {
            $url = self::URL_REQUEST_PRODUCTION_LINK;
        }
        $url = rtrim($url, '/') . '/' . $this->getCompanyId() . '/' . ltrim($path, '/');

        return $url;
    }

    /**
     * Company Id
     * @return string
     */
    protected function getCompanyId()
    {
        $model = $this->oauthModel->getCurrentConnection();

        return $model->getQbRealm();
    }

    /**
     * Get Access Token from database
     * @return array
     * @throws LocalizedException
     */
    protected function getAccessTokenParameter()
    {
        $model       = $this->oauthModel->getCurrentConnection();
        $token       = $model->getOauthAccessToken();
        $tokenSecret = $model->getOauthAccessTokenSecret();
        if (!$token || !$tokenSecret) {
            throw new LocalizedException(
                __('We can\'t get the access token in the database')
            );
        }
        $parameter = [
            'oauth_token'  => $token,
            'oauth_secret' => $tokenSecret
        ];

        return $parameter;
    }

    /**
     * Expired Access Token
     * @return bool
     */
    public function isExpiredToken()
    {
        $model          = $this->oauthModel->getCurrentConnection();
        $accessDatetime = strtotime($model->getAccessDatetime());
        //refresh every 55 mins
        if (($accessDatetime + 3300) < time()) {
            return true;
        }

        return false;
    }

    public function reconnect()
    {
        //TODO
    }

//    public function disconnect()
//    {
//        $this->request(self::URL_QBO_DISCONNECT, $this->getAccessTokenParameter());
//    }
//
//    public function widgetMenu()
//    {
//        try {
//            return $this->request(self::URL_APP_MENU, $this->getAccessTokenParameter());
//        } catch (\Exception $e) {
//            return '';
//        }
//    }
}
