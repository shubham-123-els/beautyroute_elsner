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
 * Class Position
 * @package Mageplaza\FreeGifts\Model\Source
 */
class Position extends OptionArray
{
    const ABOVE_CONTENT             = 1;
    const BELOW_CONTENT             = 2;
    const BEFORE_ADD_TO_CART_BUTTON = 3;
    const AFTER_ADD_TO_CART_BUTTON  = 4;

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            0                               => __('-- Please Select --'),
            self::ABOVE_CONTENT             => __('Above Content'),
            self::BELOW_CONTENT             => __('Below Content'),
            self::BEFORE_ADD_TO_CART_BUTTON => __('Before Add To Cart Button'),
            self::AFTER_ADD_TO_CART_BUTTON  => __('After Add To Cart Button')
        ];
    }
}
