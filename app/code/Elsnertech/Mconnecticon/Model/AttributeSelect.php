<?php
namespace Elsnertech\Mconnecticon\Model;


class AttributeSelect implements \Magento\Framework\Option\ArrayInterface
{
      
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Eav\Attribute $attributeFactory
    ) {
        $this->_attributeFactory = $attributeFactory;
    }

    public function toOptionArray()
    {
        $attributes = $this->getAttributes();
        $optonData = [];
        foreach ($attributes as $key => $value) {
           $optonData[] = array('label' => $value->getName(), 'value'=> $value->getAttributeCode());
        }
        return $optonData;
    }

    public function getAttributes()
    {
        $attributeInfo = $this->_attributeFactory->getCollection();
        $attributeInfo->addFieldToFilter('entity_type_id', 4);
        $attributeInfo->addFieldToFilter('frontend_input', ['in'=>['select','multiselect']]);
        return $attributeInfo;
    }
}
