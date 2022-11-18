<?php

namespace Magenest\QuickBooksOnline\Model\Log;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Status
 * @package Magenest\QuickBooksOnline\Model\Log
 */
class Status implements ArrayInterface
{

    /**@#+
     * constant
     */
    const STATUS_SUCCESS = 1;
    const STATUS_FAIL = 2;
    const STATUS_SKIP = 4;


    /**
     * Return options array
     * @return array
     */
    public function toOptionArray()
    {
        $res = [];
        foreach ($this->toArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            self::STATUS_SUCCESS => __('Success'),
            self::STATUS_FAIL => __('Fail'),
            self::STATUS_SKIP => __('Skip')
        ];
    }

    /**
     * Retrieve option array
     *
     * @return string[]
     */
    public static function getOptionArray()
    {
        return [
            self::STATUS_SUCCESS => __('Success'),
            self::STATUS_SKIP => __('Skip'),
            self::STATUS_FAIL => __('Fail')
        ];
    }
}
