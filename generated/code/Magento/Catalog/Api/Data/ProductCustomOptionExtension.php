<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
 */
class ProductCustomOptionExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ProductCustomOptionExtensionInterface
{
    /**
     * @return string|null
     */
    public function getVertexFlexField()
    {
        return $this->_get('vertex_flex_field');
    }

    /**
     * @param string $vertexFlexField
     * @return $this
     */
    public function setVertexFlexField($vertexFlexField)
    {
        $this->setData('vertex_flex_field', $vertexFlexField);
        return $this;
    }
}
