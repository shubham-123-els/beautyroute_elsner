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

namespace Mageplaza\FreeGifts\Block\Product;

use Mageplaza\FreeGifts\Model\Source\Position;

/**
 * Class AfterAddToCartBanner
 * @package Mageplaza\FreeGifts\Block\Product
 */
class AfterAddToCartBanner extends Banner
{
    /**
     * @return int|string
     */
    public function getRuleArea()
    {
        return Position::AFTER_ADD_TO_CART_BUTTON;
    }
}
