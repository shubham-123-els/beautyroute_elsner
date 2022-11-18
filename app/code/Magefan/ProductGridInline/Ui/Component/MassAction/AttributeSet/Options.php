<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\ProductGridInline\Ui\Component\MassAction\AttributeSet;

use Magento\Framework\Phrase;
use Magento\Framework\UrlInterface;
use Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product;
use Magento\Ui\DataProvider\AbstractDataProvider;

class Options extends AbstractDataProvider implements \JsonSerializable
{
    /**
     * @var array
     */
    protected $options;

    /**
     * Additional options params
     *
     * @var array
     */
    protected $data;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * Base URL for sub-actions
     *
     * @var string
     */
    protected $urlPath;

    /**
     * Param name for sub-actions
     *
     * @var string
     */
    protected $paramName;

    /**
     * Additional params for sub-actions
     *
     * @var array
     */
    protected $additionalData = [];

    /**
     * @var CollectionFactory
     */
    protected $attributeSet;

    /**
     * @var Product
     */
    protected $product;

    /**
     * Options constructor.
     * @param UrlInterface $urlBuilder
     * @param CollectionFactory $attributeSet
     * @param Product $product
     * @param array $data
     */
    public function __construct(
        UrlInterface $urlBuilder,
        CollectionFactory $attributeSet,
        Product $product,
        array $data = []
    ) {
        $this->data = $data;
        $this->urlBuilder = $urlBuilder;
        $this->attributeSet = $attributeSet;
        $this->product = $product;
    }

    /**
     * Get action options
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $options = [];
        $attributeSets = $this->attributeSet->create()
            ->setEntityTypeFilter($this->product->getTypeId())
            ->setOrder('attribute_set_name', 'ASC');
        foreach ($attributeSets as $attributeSet) {
            $options[] = [
                'value' => $attributeSet->getAttributeSetId(),
                'label' => $attributeSet->getAttributeSetName()
            ];
        }

        if ($this->options === null) {

            // Prepares additional settings passed using XML
            $this->prepareData();

            // Applies URL and param name for each sub-action, and any other additional data
            foreach ($options as $optionCode) {
                $this->options[$optionCode['value']] = [
                    'type' => 'change_attribute_set_' . $optionCode['value'],
                    'label' => __($optionCode['label']),
                ];

                if ($this->urlPath && $this->paramName) {
                    $this->options[$optionCode['value']]['url'] = $this->urlBuilder->getUrl(
                        $this->urlPath,
                        [$this->paramName => $optionCode['value']]
                    );
                }

                $this->options[$optionCode['value']] = array_merge_recursive(
                    $this->options[$optionCode['value']],
                    $this->additionalData
                );
            }

            $this->options = array_values($this->options);
        }

        return $this->options;
    }

    /**
     * Prepare addition data for sub-actions
     *
     * @return void
     */
    protected function prepareData()
    {
        foreach ($this->data as $key => $value) {
            switch ($key) {
                case 'urlPath':
                    $this->urlPath = $value;
                    break;
                case 'paramName':
                    $this->paramName = $value;
                    break;
                case 'confirm':
                    foreach ($value as $messageName => $message) {
                        $this->additionalData[$key][$messageName] = (string) new Phrase($message);
                    }
                    break;
                default:
                    $this->additionalData[$key] = $value;
                    break;
            }
        }
    }
}
