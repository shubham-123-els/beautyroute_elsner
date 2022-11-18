<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartInterface
 */
class CartExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartExtensionInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return \Amazon\Payment\Api\Data\QuoteLinkInterface|null
     */
    public function getAmazonOrderReferenceId()
    {
        return $this->_get('amazon_order_reference_id');
    }

    /**
     * @param \Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId)
    {
        $this->setData('amazon_order_reference_id', $amazonOrderReferenceId);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKlMaskedId()
    {
        return $this->_get('kl_masked_id');
    }

    /**
     * @param string $klMaskedId
     * @return $this
     */
    public function setKlMaskedId($klMaskedId)
    {
        $this->setData('kl_masked_id', $klMaskedId);
        return $this;
    }

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[]|null
     */
    public function getMpFreeGifts()
    {
        return $this->_get('mp_free_gifts');
    }

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[] $mpFreeGifts
     * @return $this
     */
    public function setMpFreeGifts($mpFreeGifts)
    {
        $this->setData('mp_free_gifts', $mpFreeGifts);
        return $this;
    }

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface|null
     */
    public function getMpFreeGiftsButton()
    {
        return $this->_get('mp_free_gifts_button');
    }

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface $mpFreeGiftsButton
     * @return $this
     */
    public function setMpFreeGiftsButton(\Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface $mpFreeGiftsButton)
    {
        $this->setData('mp_free_gifts_button', $mpFreeGiftsButton);
        return $this;
    }
}
