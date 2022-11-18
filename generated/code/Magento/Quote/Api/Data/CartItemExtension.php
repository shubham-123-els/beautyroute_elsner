<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartItemInterface
 */
class CartItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartItemExtensionInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts()
    {
        return $this->_get('discounts');
    }

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->setData('discounts', $discounts);
        return $this;
    }

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface|null
     */
    public function getMpFreeGifts()
    {
        return $this->_get('mp_free_gifts');
    }

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface $mpFreeGifts
     * @return $this
     */
    public function setMpFreeGifts(\Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface $mpFreeGifts)
    {
        $this->setData('mp_free_gifts', $mpFreeGifts);
        return $this;
    }

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\AddGiftItemInterface[]|null
     */
    public function getMpFreeGiftsAdd()
    {
        return $this->_get('mp_free_gifts_add');
    }

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\AddGiftItemInterface[] $mpFreeGiftsAdd
     * @return $this
     */
    public function setMpFreeGiftsAdd($mpFreeGiftsAdd)
    {
        $this->setData('mp_free_gifts_add', $mpFreeGiftsAdd);
        return $this;
    }

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftResponseInterface[]|null
     */
    public function getMpFreeGiftsResponse()
    {
        return $this->_get('mp_free_gifts_response');
    }

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftResponseInterface[] $mpFreeGiftsResponse
     * @return $this
     */
    public function setMpFreeGiftsResponse($mpFreeGiftsResponse)
    {
        $this->setData('mp_free_gifts_response', $mpFreeGiftsResponse);
        return $this;
    }
}
