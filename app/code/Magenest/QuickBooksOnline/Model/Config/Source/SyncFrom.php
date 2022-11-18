<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 */

namespace Magenest\QuickBooksOnline\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Store\Api\StoreRepositoryInterface;

/**
 * Class SyncFrom
 * @package Magenest\QuickBooksOnline\Model\Config\Source
 */
class SyncFrom implements ArrayInterface
{
    protected $storeRepository;

    public function __construct(
        StoreRepositoryInterface $storeRepository
    ) {
        $this->storeRepository = $storeRepository;
    }

    public function toOptionArray()
    {
        $result = [];
        foreach ($this->storeRepository->getList() as $store) {
            if ($store->getId() == 0) {
                continue;
            }
            $result[] = [
                'value' => $store->getId(),
                'label' => $store->getName()
            ];
        }
        return $result;
    }
}
