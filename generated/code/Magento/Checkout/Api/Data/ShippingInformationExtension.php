<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
    /**
     * @return string|null
     */
    public function getKlSmsConsent()
    {
        return $this->_get('kl_sms_consent');
    }

    /**
     * @param string $klSmsConsent
     * @return $this
     */
    public function setKlSmsConsent($klSmsConsent)
    {
        $this->setData('kl_sms_consent', $klSmsConsent);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKlEmailConsent()
    {
        return $this->_get('kl_email_consent');
    }

    /**
     * @param string $klEmailConsent
     * @return $this
     */
    public function setKlEmailConsent($klEmailConsent)
    {
        $this->setData('kl_email_consent', $klEmailConsent);
        return $this;
    }
}
