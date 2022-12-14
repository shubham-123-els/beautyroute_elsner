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

namespace Mageplaza\FreeGifts\Observer;

use Magento\Checkout\Model\Cart;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\Event\Observer;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Quote\Model\Quote\Item;

/**
 * Class CartSaveAfter
 * @package Mageplaza\FreeGifts\Observer
 */
class CartSaveAfter extends AbstractObserver
{
    /**
     * @param Observer $observer
     *
     * @return void
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        if (!$this->isEnabled()) {
            return;
        }

        /** @var Cart $cart */
        $cart = $observer->getEvent()->getDataByKey('cart');

        /** @var Item $lastAddedItem */
        $lastAddedItem = $cart->getQuote()->getLastAddedItem();

        if ($lastAddedItem) {
            $finalPrice                            = $lastAddedItem->getPrice();
            $regularPrice                          = $lastAddedItem->getProduct()->getPriceInfo()
                ->getPrice('regular_price')->getAmount()->getValue();
            $isNoFgProductSpecialPrice             = $this->helperData->isNoFgProductSpecialPrice();
            $isNoFgConfigurableProductSpecialPrice = $this->helperData->isNoFgConfigurableProductSpecialPrice();

            if ($isNoFgProductSpecialPrice && $finalPrice < $regularPrice) {
                if ($lastAddedItem->getProduct()->getTypeId() !== TypeConfigurable::TYPE_CODE
                    || ($isNoFgConfigurableProductSpecialPrice
                        && $lastAddedItem->getProduct()->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                    return;
                }
            }
        }

        $this->setQuote($cart->getQuote())->freeGift();
    }
}
