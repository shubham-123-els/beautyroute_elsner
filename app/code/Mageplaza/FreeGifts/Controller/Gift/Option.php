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

use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Checkout\Model\Cart;
use Magento\Checkout\Model\Cart\RequestInfoFilterInterface;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Mageplaza\FreeGifts\Block\Gift\Option as GiftOption;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;

/**
 * Class Option
 * @package Mageplaza\FreeGifts\Controller\Gift
 */
class Option extends AbstractGift
{
    /**
     * @var Grouped
     */
    protected $groupProduct;

    /**
     * Option constructor.
     *
     * @param Context $context
     * @param HelperRule $helperRule
     * @param Cart $cart
     * @param Registry $registry
     * @param CheckoutSession $checkoutSession
     * @param Json $json
     * @param StockRegistryInterface $stockRegistry
     * @param RequestInfoFilterInterface $requestInfoFilter
     * @param Grouped $groupProduct
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
        Grouped $groupProduct
    ) {
        $this->groupProduct = $groupProduct;

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
     * @throws NoSuchEntityException
     */
    public function execute()
    {
        $html         = '';
        $data         = $this->getRequestParams();
        $productGift  = $this->getHelperGift()->getProductById($data['gift_id']);
        $productType  = $productGift->getTypeId();
        $productTypes = [
            TypeBundle::TYPE_CODE,
            TypeConfigurable::TYPE_CODE,
            Grouped::TYPE_CODE
        ];

        if ((int) $productGift->getRequiredOptions() || in_array($productType, $productTypes)) {
            $this->_view->loadLayout();

            $this->_registry->register('product', $productGift);
            $this->_registry->register('current_product', $productGift);

            switch ($productGift->getTypeId()) {
                case TypeConfigurable::TYPE_CODE:
                    /** @var GiftOption $optionBlock */
                    $optionBlock = $this->_view->getLayout()->getBlock('mpfreegifts_option');
                    $html        = $optionBlock->setRuleId($data['rule_id'])->setType($productType)->toHtml();
                    break;
                case TypeBundle::TYPE_CODE:
                    /** @var GiftOption $optionBlock */
                    $optionBlock = $this->_view->getLayout()->getBlock('mpfreegifts_option_bundle_product');
                    $html        = $optionBlock->setRuleId($data['rule_id'])->setType($productType)->toHtml();
                    break;
                case Grouped::TYPE_CODE:
                    /** @var GiftOption $optionBlock */
                    $quote     = $this->_cart->getQuote();
                    $quoteItem = $this->getHelperGift()->getCurrentQuoteItems($quote->getId());
                    $ids       = $this->groupProduct->getChildrenIds($data['gift_id']);
                    $quoteItem->addFieldToFilter('product_id', ['in' => $ids])
                        ->addFieldToFilter('mpfreegifts_rule_id', ['eq' => $data['rule_id']])
                        ->addFieldToFilter('parent_item_id', ['null' => true]);
                    $optionBlock = $this->_view->getLayout()->getBlock('mpfreegifts_option_grouped_product');
                    $html        = $optionBlock->setRuleId($data['rule_id'])
                        ->setQuoteItem($quoteItem)
                        ->setIsRemoveGrouped($data['is_remove_grouped'])
                        ->setType($productType)
                        ->toHtml();
                    break;
            }

        }

        if ($html !== '') {
            return $this->_json->setData([
                'option' => true,
                'html'   => $html,
            ]);
        }

        return $this->addGift();
    }
}
