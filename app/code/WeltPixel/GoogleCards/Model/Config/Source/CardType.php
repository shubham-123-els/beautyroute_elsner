<?php

namespace WeltPixel\GoogleCards\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class CardType
 *
 * @package WeltPixel\GoogleCards\Model\Config\Source
 */
class CardType implements ArrayInterface
{

    /**
     * Return list of Description Options
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'product',
                'label' => __('Product (Deprecated)')
            ],
            [
                'value' => 'summary',
                'label' => __('Summary Card')
            ],
            [
                'value' => 'summary_large_image',
                'label' => __('Summary Card with Large Image')
            ]
        ];
    }
}
