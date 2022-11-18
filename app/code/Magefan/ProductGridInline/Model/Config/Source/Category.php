<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\ProductGridInline\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory;

class Category implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * @var CategoryCollectionFactory
     */
    private $categoryCollectionFactory;

    /**
     * Category constructor.
     * @param CategoryCollectionFactory $categoryCollectionFactory
     */
    public function __construct(
        CategoryCollectionFactory $categoryCollectionFactory
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }

    /**
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function toOptionArray()
    {
        if ($this->options !== null) {
            return $this->options;
        }

        $collection = $this->categoryCollectionFactory->create();
        $collection->addAttributeToSelect('name');

        $this->options[] = ['label' => __('-- Please Select a Category --'), 'value' => ''];

        foreach ($collection as $category) {
            $this->options[] = ['label' => $category->getName() . ' (ID: ' . $category->getId() . ')', 'value' => $category->getId()];
        }

        return $this->options;
    }
}
