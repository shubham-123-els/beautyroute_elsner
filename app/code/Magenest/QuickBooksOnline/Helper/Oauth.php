<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Helper;

use Magenest\QuickBooksOnline\Model\OauthFactory;

/**
 * Class Oauth
 * @package Magenest\QuickBooksOnline\Helper
 */
class Oauth
{
    /**@#+
     *
     */
    const NONCE = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    const METHOD_POST   = 'POST';
    const METHOD_GET    = 'GET';
    const METHOD_PUT    = 'PUT';
    const METHOD_DELETE = 'DELETE';

    const DEFAULT_VERSION   = '1.0';
    const DEFAULT_SIGNATURE = 'HMAC-SHA1';

    const SIGNATURE_PLAINTEXT = 'PLAINTEXT';
    const SIGNATURE_HMAC      = 'HMAC-SHA1';
    const SIGNATURE_RSA       = 'RSA-SHA1';

    /**
     * @var Parameters
     */
    protected $parameters;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $generateUrl;

    /**
     * @var string
     */
    protected $destinationUrl;

    /**
     * @var string
     */
    protected $generateHeader;

    /**
     * @var Mode
     */
    protected $modeHelper;

    /**
     * @var OauthFactory
     */
    protected $oauthModelFactory;

    /**
     * Oauth constructor.
     *
     * @param Parameters $parameters
     * @param Mode $modeHelper
     * @param OauthFactory $oauthFactory
     */
    public function __construct(
        Parameters $parameters,
        Mode $modeHelper,
        OauthFactory $oauthFactory
    ) {
        $this->parameters        = $parameters;
        $this->modeHelper        = $modeHelper;
        $this->oauthModelFactory = $oauthFactory;
    }

    /**
     * @param $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        if ($this->method === null) {
            $this->method = self::METHOD_GET;
        }

        return $this->method;
    }

    /**
     * @param $url
     *
     * @return $this
     */
    public function setGenerateUrl($url)
    {
        $this->generateUrl = $url;

        return $this;
    }

    /**
     * @return string
     */
    protected function getGenerateUrl()
    {
        return $this->generateUrl;
    }

    /**
     * @param array $params
     *
     * @return $this
     */
    public function setParams($params = [])
    {
        $this->parameters->setParams($params);

        return $this;
    }

    /**
     * @return array
     */
    protected function getParams()
    {
        return $this->parameters->getParams();
    }

    /**
     * @param $destinationUrl
     */
    protected function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    /**
     * @param $url
     * @param $params
     *
     * @return $this
     */
    public function sign($url, $params)
    {
        $oauthHelper = $this->setGenerateUrl($url);
        $oauthHelper->setParams($params);
        $oauthHelper->process();
        $this->parameters->unsetParams();

        return $this;
    }

    /**
     * @throws \Exception
     */
    protected function process()
    {
        $params         = $this->getParams();
        $normalized     = $this->_normalize($params);
        $destinationUrl = $this->getGenerateUrl() . '?' . $normalized;
        $this->setDestinationUrl($destinationUrl);
        $this->generateHeader();

        return $this;
    }


    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->modeHelper->getClientId();
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->modeHelper->getClientSecret();
    }


    /**
     * @return string
     */
    public function getHeaders()
    {
        return $this->generateHeader;
    }

    /**
     * @return string
     */
    public function generateHeader()
    {
        $str                  = $this->getClientId() . ":" . $this->getClientSecret();
        $this->generateHeader = "Basic " . base64_encode($str);

        return $this->generateHeader;
    }

    /**
     * @param $str
     *
     * @return mixed
     */
    protected function _escape($str)
    {
        if ($str === false) {
            return $str;
        } else {
            return str_replace('+', ' ', str_replace('%7E', '~', rawurlencode($str)));
        }
    }

    /**
     * @param $params
     *
     * @return string
     */
    protected function _normalize($params)
    {
        $normalized = [];

        ksort($params);
        foreach ($params as $key => $value) {
            if ($key != 'oauth_secret') {
                if (is_array($value)) {
                    $sort = $value;
                    sort($sort);
                    foreach ($sort as $subKey => $subValue) {
                        $normalized[] = $this->_escape($key) . '=' . $this->_escape($subValue);
                    }
                } else {
                    $normalized[] = $this->_escape($key) . '=' . $this->_escape($value);
                }
            }
        }

        return implode('&', $normalized);
    }

    /**
     * Signature RSA
     *
     * @param $sbs
     *
     * @return array
     * @todo in next version
     */
    protected function generateSignatureRSA($sbs)
    {
        $res = openssl_pkey_get_private('file://' . $this->_keyfile);

        $signature = null;
        openssl_sign($sbs, $signature, $res);

        openssl_free_key($res);

        return [$sbs, base64_encode($signature)];
    }

    /**
     * @param string $sbs
     * @param array $params
     *
     * @return void
     */
    protected function generateSignatureHMAC($sbs, $params)
    {
        $secret = $this->_escape($this->getConsumerSecret());
        $secret .= '&';
        if (!empty($params['oauth_secret'])) {
            $secret .= $this->_escape($params['oauth_secret']);
        }
        $oauthSignature = base64_encode(hash_hmac('sha1', $sbs, $secret, true));
        $this->parameters->setParams([
            'oauth_signature' => $oauthSignature
        ]);
    }
}
