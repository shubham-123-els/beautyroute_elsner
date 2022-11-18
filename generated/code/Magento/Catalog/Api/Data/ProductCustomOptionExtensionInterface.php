<?php
namespace Magento\Catalog\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
 */
interface ProductCustomOptionExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getVertexFlexField();

    /**
     * @param string $vertexFlexField
     * @return $this
     */
    public function setVertexFlexField($vertexFlexField);
}
