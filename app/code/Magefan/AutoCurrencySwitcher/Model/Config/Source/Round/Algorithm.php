<?php

namespace Magefan\AutoCurrencySwitcher\Model\Config\Source\Round;

class Algorithm implements \Magento\Framework\Option\ArrayInterface
{
    const ROUND = 0;
    const CEIL = 1;
    const ROUND_X = 2;
    const CEIL_X = 3;
    const ROUND_99 = 4;
    const CEIL_99 = 5;
    const ROUND_95 = 6;
    const CEIL_95 = 7;

    const FLOOR = 8;
    const FLOOR_X = 9;
    const FLOOR_99 = 10;
    const FLOOR_95 = 11;

    /**
     * Options int
     *
     * @return array
     */
    public function toOptionArray()
    {
        return  [
            ['value' => self::ROUND, 'label' => __('Round (default)')],
            ['value' => self::CEIL, 'label' => __('Ceil')],
            ['value' => self::FLOOR, 'label' => __('Floor')],

            ['value' => self::ROUND_X, 'label' => __('Round X')],
            ['value' => self::CEIL_X, 'label' => __('Ceil X')],
            ['value' => self::FLOOR_X, 'label' => __('Floor X')],

            ['value' => self::ROUND_99, 'label' => __('Round .99')],
            ['value' => self::CEIL_99, 'label' => __('Ceil .99')],
            ['value' => self::FLOOR_99, 'label' => __('Floor .99')],

            ['value' => self::ROUND_95, 'label' => __('Round .95')],
            ['value' => self::CEIL_95, 'label' => __('Ceil .95')],
            ['value' => self::FLOOR_95, 'label' => __('Floor .95')],
        ];
    }
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->toOptionArray() as $item) {
            $array[$item['value']] = $item['label'];
        }
        return $array;
    }
}
