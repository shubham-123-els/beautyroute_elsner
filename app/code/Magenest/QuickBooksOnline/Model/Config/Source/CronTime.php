<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class CronTime
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class CronTime implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return options array
     * @return array
     */
    public function toOptionArray()
    {
        return [
            5 => __('5 minutes'),
            10 => __('10 minutes'),
            15 => __('15 minutes'),
            30 => __('30 minutes'),
            45 => __('45 minutes'),
            60 => __('1 hour'),
            120 => __('2 hours')
        ];
    }
}
