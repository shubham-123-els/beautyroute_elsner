<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\ProductGridInline\Plugin\Backend\Magento\Catalog\Ui\DataProvider\Product;

use Magefan\ProductGridInline\Model\Config;

class ProductDataProvider
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    private $url;

    /**
     * @var Config
     */
    private $config;

    /**
     * ProductDataProvider constructor.
     *
     * @param \Magento\Framework\UrlInterface     $url
     * @param Config                              $config
     */
    public function __construct(
        \Magento\Framework\UrlInterface $url,
        Config $config
    ) {
        $this->url = $url;
        $this->config = $config;
    }

    /**
     * @param \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject
     * @param $result
     * @return array
     */
    public function afterGetMeta(
        \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject,
        $result
    ) {
        if (!$this->config->isEnabled()) {
            return $result;
        }

        $result = array_merge_recursive($result, [
            'product_columns' => [
                'arguments' => [
                    'data' => [
                        'config' => [
                            'editorConfig' => [
                                'clientConfig' => [
                                    'saveUrl' => $this->url->getUrl('mfproductgrid/inline/edit'),
                                    'validateBeforeSave' => false,
                                ],
                                'indexField' => 'entity_id',
                                'enabled' => true,
                                'selectProvider' => 'product_listing.product_listing.product_columns.ids',
                            ],
                            'childDefaults' => [
                                'fieldAction' => [
                                    'provider' => 'product_listing.product_listing.product_columns_editor',
                                    'target' => 'startEdit',
                                    'params' => [
                                        '${ $.$data.rowIndex }',
                                        true,
                                       'mf_product_grid_inline',
                                    ]
                                ]
                            ],
                            'componentType' => 'insertListing',
                        ]
                    ]
                ]
            ]
        ]);

        return $result;
    }

    /**
     * @param \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject
     * @param callable $proceed
     * @param \Magento\Framework\Api\Filter $filter
     * @return mixed
     */
    public function aroundAddFilter(\Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject, callable $proceed, \Magento\Framework\Api\Filter $filter)
    {
        if ('category' == $filter->getField()) {
            if ($this->config->isEnabled()) {
                $subject->getCollection()->addCategoriesFilter(['in' => $filter->getValue()]);
            }
        } else {
            return $proceed($filter);
        }
    }

    /**
     * @param \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject
     * @param $result
     * @return array
     */
    public function afterGetData(\Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider $subject, $result): array
    {
        if (!$this->config->isEnabled()) {
            return $result;
        }

        if (!empty($result['items'])) {
            $characters = ['"', "'", '&'];
            $replaceFrom = [];
            $replaceTo = [];

            foreach ($characters as $char) {
                $replaceFrom[] = htmlspecialchars($char, ENT_QUOTES);
                $replaceTo[] = $char;
            }

            foreach ($result['items'] as $key => $item) {
                foreach (['name', 'sku'] as $field) {
                    if (isset($item[$field])) {
                        foreach ($characters as $char) {
                            $result['items'][$key][$field] = str_replace($replaceFrom, $replaceTo, $result['items'][$key][$field]);
                        }
                    }
                }
            }
        }

        return $result;
    }
}
