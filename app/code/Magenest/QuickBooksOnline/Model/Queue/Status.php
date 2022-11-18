<?php

namespace Magenest\QuickBooksOnline\Model\Queue;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Status
 * @package Magenest\QuickBooksOnline\Model\Queue
 */
class Status implements ArrayInterface
{

    /**@#+
     * constant
     */
    const STATUS_ENQUEUE = 1;
    const STATUS_DEQUEUE = 2;
    const STATUS_FAIL = 3;
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
            self::STATUS_ENQUEUE => __('Enqueue'),
            self::STATUS_DEQUEUE => __('Dequeue')
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
            self::STATUS_ENQUEUE => __('Enqueue'),
            self::STATUS_DEQUEUE => __('Dequeue'),
            self::STATUS_FAIL => __('Fail')
        ];
    }
}
