<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */
namespace Magefan\AutoCurrencySwitcher\Model\Config\Source;

use Magento\Config\Model\Config\Backend\Currency\DefaultCurrency;
use Magento\Config\Model\Config\Backend\Currency\AbstractCurrency;

/**
 * Class CountryCurrency
 *
 * @package Magefan\AutoCurrencySwitcher\Model
 */
class CountryCurrency extends DefaultCurrency
{
    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterSave()
    {
        /*
        if (!$this->getValue()) {
            return AbstractCurrency::afterSave();
        }
        return parent::afterSave();
        */
        return AbstractCurrency::afterSave();
    }
}
