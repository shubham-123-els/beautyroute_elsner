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

use Exception;
use Magento\Bundle\Model\Option;
use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product as ProductModel;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\DataObject;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Magento\GroupedProduct\Model\ResourceModel\Product\Link;
use Magento\Quote\Model\Quote;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Mageplaza\FreeGifts\Model\Gift\Item as GiftItem;
use Mageplaza\FreeGifts\Model\Source\AddAutoBy;
use Mageplaza\FreeGifts\Model\Source\Type;
use Zend\Uri\Uri as ZendUri;
use Mageplaza\FreeGifts\Helper\Data as HelperData;
use Mageplaza\FreeGifts\Block\Cart\Notification;
use Magento\Framework\Message\ManagerInterface;

/**
 * Class AbstractObserver
 * @package Mageplaza\FreeGifts\Observer
 */
abstract class AbstractObserver implements ObserverInterface
{
    /**
     * @var HelperRule
     */
    protected $_helperRule;

    /**
     * @var Registry
     */
    protected $_registry;

    /**
     * @var CheckoutSession
     */
    protected $_checkoutSession;

    /**
     * @var Quote
     */
    protected $_quote;

    /**
     * @var GiftItem
     */
    protected $_giftItem;

    /**
     * @var ZendUri
     */
    protected $_zendUri;

    /**
     * @var bool
     */
    protected $_cartAddComplete = false;

    /**
     * @var boolean
     */
    protected $_isCartAllGift;

    /**
     * @var Notification
     */
    protected $notification;

    /**
     * @var ManagerInterface
     */
    protected $messageManager;

    /**
     * @var HelperData
     */
    protected $helperData;

    /**
     * AbstractObserver constructor.
     *
     * @param HelperRule $helperRule
     * @param Registry $registry
     * @param CheckoutSession $checkoutSession
     * @param GiftItem $giftItem
     * @param ZendUri $zendUri
     * @param Notification $notification
     * @param ManagerInterface $messageManager
     * @param HelperData $helperData
     */
    public function __construct(
        HelperRule $helperRule,
        Registry $registry,
        CheckoutSession $checkoutSession,
        GiftItem $giftItem,
        ZendUri $zendUri,
        Notification $notification,
        ManagerInterface $messageManager,
        HelperData $helperData
    ) {
        $this->_helperRule      = $helperRule;
        $this->_registry        = $registry;
        $this->_checkoutSession = $checkoutSession;
        $this->_giftItem        = $giftItem;
        $this->_zendUri         = $zendUri;
        $this->notification     = $notification;
        $this->messageManager   = $messageManager;
        $this->helperData       = $helperData;
    }

    /**
     * @param Quote $quote
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->_quote = $quote;

        return $this;
    }

    /**
     * @throws LocalizedException
     * @throws NoSuchEntityException
     * @throws Exception
     */
    public function freeGift()
    {
        $validRules           = $this->_helperRule->setExtraData(false)->getAllValidRules();
        $shippingAddress      = $this->_quote->getShippingAddress();
        $this->_isCartAllGift = $this->isCartAllGift();
        if (!$this->_isCartAllGift) {
            foreach ($validRules as $validRule) {
                if ($validRule['auto_add']) {
                    $this->addGift($validRule['gifts'], (int) $validRule['rule_id'], $validRule['max_gift']);
                }
            }
        }
        if (!$shippingAddress->getCountryId()) {
            $shippingAddress->setCountryId($this->_helperRule->getHelperData()->getDefaultCountry());
        }

        $validRuleIds = array_map('intval', array_keys($validRules));
        $this->removeInvalidateItems($validRuleIds);
        $this->_quote->save();
        $this->_quote->setTotalsCollectedFlag(false);
        $this->_quote->collectTotals();
    }

