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
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Ui\Component\Listing\Columns;

use Magento\Store\Ui\Component\Listing\Column;

/**
 * Class Store
 * @package Mageplaza\TableRateShipping\Ui\Component\Listing\Columns
 */
class Store extends Column\Store
{
    /**
     * Get data
     *
     * @param array $item
     *
     * @return string
     */
    protected function prepareItem(array $item)
    {
        $item[$this->storeKey] = explode(',', $item[$this->storeKey]);

        return parent::prepareItem($item);
    }
}
