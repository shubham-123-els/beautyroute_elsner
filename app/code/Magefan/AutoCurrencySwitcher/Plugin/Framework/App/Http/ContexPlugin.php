<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\AutoCurrencySwitcher\Plugin\Framework\App\Http;

use Magento\Framework\App\Http\Context;
use Magefan\AutoCurrencySwitcher\Model\Config;

/**
 * Class ContexPlugin
 *
 * @package Magefan\AutoCurrencySwitcher\Plugin\Framework\App\Http
 */
class ContexPlugin
{

    /**
     * @var \Magefan\AutoCurrencySwitcher\Model\Config
     */
    protected $config;

    /**
     * ContexPlugin constructor.
     *
     * @param \Magefan\AutoCurrencySwitcher\Model\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Context $subject
     * @param $result
     * @return mixed
     */
    public function afterGetData(Context $subject, $result)
    {
        if ($this->config->isEnabled()
            && empty($result[Context::CONTEXT_CURRENCY])
        ) {
            $currencyCode = $this->config->getCurrencyByCountry();
            if ($currencyCode) {
                $result[Context::CONTEXT_CURRENCY] = $currencyCode;
            }
        }

        return $result;
    }
}
