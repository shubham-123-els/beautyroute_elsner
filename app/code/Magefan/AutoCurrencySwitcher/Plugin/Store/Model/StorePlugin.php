<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\AutoCurrencySwitcher\Plugin\Store\Model;

use Magento\Store\Model\Store;
use Magefan\AutoCurrencySwitcher\Model\Config;

/**
 * Class StorePlugin
 *
 * @package Magefan\AutoCurrencySwitcher\Model\Config
 */
class StorePlugin
{
    /**
     * @var \Magefan\AutoCurrencySwitcher\Model\Config
     */
    protected $config;

    /**
     * StorePlugin constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Update default store currency code
     *
     * @return string
     */
    public function aroundGetDefaultCurrencyCode(Store $subject, callable $proceed)
    {
        if ($this->config->isEnabled()) {
            $currency = $this->config->getCurrencyByCountry();
            if ($currency) {
                return $currency;
            }
        }

        return $proceed();
    }
}
