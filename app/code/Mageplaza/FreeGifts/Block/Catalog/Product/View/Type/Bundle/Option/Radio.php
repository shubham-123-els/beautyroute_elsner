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

namespace Mageplaza\FreeGifts\Block\Catalog\Product\View\Type\Bundle\Option;

use Magento\Bundle\Block\Catalog\Product\View\Type\Bundle\Option\Radio as BundleRadio;

/**
 * Class Radio
 * @package Mageplaza\FreeGifts\Block\Catalog\Product\View\Type\Bundle\Option
 */
class Radio extends BundleRadio
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::product/view/type/bundle/option/radio.phtml';
}
