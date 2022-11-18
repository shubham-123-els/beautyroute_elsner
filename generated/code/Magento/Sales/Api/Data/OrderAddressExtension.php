<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderAddressInterface
 */
class OrderAddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderAddressExtensionInterface
{
    /**
     * @return string|null
     */
    public function getVertexVatCountryCode()
    {
        return $this->_get('vertex_vat_country_code');
    }

    /**
     * @param string $vertexVatCountryCode
     * @return $this
     */
    public function setVertexVatCountryCode($vertexVatCountryCode)
    {
        $this->setData('vertex_vat_country_code', $vertexVatCountryCode);
        return $this;
    }
}