    /**
     * @param array $gifts
     * @param int $ruleId
     *
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function arrangeGifts($gifts, $ruleId)
    {
        foreach ($gifts as &$gift) {
            $product       = $this->_helperRule->getHelperGift()->getProductById($gift['id']);
            $gift['sku']   = $product->getSku();
            $gift['price'] = $this->prepareProductPrice($product);
        }
        $rule      = $this->_helperRule->getRuleById($ruleId);
        $autoAddBy = (int) $rule->getAutoAddBy();
        if ($rule->getType() === Type::AUTOMATIC) {
            switch ($autoAddBy) {
                case AddAutoBy::ASCENDING_BY_PRODUCT_ID:
                    usort($gifts, function ($a, $b) {
                        return $a['id'] - $b['id'];
                    });
                    break;
                case AddAutoBy::DESCENDING_BY_PRODUCT_ID:
                    usort($gifts, function ($a, $b) {
                        return $b['id'] - $a['id'];
                    });
                    break;
                case AddAutoBy::ASCENDING_BY_PRODUCT_SKU:
                    usort($gifts, function ($a, $b) {
                        return strcmp($a['sku'], $b['sku']);
                    });
                    break;
                case AddAutoBy::DESCENDING_BY_PRODUCT_SKU:
                    usort($gifts, function ($a, $b) {
                        return strcmp($b['sku'], $a['sku']);
                    });
                    break;
                case AddAutoBy::LOWEST_PRODUCT_PRICE:
                    usort($gifts, function ($a, $b) {
                        return $a['price'] - $b['price'];
                    });
                    break;
                case AddAutoBy::HIGHEST_PRODUCT_PRICE:
                    usort($gifts, function ($a, $b) {
                        return $b['price'] - $a['price'];
                    });
                    break;
            }
        }

        return $gifts;
    }

    /**
     * @param Product $product
     *
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function prepareProductPrice($product)
    {
        if ($product->getTypeId() === Grouped::TYPE_CODE) {
            $productIds = $product->getTypeInstance()->getChildrenIds($product->getId());
            $prices     = [];
            foreach ($productIds as $ids) {
                foreach ($ids as $id) {
                    $product  = $this->_helperRule->getHelperGift()->getProductById($id);
                    $prices[] = $product->getPriceModel()->getPrice($product);
                }
            }

            return min($prices);
        }

        if ($product->getTypeId() === TypeBundle::TYPE_CODE) {
            return $product->getPriceInfo()->getPrice('final_price')->getMinimalPrice()->getValue();
        }

        if ($product->getTypeId() === TypeConfigurable::TYPE_CODE) {
            return $product->getFinalPrice();
        }

        return $product->getPrice();
    }

    /**
     * @param array $gifts
     * @param int $ruleId
     * @param int $limit
     *
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function addGift($gifts, $ruleId, $limit)
    {
        $gifts   = $this->arrangeGifts($gifts, $ruleId);
        $counter = 1;
        foreach ($gifts as $gift) {
            if ($counter <= $limit && $this->canAddGift($gift['id'], $ruleId) && !$this->isGiftExist($gift['id'])) {
                $productGift   = $this->_helperRule->getHelperGift()->getProductById($gift['id']);
                $productParams = ['product' => $gift['id'], 'qty' => 1, HelperRule::OPTION_RULE_ID => $ruleId];

                if ($productGift->getTypeId() === TypeConfigurable::TYPE_CODE) {
                    $productParams['super_attribute'] = isset($gift['super_attribute'])
                        ? $gift['super_attribute']
                        : $this->getSuperAttributes($productGift);
                }
                if ($productGift->getTypeId() === TypeBundle::TYPE_CODE) {
                    $bundleOptions        = [];
                    $bundleProductOptions = $productGift->getExtensionAttributes()->getBundleProductOptions();
                    /** @var Option $bundleProductOption */
                    foreach ($bundleProductOptions as $bundleProductOption) {
                        $bundleOptions[$bundleProductOption->getId()] = [
                            $bundleProductOption->getProductLinks()[0]->getId()
                        ];
                    }

