<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Product status functionality model
 */
class Type implements SourceInterface, OptionSourceInterface
{
    /**
     * Retrieve option array
     * @return string[]
     */
    public static function getOptionArray()
    {
        return [
            'customer'      => __('Customer'),
            'item'          => __('Product'),
            'order'         => __('Order'),
            'invoice'       => __('Invoice'),
            'creditmemo'    => __('Credit Memo'),
            'paymentmethod' => __('Payment Method'),
            'taxcode'       => __('Tax Code'),
            'ordervoid'     => __('Void Order')
        ];
    }

    /**
     * Retrieve option array with empty value
     * @return string[]
     */
    public function getAllOptions()
    {
        $result = [];

        foreach (self::getOptionArray() as $index => $value) {
            $result[] = ['value' => $index, 'label' => $value];
        }

        return $result;
    }

    /**
     * Retrieve option text by option value
     *
     * @param string $optionId
     *
     * @return string
     */
    public function getOptionText($optionId)
    {
        $options = self::getOptionArray();

        return $options[$optionId] ?? null;
    }

    /**
     * Get options as array
     * @return array
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return $this->getAllOptions();
    }
}
