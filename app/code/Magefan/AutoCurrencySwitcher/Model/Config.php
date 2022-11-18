<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\AutoCurrencySwitcher\Model;

use \Magento\Directory\Model\Currency;
use \Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 *
 * @package Magefan\AutoCurrencySwitcher\Model
 */
class Config
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Magento\Framework\HTTP\Header
     */
    protected $httpHeader;

    /**
     * @var array|null
     */
    protected $displayCurrency;

    /**
     * @var \Magefan\GeoIp\Model\IpToCountryRepository
     */
    protected $ipToCountryRepository;

    const XML_PATH_AUTOCURRENCYSWITCHER_ENABLED = 'mfautocurrencyswitcher/general/enabled';
    const XML_PATH_GET_USER_AGENT = 'mfautocurrencyswitcher/extension_restrictions/user_agent';
    const XML_PATH_GET_DISPLAY_CURRENCY = 'mfautocurrencyswitcher/display_currency';
    const XML_PATH_ROUND_PRICES_ENABLED = 'mfautocurrencyswitcher/general/round_prices';
    const XML_PATH_ROUND_BASE_PRICES_ENABLED = 'mfautocurrencyswitcher/general/round_base_prices';
    const XML_PATH_ROUND_ALGORITHM = 'mfautocurrencyswitcher/general/round_algorithm';
    const XML_PATH_ROUND_STEP = 'mfautocurrencyswitcher/general/round_step';
    const XML_PATH_CEIL_STEP = 'mfautocurrencyswitcher/general/ceil_step';
    const XML_PATH_FLOOR_STEP = 'mfautocurrencyswitcher/general/floor_step';

    /**
     * Config constructor.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\HTTP\Header                     $httpHeader
     * @param \Magefan\GeoIp\Model\IpToCountryRepository         $ipToCountryRepository
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\HTTP\Header $httpHeader,
        \Magefan\GeoIp\Model\IpToCountryRepository $ipToCountryRepository
    ) {
        $this->ipToCountryRepository = $ipToCountryRepository;
        $this->httpHeader = $httpHeader;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param null $countryCode
     * @return mixed
     */
    public function getCurrencyByCountry($countryCode = null)
    {
        if (null === $countryCode) {
            $countryCode = $this->ipToCountryRepository->getVisitorCountryCode();
        }
        $countryCode = strtolower($countryCode);

        if (null === $this->displayCurrency) {
            $this->displayCurrency = [];
            $config = $this->scopeConfig->getValue(
                self::XML_PATH_GET_DISPLAY_CURRENCY,
                ScopeInterface::SCOPE_STORE
            );

            if ($config) {
                foreach ($config as $region => $currencyByCountry) {
                    foreach ($currencyByCountry as $cc => $currency) {
                        $this->displayCurrency[$cc] = $currency;
                    }
                }
            }
        }
        
        return (isset($this->displayCurrency[$countryCode]))
            ? $this->displayCurrency[$countryCode]
            : $this->getDefaultDisplayCurrency();
    }

    /**
     * Retrieve default display currency
     *
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->scopeConfig->getValue(
            Currency::XML_PATH_CURRENCY_BASE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve default display currency
     *
     * @return string
     */
    public function getDefaultDisplayCurrency()
    {
        return $this->scopeConfig->getValue(
            Currency::XML_PATH_CURRENCY_DEFAULT,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Check if the module is enabled
     *
     * @return boolean 0 or 1
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_AUTOCURRENCYSWITCHER_ENABLED,
            ScopeInterface::SCOPE_STORE
        ) && $this->userAgentAllowed();
    }

    /**
     * Check if the round prices is enabled
     *
     * @return boolean 0 or 1
     */
    public function isEnabledRoundPrices()
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_ROUND_PRICES_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Check if the round base prices is enabled
     *
     * @return boolean 0 or 1
     */
    public function isEnabledRoundBasePrices()
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_ROUND_BASE_PRICES_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return bool|int
     */
    protected function userAgentAllowed()
    {
        $userAgent = $this->httpHeader->getHttpUserAgent();
        $userAgentScope = $this->scopeConfig->getValue(
            self::XML_PATH_GET_USER_AGENT,
            ScopeInterface::SCOPE_STORE
        );
        $replace = str_replace("\r", "\n", $userAgentScope);
        $robots = explode("\n", $replace);

        foreach ($robots as $robot) {
            if (!trim($robot)) {
                continue;
            }
            if (strpos($userAgent, $robot) !== false) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getRoundAlgorithm()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ROUND_ALGORITHM,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getRoundStep()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ROUND_STEP,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getCeilStep()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CEIL_STEP,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function getFloorStep()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_FLOOR_STEP,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
