<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
 */
interface OrderAddressExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getVertexVatCountryCode();

    /**
     * @param string $vertexVatCountryCode
     * @return $this
     */
    public function setVertexVatCountryCode($vertexVatCountryCode);
}
