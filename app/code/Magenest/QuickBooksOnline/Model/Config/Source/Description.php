<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class Description
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class Description implements \Magento\Framework\Option\ArrayInterface
{
    /**@#+
     * Constants
     */
    const SYNC_SHORT_DESC  = 1;
    const SYNC_NAME        = 2;

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            self::SYNC_SHORT_DESC  => __('Product Short Description'),
            self::SYNC_NAME        => __('Product Name')
        ];
    }

    /**
     * Return options array
     * @return array
     */
    public function toOptionArray()
    {
        return $this->toArray();
    }
}
