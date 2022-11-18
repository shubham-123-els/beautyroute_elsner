<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Block\Cart;

use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Mageplaza\FreeGifts\Helper\Data as HelperData;
use Mageplaza\FreeGifts\Model\Source\Apply;

/**
 * Class CartRule
 * @package Mageplaza\FreeGifts\Block\Cart
 */
class CartRule extends CheckoutCart
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::cart/cart_rule.phtml';

    /**
     * @var mixed
     */
    protected $_cartRules = false;

    /**
     * @return array
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getValidatedCartRules()
    {
        $cachedRules      = $this->_registry->registry('mpfreegifts_cart_rules');
        $validCartRules   = is_array($cachedRules)
            ? $cachedRules
            : $this->_helperRule->setApply(Apply::CART)->getValidatedRules();
        $this->_cartRules = $validCartRules;

        return array_values($validCartRules);
    }

    /**
     * @return bool
     */
    public function hasManualCartRule()
    {
        if ($this->_cartRules) {
            foreach ($this->_cartRules as $cartRule) {
                if ($cartRule['auto_add'] === 0) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return string
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getJsonScript()
    {
        return HelperData::jsonEncode(
            $this->_helperRule->prepareJsonScript('cart', $this->getValidatedCartRules())
        );
    }

    /**
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function isShowAddFreeGifts()
    {
        $quote = $this->_helperRule->getQuote();
        foreach ($quote->getAllVisibleItems() as $item) {
            if ($item->getData('mpfreegifts_rule_id')) {
                continue;
            }
            $finalPrice                            = $item->getPrice();
            $regularPrice                          = $item->getProduct()->getPriceInfo()
                ->getPrice('regular_price')->getAmount()->getValue();
            $isNoFgProductSpecialPrice             = $this->getHelperData()->isNoFgProductSpecialPrice();
            $isNoFgConfigurableProductSpecialPrice = $this->getHelperData()->isNoFgConfigurableProductSpecialPrice();

            if ($isNoFgProductSpecialPrice
                && ($finalPrice < $regularPrice || ($item->getAppliedRuleIds() && $item->getDiscountAmount() > 0))) {
                if ($item->getProduct()->getTypeId() !== TypeConfigurable::TYPE_CODE
                    || ($isNoFgConfigurableProductSpecialPrice
                        && $item->getProduct()->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                    return false;
                }
            }
        }

        return true;
    }
}