                    $productParams['bundle_option'] = $bundleOptions;
                }
                if ($links = $this->_helperRule->getHelperGift()->requireLinks($productGift)) {
                    $productParams['links'] = $links;
                }
                if (isset($gift['options']) && (int) $productGift->getRequiredOptions()) {
                    $productParams['options'] = $gift['options'];
                }

                if ($productGift->getTypeId() === Grouped::TYPE_CODE) {
                    $ids = $this->_helperRule->getHelperGift()
                        ->getGroupProduct()->getChildrenIds($gift['id'])[Link::LINK_TYPE_GROUPED];

                    $rule      = $this->_helperRule->getRuleById($ruleId);
                    $autoAddBy = (int) $rule->getAutoAddBy();
                    if ($rule->getType() === Type::AUTOMATIC) {
                        $ids = $this->arrangeGroupedGifts($ids, $autoAddBy);
                    }

                    $superGroup = array_map(function () {
                        return 1;
                    }, $ids);

                    $countProduct      = 0;
                    $countGroupProduct = $counter;

                    foreach ($ids as $productId) {
                        if ($countGroupProduct <= $limit
                            && $this->canAddGift($productId, $ruleId)
                            && !$this->isGiftExist($productId)) {
                            $countProduct++;
                            $countGroupProduct++;
                        }
                    }

                    $superGroupIds = [];
                    if (isset($gift['super_group'])) {
                        $superGroupIds = array_keys(array_filter($gift['super_group'], function ($v) {
                            return $v > 0;
                        }));
                    }

                    foreach ($ids as $productId) {
                        if (!empty($superGroupIds) && !in_array((int) $productId, $superGroupIds, true)) {
                            continue;
                        }
                        $productGift                  = $this->_helperRule->getHelperGift()->getProductById($productId);
                        $productParams['product']     = $productId;
                        $productParams['gift_id']     = $productId;
                        $productParams['super_group'] = isset($gift['super_group'])
                            ? $gift['super_group'] : $superGroup;
                        $productParams['qty']         = $productParams['super_group'][$productId];
                        if ($links = $this->_helperRule->getHelperGift()->requireLinks($productGift)) {
                            $productParams['links'] = $links;
                        }

                        if ($counter <= $limit
                            && $this->canAddGift($productId, $ruleId)
                            && !$this->isGiftExist($productId)) {
                            $productGift->addCustomOption(HelperRule::QUOTE_RULE_ID, $ruleId);
                            $productGift->addCustomOption('count_product', $countProduct);
                            $this->_quote->addProduct($productGift, new DataObject($productParams));
                            $counter++;
                        }
                    }
                } else {
                    $productGift->addCustomOption(HelperRule::QUOTE_RULE_ID, $ruleId);
                    $this->_quote->addProduct($productGift, new DataObject($productParams));
                    $counter++;
                }
            }

            if ($this->isGiftExist($gift['id'])) {
                $counter++;
            }
        }
    }

    /**
     * @param array $ids
     * @param int $autoAddBy
     *
     * @return array
     * @throws NoSuchEntityException
     */
    public function arrangeGroupedGifts($ids, $autoAddBy)
    {
        if ($autoAddBy !== AddAutoBy::ASCENDING_BY_PRODUCT_ID || AddAutoBy::DESCENDING_BY_PRODUCT_ID) {
            $data = [];
            foreach ($ids as $k => $id) {
                $product  = $this->_helperRule->getHelperGift()->getProductById($id);
                $data[$k] = [
                    'id'    => $k,
                    'sku'   => $product->getSku(),
                    'price' => $product->getFinalPrice()
                ];
            }
        }

        switch ($autoAddBy) {
            case AddAutoBy::ASCENDING_BY_PRODUCT_ID:
                ksort($ids);
                break;
            case AddAutoBy::DESCENDING_BY_PRODUCT_ID:
                krsort($ids);
                break;
            case AddAutoBy::ASCENDING_BY_PRODUCT_SKU:
                usort($data, function ($a, $b) {
                    return strcmp($a['sku'], $b['sku']);
                });

                break;
            case AddAutoBy::DESCENDING_BY_PRODUCT_SKU:
                usort($data, function ($a, $b) {
                    return strcmp($b['sku'], $a['sku']);
                });

                break;
            case AddAutoBy::LOWEST_PRODUCT_PRICE:
                usort($data, function ($a, $b) {
                    return $a['price'] - $b['price'];
                });

                break;
            case AddAutoBy::HIGHEST_PRODUCT_PRICE:
                usort($data, function ($a, $b) {
                    return $b['price'] - $a['price'];
                });

                break;
        }

        if (isset($data) && !empty($data)) {
            $ids = [];
            foreach ($data as $item) {
                $id       = (string) $item['id'];
                $ids[$id] = $id;
            }
        }

        return $ids;
    }

    /**
     * @param int $giftId
     * @param int $ruleId
     *
     * @return bool
     * @throws NoSuchEntityException
     */
    public function canAddGift($giftId, $ruleId)
    {
        $giftHelper = $this->_helperRule->getHelperGift();
        if (!$giftHelper->isGiftInStock($giftId)) {
            return false;
        }
        if ($giftHelper->isMaxGift($ruleId)) {
            return false;
        }

        $deleteGifts = $this->_checkoutSession->getFreeGiftsDeleted();

        return $this->_cartAddComplete ? true : !isset($deleteGifts[$ruleId]);
    }

    /**
     * @param int $giftId
     *
     * @return bool
     * @throws NoSuchEntityException
     */
    public function isGiftExist($giftId)
    {
        $collection = $this->_helperRule->getHelperGift()->getCurrentQuoteItems($this->_quote->getId());
        $product    = $this->_helperRule->getHelperGift()->getProductById($giftId);
        if ($product->getTypeId() === Grouped::TYPE_CODE) {
            $ids = $this->_helperRule->getHelperGift()->getGroupProduct()->getChildrenIds($giftId);
            $collection->addFieldToFilter('product_id', ['in' => $ids])
                ->addFieldToFilter('parent_item_id', ['null' => true]);

            return (bool) $collection->getSize();
        }

        if ($this->_quote->hasProductId($giftId)) {
            $collection->addFieldToFilter('product_id', $giftId)
                ->addFieldToFilter(HelperRule::QUOTE_RULE_ID, ['neq' => 'NULL']);

            return (bool) $collection->getSize();
        }

        return false;
    }

    /**
     * @param ProductModel $configProduct
     *
     * @return array
     */
    public function getSuperAttributes($configProduct)
    {
        $superAttributes = [];
        $firstVariant    = $this->_helperRule->getHelperGift()->getFirstConfigVariant($configProduct);
        $attributes      = $this->_helperRule->getHelperGift()->getConfigAttributes($configProduct);
        foreach ($attributes as $id => $code) {
            $superAttributes[$id] = $firstVariant->getDataByKey($code);
        }

        return $superAttributes;
    }

    /**
     * @return int
     */
    public function isCartAllGift()
    {
        $itemCollection = $this->_helperRule->getHelperGift()->getCurrentQuoteItems($this->_quote->getId());
        $itemCollection->addFieldToFilter(HelperRule::QUOTE_RULE_ID, ['null' => true]);

        return $itemCollection->getSize() === 0;
    }

    /**
     * @param array $ruleIds
     */
    public function removeInvalidateItems($ruleIds)
    {
        $quoteItems    = $this->_quote->getAllVisibleItems();
        $isCartAllGift = $this->_isCartAllGift === null ? $this->isCartAllGift() : $this->_isCartAllGift;
        if ($isCartAllGift) {
            foreach ($quoteItems as $quoteItem) {
                $this->_giftItem->removeAndDelete($quoteItem);
            }
        } else {
            foreach ($quoteItems as $quoteItem) {
                if ($itemRuleId = (int) $quoteItem->getDataByKey(HelperRule::QUOTE_RULE_ID)) {
                    if (!in_array($itemRuleId, $ruleIds, true)) {
                        $this->_giftItem->removeAndDelete($quoteItem);
                    }
                }
            }
        }
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_helperRule->getHelperData()->isEnabled();
    }
}
