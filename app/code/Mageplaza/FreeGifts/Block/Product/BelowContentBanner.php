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
 * Class BelowContentBanner
 * @package Mageplaza\FreeGifts\Block\Product
 */
class BelowContentBanner extends Banner
{
    /**
     * @return int|string
     */
    public function getRuleArea()
    {
        return Position::BELOW_CONTENT;
    }
}
