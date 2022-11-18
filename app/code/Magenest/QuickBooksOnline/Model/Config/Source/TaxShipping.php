<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class TaxShipping
 *
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class TaxShipping implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Magenest\QuickBooksOnline\Model\ResourceModel\Tax\CollectionFactory
     */
    protected $taxCollectionFactory;

    /**
     * TaxShipping constructor.
     *
     * @param \Magenest\QuickBooksOnline\Model\ResourceModel\Tax\CollectionFactory $taxCollectionFactory
     */
    public function __construct(
        \Magenest\QuickBooksOnline\Model\ResourceModel\Tax\CollectionFactory $taxCollectionFactory
    ) {
        $this->taxCollectionFactory = $taxCollectionFactory;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $collection = $this->taxCollectionFactory->create();
        $result     = [];
        foreach ($collection as $v) {
            if ($v['tax_id']) {
                $result[$v['tax_id']] = $v['tax_code'];
            }
        }

        return $result;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $result = [null => __("Please select a tax code")];
        foreach ($this->toArray() as $k => $v) {
            $result[] = ['value' => $k, 'label' => $v];
        }

        return $result;
    }
}
