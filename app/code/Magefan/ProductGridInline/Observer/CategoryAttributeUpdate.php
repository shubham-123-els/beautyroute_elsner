<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 * Glory to Ukraine! Glory to the heroes!
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Observer;

use Magefan\ProductGridInline\Model\Config;
use Magento\Catalog\Api\CategoryLinkManagementInterface;
use Magento\Catalog\Helper\Product\Edit\Action\Attribute;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * @since 2.0.5
 */
class CategoryAttributeUpdate implements ObserverInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var Collection
     */
    private $products;

    /**
     * @var CategoryLinkManagementInterface
     */
    private $categoryLinkManagement;

    /**
     * @param Config                          $config
     * @param RequestInterface                $request
     * @param CategoryLinkManagementInterface $categoryLinkManagement
     * @param Attribute                       $attribute
     */
    public function __construct(
        Config $config,
        RequestInterface $request,
        CategoryLinkManagementInterface $categoryLinkManagement,
        Attribute $attribute
    ) {
        $this->config = $config;
        $this->request = $request;
        $this->attribute = $attribute;
        $this->categoryLinkManagement = $categoryLinkManagement;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer): void
    {
        if ($this->config->isEnabled()) {
            $addCategories = $this->request->getParam('categories_add');
            $removeCategories = $this->request->getParam('categories_remove');

            if ($addCategories) {
                foreach ($addCategories as $key => $id) {
                    $id = (int)$id;
                    if ($id) {
                        $addCategories[$key] = $id;
                    } else {
                        unset($addCategories[$key]);
                    }
                }
            } else {
                $addCategories = [];
            }

            if ($removeCategories) {
                foreach ($removeCategories as $key => $id) {
                    $id = (int)$id;
                    if ($id) {
                        $removeCategories[$key] = $id;
                    } else {
                        unset($removeCategories[$key]);
                    }
                }
            } else {
                $removeCategories = [];
            }

            if (!$addCategories && !$removeCategories) {
                return;
            }

            foreach ($this->attribute->getProducts() as $product) {
                $originCategories = $product->getCategoryIds();
                $categories = array_unique(array_merge($addCategories, $originCategories), SORT_STRING);
                $categories = array_diff($categories, $removeCategories);

                if (array_diff($categories, $originCategories) || array_diff($originCategories, $categories)) {
                    $this->categoryLinkManagement->assignProductToCategories($product->getSku(), $categories);
                }
            }
        }
    }
}
