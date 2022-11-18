<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\RequestInterface;

/**
 * Class Parameters
 * @package Magenest\QuickBooksOnline\Helper
 */
class Parameters
{
    const DEFAULT_VERSION   = '1.0';
    const NONCE             = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    const DEFAULT_SIGNATURE = 'HMAC-SHA1';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $signatureMethod;

    /**
     * @var Mode
     */
    protected $modeHelper;

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Parameters constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param Mode $modeHelper
     * @param RequestInterface $request
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Mode $modeHelper,
        RequestInterface $request
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->request     = $request;
        $this->modeHelper  = $modeHelper;
    }


    /**
     * Default Params
     * @return array
     */
    protected function getDefaultParams()
    {
        return [
            'oauth_consumer_key'     => $this->modeHelper->getConsumerKey(),
            'oauth_signature_method' => $this->getSignatureMethod(),
            'oauth_nonce'            => $this->nonce(),
            'oauth_timestamp'        => $this->getTimestamp(),
            'oauth_version'          => $this->getVersion()
        ];
    }

    /**
     * @param $params
     *
     * @return $this
     */
    public function setParams($params)
    {
        if ($this->params === null) {
            $this->params = $this->getDefaultParams();
        }
        $this->params = array_replace_recursive($this->params, $params);

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetParams()
    {
        $this->params = null;

        return $this;
    }

    /**
     * Get Params
     * @return array
     */
    public function getParams()
    {
        if ($this->params === null) {
            $this->params = $this->getDefaultParams();
        }

        return $this->params;
    }

    /**
     * Set Version
     *
     * @param $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        if ($this->version === null) {
            $this->version = self::DEFAULT_VERSION;
        }

        return $this->version;
    }

    /**
     * Set Signature Method
     *
     * @param string $signatureMethod
     *
     * @return $this
     */
    public function setSignatureMethod($signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;

        return $this;
    }

    /**
     * Get Signature
     * @return string
     */
    public function getSignatureMethod()
    {
        if ($this->signatureMethod === null) {
            $this->signatureMethod = self::DEFAULT_SIGNATURE;
        }

        return $this->signatureMethod;
    }

    /**
     * Get Timestamp
     * @return int
     */
    protected function getTimestamp()
    {
        return time();
    }

    /**
     * Generate a string with length
     *
     * @param int $len
     *
     * @return string
     */
    protected function nonce($len = 5)
    {
        $tmp = str_split(self::NONCE);
        shuffle($tmp);

        return mb_substr(implode('', $tmp), 0, $len);
    }
}
