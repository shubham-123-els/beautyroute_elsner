<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
 */
interface TotalsExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getCouponLabel();

    /**
     * @param string $couponLabel
     * @return $this
     */
    public function setCouponLabel($couponLabel);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[]|null
     */
    public function getMpFreeGifts();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface[] $mpFreeGifts
     * @return $this
     */
    public function setMpFreeGifts($mpFreeGifts);
}
