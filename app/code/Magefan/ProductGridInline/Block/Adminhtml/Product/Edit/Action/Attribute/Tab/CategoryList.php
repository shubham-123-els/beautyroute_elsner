<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Block\Adminhtml\Product\Edit\Action\Attribute\Tab;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;

/**
 * @since 2.0.5
 */
class CategoryList extends Widget
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * CategoryList constructor.
     *
     * @param CollectionFactory     $collectionFactory
     * @param StoreManagerInterface $storeManager
     * @param Context               $context
     * @param array                 $data
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        StoreManagerInterface $storeManager,
        Context $context,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    /**
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getCategoriesMultiselect(): array
    {
        $categories = $this->collectionFactory->create()
            ->addAttributeToSelect('*')
            ->setStore($this->storeManager->getStore());

        $result = [];
        foreach ($categories as $category) {
            $result[$category->getId()] = $category->getName() . ' (ID: ' . $category->getId() . ')';
        }

        return $result;
    }
}
