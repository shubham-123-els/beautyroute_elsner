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

namespace Mageplaza\FreeGifts\Model\ResourceModel\Banner;

use Magento\Rule\Model\ResourceModel\Rule\Collection\AbstractCollection;
use Mageplaza\FreeGifts\Model\Banner;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner as ResourceModelBanner;

/**
 * Class Collection
 * @package Mageplaza\FreeGifts\Model\ResourceModel\Banner
 */
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'banner_id';

    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            Banner::class,
            ResourceModelBanner::class
        );
    }
}
