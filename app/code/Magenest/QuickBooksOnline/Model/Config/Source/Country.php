<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class Country
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class Country implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'OTHER' => __('United States'),
            'GLOBAL' => __('Global'),
            'UK' => __('United Kingdom'),
            'CA' => __('Canada'),
            'AU' => __('Australia'),
            'FR' => __('France')
        ];
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $result = [];
        foreach ($this->toArray() as $k => $v) {
            $result[] = ['value' => $k, 'label' => $v];
        }

        return $result;
    }
}
