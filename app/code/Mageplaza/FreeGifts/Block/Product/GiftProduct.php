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

namespace Mageplaza\FreeGifts\Block\Product;

use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Catalog\Model\Product;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Quote\Model\Quote\ItemFactory;
use Mageplaza\FreeGifts\Helper\Data as HelperData;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Mageplaza\FreeGifts\Model\Source\Apply;

/**
 * Class GiftProduct
 * @package Mageplaza\FreeGifts\Block\Product
 */
class GiftProduct extends Template
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_FreeGifts::product/gift_product.phtml';

    /**
     * @var Product
     */
    protected $_product;

    /**
     * @var Registry
     */
    protected $_registry;

    /**
     * @var HelperRule
     */
    protected $_helperRule;

    /**
     * @var CheckoutSession
     */
    protected $_checkoutSession;

    /**
     * @var array
     */
    protected $_validItemRules = [];

    /**
     * @var HelperData
     */
    protected $helperData;

    /**
     * @var ItemFactory
     */
    protected $itemFactory;

    /**
     * GiftProduct constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param HelperRule $helperRule
     * @param CheckoutSession $checkoutSession
     * @param HelperData $helperData
     * @param ItemFactory $itemFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        HelperRule $helperRule,
        CheckoutSession $checkoutSession,
        HelperData $helperData,
        ItemFactory $itemFactory,
        array $data = []
    ) {
        $this->_registry        = $registry;
        $this->_helperRule      = $helperRule;
        $this->_checkoutSession = $checkoutSession;
        $this->helperData       = $helperData;
        $this->itemFactory      = $itemFactory;

        parent::__construct($context, $data);
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->_registry->registry('product');
        }

        return $this->_product;
    }

    /**
     * @return HelperData
     */
    public function getHelperData()
    {
        return $this->_helperRule->getHelperData();
    }

    /**
     * @return bool
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function isShowGifts()
    {
        $params       = $this->getRequest()->getParams();
        $finalPrice   = $this->getProduct()->getFinalPrice();
        $regularPrice = $this->getProduct()->getPriceInfo()
            ->getPrice('regular_price')->getAmount()->getValue();

        $isNoFgProductSpecialPrice             = $this->helperData->isNoFgProductSpecialPrice();
        $isNoFgConfigurableProductSpecialPrice = $this->helperData->isNoFgConfigurableProductSpecialPrice();

        if (isset($params['id']) && isset($params['product_id'])) {
            $product = $this->getProduct();
            $quoteItem = $this->itemFactory->create()->load($params['id']);
            if ($quoteItem->getId() && $isNoFgProductSpecialPrice && $quoteItem->getDiscountAmount() > 0) {
                if (!in_array($product->getTypeId(), [TypeConfigurable::TYPE_CODE, TypeBundle::TYPE_CODE], true)
                    || ($isNoFgConfigurableProductSpecialPrice
                        && $product->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                    return false;
                }
            }
        }

        if ($isNoFgProductSpecialPrice && $finalPrice < $regularPrice) {
            if (!in_array($this->getProduct()->getTypeId(), [TypeConfigurable::TYPE_CODE, TypeBundle::TYPE_CODE], true)
                || ($isNoFgConfigurableProductSpecialPrice
                    && $this->getProduct()->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                return false;
            }
        }

        return $this->getHelperData()->isEnabled()
            && $this->getHelperData()->getProductPage()
            && $this->getValidatedItemRules();
    }

    /**
     * @return mixed
     */
    public function isPopupModal()
    {
        return $this->getHelperData()->getEnablePopup();
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->getProduct()->getId();
    }

    /**
     * @return string
     */
    public function getTemplateMarker()
    {
        return $this->isPopupModal() ? 'modal' : 'block';
    }

    /**
     * @return array
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getValidItemRules()
    {
        if (empty($this->_validItemRules)) {
            $this->_validItemRules = $this->_helperRule->setQuote($this->_checkoutSession->getQuote())
                ->setApply(Apply::ITEM)
                ->setProduct($this->getProduct())
                ->getValidatedRules();

            return $this->_validItemRules;
        }

        return $this->_validItemRules;
    }

    /**
     * @return bool|string
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getValidatedItemRules()
    {
        $validItemRules = $this->getValidItemRules();
        foreach ($validItemRules as $id => $rule) {
            if ($rule['auto_add']) {
                unset($validItemRules[$id]);
            }
        }

        if (count($validItemRules)) {
            return HelperData::jsonEncode(array_values($validItemRules));
        }

        return false;
    }

    /**
     * @return int|mixed
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function calculateItemLeft()
    {
        $rules    = $this->getValidItemRules();
        $itemLeft = 0;
        foreach ($rules as $rule) {
            $itemLeft = $rule['max_gift'] - $rule['total_added'] + $itemLeft;
        }

        return $itemLeft;
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->isPopupModal() && $this->getNameInLayout() === 'mpfreegifts_giftModal') {
            return parent::_toHtml();
        }
        if (!$this->isPopupModal() && $this->getNameInLayout() === 'mpfreegifts_giftBlock') {
            return parent::_toHtml();
        }

        return '';
    }
}
