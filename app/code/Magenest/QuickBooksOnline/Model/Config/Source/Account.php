<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

/**
 * Class Account
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class Account extends \Magento\Framework\DataObject implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Magenest\QuickBooksOnline\Model\ResourceModel\Account\CollectionFactory
     */
    protected $collectionFactory;

    public function __construct(
        \Magenest\QuickBooksOnline\Model\ResourceModel\Account\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        parent::__construct($data);
        $this->collectionFactory = $collectionFactory;
    }

    public function _toArray($filters)
    {
        /** @var \Magenest\QuickBooksOnline\Model\ResourceModel\Account\Collection $collection */
        $collection = $this->collectionFactory->create();
        if (is_array($filters)) {
            foreach ($filters as $field => $value) {
                $collection->addFieldToFilter($field, $value);
            }
        }
        $result = [];
        foreach ($collection as $v) {
            if ($v['qbo_id']) {
                $type  = isset($v['type']) ? $v['type'] : '';
                $qboId = isset($v['qbo_id']) ? $v['qbo_id'] : '';
                $name  = isset($v['name']) ? $v['name'] : '';

                $result[$v['qbo_id']] = "[" . $type . "][" . $qboId . "] - " . $name;
            }
        }
        asort($result);

        return $result;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $filters = $this->getFilters();
        $result  = [];

        foreach ($this->_toArray($filters) as $k => $v) {
            $result[] = ['value' => $k, 'label' => $v];
        }
        if (empty($result)) {
            $result = [null => __("Select Account")];
        }

        return $result;
    }

    public function getFilters()
    {
        $path = $this->getPath();
        if (strpos($path, 'asset') === 0) {
            return ['type' => 'Other Current Asset', 'detail_type' => 'Inventory'];
        } elseif (strpos($path, 'expense') === 0) {
            return ['type' => 'Cost of Goods Sold', 'detail_type' => 'SuppliesMaterialsCogs'];
        } elseif (strpos($path, 'income') === 0) {
            return ['type' => 'Income', 'detail_type' => 'SalesOfProductIncome'];
        }

        return false;
    }
}
