<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Model\Source;

/**
 * Class AddAutoBy
 * @package Mageplaza\FreeGifts\Model\Source
 */
class AddAutoBy extends OptionArray
{
    const ASCENDING_BY_PRODUCT_ID   = 0;
    const DESCENDING_BY_PRODUCT_ID  = 1;
    const ASCENDING_BY_PRODUCT_SKU  = 2;
    const DESCENDING_BY_PRODUCT_SKU = 3;
    const LOWEST_PRODUCT_PRICE      = 4;
    const HIGHEST_PRODUCT_PRICE     = 5;

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ASCENDING_BY_PRODUCT_ID   => __('Ascending by Product ID'),
            self::DESCENDING_BY_PRODUCT_ID  => __('Descending by Product ID'),
            self::ASCENDING_BY_PRODUCT_SKU  => __('Ascending by Product SKU'),
            self::DESCENDING_BY_PRODUCT_SKU => __('Descending by Product SKU'),
            self::LOWEST_PRODUCT_PRICE      => __('Lowest Product Price'),
            self::HIGHEST_PRODUCT_PRICE     => __('Highest Product Price')
        ];
    }
}
