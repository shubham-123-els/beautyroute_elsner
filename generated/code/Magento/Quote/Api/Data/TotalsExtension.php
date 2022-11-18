<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\TotalsInterface
 */
class TotalsExtension extends \Magento\Framework\Api\AbstractSimpleObject implements TotalsExtensionInterface
{
    /**
     * @return string|null
     */
    public function getCouponLabel()
    {
        return $this->_get('coupon_label');
    }

    /**
     * @param string $couponLabel
     * @return $this
     */
    public function setCouponLabel($couponLabel)
    {
        $this->setData('coupon_label', $couponLabel);
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
}
