<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
 */
interface CartItemExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts();

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface|null
     */
    public function getMpFreeGifts();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface $mpFreeGifts
     * @return $this
     */
    public function setMpFreeGifts(\Mageplaza\FreeGifts\Api\Data\FreeGiftItemInterface $mpFreeGifts);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\AddGiftItemInterface[]|null
     */
    public function getMpFreeGiftsAdd();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\AddGiftItemInterface[] $mpFreeGiftsAdd
     * @return $this
     */
    public function setMpFreeGiftsAdd($mpFreeGiftsAdd);

    /**
     * @return \Mageplaza\FreeGifts\Api\Data\FreeGiftResponseInterface[]|null
     */
    public function getMpFreeGiftsResponse();

    /**
     * @param \Mageplaza\FreeGifts\Api\Data\FreeGiftResponseInterface[] $mpFreeGiftsResponse
     * @return $this
     */
    public function setMpFreeGiftsResponse($mpFreeGiftsResponse);
}
