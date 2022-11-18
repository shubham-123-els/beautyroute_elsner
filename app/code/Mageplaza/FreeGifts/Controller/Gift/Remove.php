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

namespace Mageplaza\FreeGifts\Controller\Gift;

use Exception;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Checkout\Model\Cart;
use Magento\Checkout\Model\Cart\RequestInfoFilterInterface;
use Magento\Checkout\Model\Cart\RequestQuantityProcessor;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Magento\Quote\Model\Quote;
use Magento\Quote\Model\Quote\Item;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;

/**
 * Class Remove
 * @package Mageplaza\FreeGifts\Controller\Gift
 */
class Remove extends AbstractGift
{
    /**
     * @var RequestQuantityProcessor
     */
    protected $quantityProcessor;

    /**
     * Remove constructor.
     *
     * @param Context $context
     * @param HelperRule $helperRule
     * @param Cart $cart
     * @param Registry $registry
     * @param CheckoutSession $checkoutSession
     * @param Json $json
     * @param StockRegistryInterface $stockRegistry
     * @param RequestInfoFilterInterface $requestInfoFilter
     * @param RequestQuantityProcessor $quantityProcessor
     */
    public function __construct(
        Context $context,
        HelperRule $helperRule,
        Cart $cart,
        Registry $registry,
        CheckoutSession $checkoutSession,
        Json $json,
        StockRegistryInterface $stockRegistry,
        RequestInfoFilterInterface $requestInfoFilter,
        RequestQuantityProcessor $quantityProcessor
    ) {
        $this->quantityProcessor = $quantityProcessor;

        parent::__construct(
            $context,
            $helperRule,
            $cart,
            $registry,
            $checkoutSession,
            $json,
            $stockRegistry,
            $requestInfoFilter
        );
    }

    /**
     * @return ResponseInterface|Json|ResultInterface
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function execute()
    {
        $data       = $this->getRequestParams();
        $quote      = $this->_cart->getQuote();
        $quoteItems = $quote->getAllVisibleItems();

        foreach ($quoteItems as $quoteItem) {
            $itemRuleId = (int) $quoteItem->getDataByKey(HelperRule::QUOTE_RULE_ID);
            $itemId     = (int) $quoteItem->getData('product_id');
            if ($data['gift_id'] === $itemId && $data['rule_id'] === $itemRuleId) {
                $this->updateOrRemoveQty($quote, $data, $quoteItem);
            }

            $product = $this->getHelperGift()->getProductById($data['gift_id']);
            if ($product->getTypeId() === Grouped::TYPE_CODE) {
                $ids = $this->getHelperGift()->getGroupProduct()->getChildrenIds($data['gift_id']);
                foreach ($ids as $productIds) {
                    if (in_array($itemId, $productIds) && $data['rule_id'] === $itemRuleId) {
                        $data['qty'] = $data['super_group'][$itemId];
                        $this->updateOrRemoveQty($quote, $data, $quoteItem);
                    }
                }
            }
        }

        try {
            $this->_cart->save();
            $quote->setTotalsCollectedFlag(false)->collectTotals();

            return $this->_json->setData(['success' => true]);
        } catch (Exception $e) {
            return $this->errorMessage($e->getMessage());
        }
    }

    /**
     * @param Quote $quote
     * @param array $data
     * @param Item $quoteItem
     *
     * @throws LocalizedException
     */
    protected function updateOrRemoveQty($quote, $data, $quoteItem)
    {
        if ($data['qty'] >= $quoteItem->getQty() || !$data['qty']) {
            $this->_cart->removeItem($quoteItem->getItemId());
        } else {
            $cartData[$quoteItem->getItemId()]['qty'] = $quoteItem->getQty() - $data['qty'];
            $this->validateCartData($cartData);

            $cartData = $this->quantityProcessor->process($cartData);

            foreach ($cartData as $itemId => $itemInfo) {
                $item = $quote->getItemById($itemId);
                $qty  = isset($itemInfo['qty']) ? (double) $itemInfo['qty'] : 0;
                if ($item) {
                    $this->updateItemQuantity($item, $qty);
                }
            }
        }
    }

    /**
     * @param null $cartData
     *
     * @throws LocalizedException
     */
    protected function validateCartData($cartData = null)
    {
        if (!is_array($cartData)) {
            throw new LocalizedException(
                __('Something went wrong while saving the page. Please refresh the page and try again.')
            );
        }
    }

    /**
     * Updates quote item quantity.
     *
     * @param Item $item
     * @param float $qty
     *
     * @return void
     * @throws LocalizedException
     */
    private function updateItemQuantity(Item $item, $qty)
    {
        if ($qty > 0) {
            $item->clearMessage();
            $item->setQty($qty);

            if ($item->getHasError()) {
                throw new LocalizedException(__($item->getMessage()));
            }
        }
    }
}
