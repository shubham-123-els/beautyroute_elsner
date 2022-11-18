<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

/**
 * Locale currency source
 */
namespace Magefan\AutoCurrencySwitcher\Model\Config\Source\Locale;

/**
 * Class Currency
 *
 * @package Magefan\AutoCurrencySwitcher\Model\Config\Source\Locale
 */
class Currency extends \Magento\Config\Model\Config\Source\Locale\Currency
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_config;

    /**
     * Currency constructor.
     *
     * @param \Magento\Framework\Locale\ListsInterface           $localeLists
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $config
     */
    public function __construct(
        \Magento\Framework\Locale\ListsInterface $localeLists,
        \Magento\Framework\App\Config\ScopeConfigInterface $config
    ) {
        $this->config = $config;
        parent::__construct($localeLists);
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {

        if (!$this->_options) {
            parent::toOptionArray();

            $allowedCountries = $this->getAllowedCurrencies();
            foreach ($this->_options as $key => $option) {
                if (!in_array($option['value'], $allowedCountries)) {
                     unset($this->_options[$key]);
                }
            }
            array_unshift(
                $this->_options, [
                'value' => 0,
                'label' => __('Default Display Currency'),
                ]
            );
        }
        return $this->_options;
    }

    /**
     * @return array
     */
    protected function getAllowedCurrencies()
    {
        return explode(
            ',',
            (string)$this->config->getValue(
                \Magento\Directory\Model\Currency::XML_PATH_CURRENCY_ALLOW
            )
        );
    }
}
