<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
 */
interface CartExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return \Amazon\Payment\Api\Data\QuoteLinkInterface|null
     */
    public function getAmazonOrderReferenceId();

    /**
     * @param \Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId
     * @return $this
     */
    public function setAmazonOrderReferenceId(\Amazon\Payment\Api\Data\QuoteLinkInterface $amazonOrderReferenceId);

    /**
     * @return string|null
     */
    public function getKlMaskedId();

    /**
     * @param string $klMaskedId
     * @return $this
     */
    public function setKlMaskedId($klMaskedId);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[]|null
     */
    public function getMpFreeGifts();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[] $mpFreeGifts
     * @return $this
     */
    public function setMpFreeGifts($mpFreeGifts);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface|null
     */
    public function getMpFreeGiftsButton();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface $mpFreeGiftsButton
     * @return $this
     */
    public function setMpFreeGiftsButton(\Mageplaza\FreeGifts\Api\Data\FreeGiftButtonInterface $mpFreeGiftsButton);
}
