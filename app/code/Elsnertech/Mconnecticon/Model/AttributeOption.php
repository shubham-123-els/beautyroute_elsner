<?php
namespace Elsnertech\Mconnecticon\Model;


class AttributeOption implements \Magento\Framework\Option\ArrayInterface
{
    protected const ATTRIBUTE_CODE = 'benefits';

    protected $eavConfig;
   
    public function __construct(
        \Magento\Eav\Model\Config $eavConfig,
        \Mconnect\Iconlib\Helper\Data $helper
    ) {
        $this->_eavConfig = $eavConfig;
        $this->helper = $helper;
    }

    public function getAttributeCode()
    {
        $attributeCode = $this->helper->getConfig('mconnect_iconlib/general/select_attribute');
        return ($attributeCode)?$attributeCode:self::ATTRIBUTE_CODE;
    }


    public function toOptionArray()
    {
        $attributeOptions = $this->getAttributeOptions();
        $optonData = [];
        foreach ($attributeOptions as $key => $value) {
           $optonData[$value['value']] = $value['label'];
        }
        return $optonData;
    }

    public function getAttributeOptions()
    {
        $attributeCode = $this->getAttributeCode();
        $attribute = $this->_eavConfig->getAttribute('catalog_product', $attributeCode);
        $options = $attribute->getSource()->getAllOptions();
        return $options;
    }
}
