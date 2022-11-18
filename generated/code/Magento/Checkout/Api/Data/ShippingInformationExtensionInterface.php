<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getKlSmsConsent();

    /**
     * @param string $klSmsConsent
     * @return $this
     */
    public function setKlSmsConsent($klSmsConsent);

    /**
     * @return string|null
     */
    public function getKlEmailConsent();

    /**
     * @param string $klEmailConsent
     * @return $this
     */
    public function setKlEmailConsent($klEmailConsent);
}
