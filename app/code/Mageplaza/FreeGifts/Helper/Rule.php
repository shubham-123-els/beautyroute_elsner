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

namespace Mageplaza\FreeGifts\Helper;

use Exception;
use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as TypeConfigurable;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Magento\GroupedProduct\Model\ResourceModel\Product\Link;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Quote\Api\Data\AddressInterface;
use Magento\Quote\Api\Data\CartInterface;
use Magento\Quote\Model\Quote;
use Magento\Quote\Model\Quote\Item as QuoteItem;
use Magento\Quote\Model\Quote\ItemFactory;
use Magento\Quote\Model\Quote\TotalsCollector;
use Magento\Quote\Model\QuoteFactory;
use Mageplaza\FreeGifts\Helper\Data as HelperData;
use Mageplaza\FreeGifts\Helper\Gift as HelperGift;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner\Collection;
use Mageplaza\FreeGifts\Model\ResourceModel\Banner\CollectionFactory;
use Mageplaza\FreeGifts\Model\ResourceModel\Rule\Collection as RuleCollection;
use Mageplaza\FreeGifts\Model\ResourceModel\Rule\CollectionFactory as RuleCollectionFactory;
use Mageplaza\FreeGifts\Model\Rule as RuleModel;
use Mageplaza\FreeGifts\Model\RuleFactory;
use Mageplaza\FreeGifts\Model\Source\Apply;
use Mageplaza\FreeGifts\Model\Source\Type as RuleType;
use Psr\Log\LoggerInterface;

/**
 * Class Rule
 * @package Mageplaza\FreeGifts\Helper
 */
class Rule
{
    const STATE_RUNNING  = 'running';
    const STATE_SCHEDULE = 'schedule';
    const STATE_FINISHED = 'finished';
    const QUOTE_RULE_ID  = 'mpfreegifts_rule_id';
    const OPTION_RULE_ID = 'mpfreegifts_ruleId';

    /**
     * @var string
     */
    protected $_apply;

    /**
     * @var Product
     */
    protected $_product;

    /**
     * @var HelperData
     */
    protected $_helperData;

    /**
     * @var HelperGift
     */
    protected $_helperGift;

    /**
     * @var RuleFactory
     */
    protected $_ruleFactory;

    /**
     * @var RuleCollectionFactory
     */
    protected $_ruleCollectionFactory;

    /**
     * @var Quote
     */
    protected $_quote;

    /**
     * @var CheckoutSession
     */
    protected $_checkoutSession;

    /**
     * @var QuoteFactory
     */
    protected $_quoteFactory;

    /**
     * @var TotalsCollector
     */
    protected $_totalsCollector;

    /**
     * @var boolean
     */
    protected $_extraData = true;

    /**
     * @var AddressInterface
     */
    protected $_shippingAddress;

    /**
     * @var UrlInterface
     */
    protected $_urlBuilder;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var CartRepositoryInterface
     */
    protected $cartRepository;

    /**
     * @var CollectionFactory
     */
    protected $bannerCollectionFactory;

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ItemFactory
     */
    protected $itemFactory;

    /**
     * Rule constructor.
     *
     * @param Data $helperData
     * @param Gift $helperGift
     * @param RuleFactory $ruleFactory
     * @param RuleCollectionFactory $ruleCollectionFactory
     * @param CheckoutSession $checkoutSession
     * @param QuoteFactory $quoteFactory
     * @param TotalsCollector $totalsCollector
     * @param UrlInterface $urlBuilder
     * @param LoggerInterface $logger
     * @param CartRepositoryInterface $cartRepository
     * @param CollectionFactory $bannerCollectionFactory
     * @param RequestInterface $request
     * @param ItemFactory $itemFactory
     */
    public function __construct(
        HelperData $helperData,
        HelperGift $helperGift,
        RuleFactory $ruleFactory,
        RuleCollectionFactory $ruleCollectionFactory,
        CheckoutSession $checkoutSession,
        QuoteFactory $quoteFactory,
        TotalsCollector $totalsCollector,
        UrlInterface $urlBuilder,
        LoggerInterface $logger,
        CartRepositoryInterface $cartRepository,
        CollectionFactory $bannerCollectionFactory,
        RequestInterface $request,
        ItemFactory $itemFactory
    ) {
        $this->_helperData             = $helperData;
        $this->_helperGift             = $helperGift;
        $this->_ruleFactory            = $ruleFactory;
        $this->_ruleCollectionFactory  = $ruleCollectionFactory;
        $this->_checkoutSession        = $checkoutSession;
        $this->_quoteFactory           = $quoteFactory;
        $this->_totalsCollector        = $totalsCollector;
        $this->_urlBuilder             = $urlBuilder;
        $this->logger                  = $logger;
        $this->cartRepository          = $cartRepository;
        $this->bannerCollectionFactory = $bannerCollectionFactory;
        $this->request                 = $request;
        $this->itemFactory             = $itemFactory;
    }

    /**
     * @return HelperData
     */
    public function getHelperData()
    {
        return $this->_helperData;
    }

    /**
     * @return HelperGift
     */
    public function getHelperGift()
    {
        return $this->_helperGift;
    }

    /**
     * @return string
     */
    public function getApply()
    {
        if ($this->_apply) {
            return $this->_apply;
        }

        return Apply::CART;
    }

    /**
     * @param string $apply
     *
     * @return $this
     */
    public function setApply($apply)
    {
        $this->_apply = $apply;

        return $this;
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
     * @return CartInterface|Quote
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getQuote()
    {
        $qid = $this->_checkoutSession->getQuoteId();

        if (isset($qid)) {
            return $this->_quote !== null ? $this->_quote : $this->cartRepository->get($qid);
        }

        return $this->_quote !== null ? $this->_quote : $this->_checkoutSession->getQuote();
    }

    /**
     * @param Product $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->_product = $product;

        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->_product;
    }

    /**
     * @param mixed $ruleId
     *
     * @return RuleModel
     */
    public function getRuleById($ruleId)
    {
        $ruleModel = $this->_ruleFactory->create();

        return $ruleModel->load($ruleId);
    }

    /**
     * @param bool $extraData
     *
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->_extraData = $extraData;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExtraData()
    {
        return $this->_extraData;
    }

    /**
     * @param AddressInterface $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(AddressInterface $shippingAddress)
    {
        $this->_shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return AddressInterface
     */
    public function getShippingAddress()
    {
        return $this->_shippingAddress;
    }

    /**
     * @param int $ruleId
     *
     * @return string
     */
    public function getStateText($ruleId)
    {
        $rule = $this->_ruleFactory->create()->load($ruleId);
        if ($rule->getId()) {
            $toDate   = strtotime($rule->getToDate());
            $fromDate = strtotime($rule->getFromDate());
            $date     = strtotime($this->_helperData->getCurrentDate());

            if (($toDate >= $date && $fromDate <= $date) || (!$toDate && $fromDate <= $date)) {
                return self::STATE_RUNNING;
            }
            if ($fromDate > $date) {
                return self::STATE_SCHEDULE;
            }
            if ($toDate < $date) {
                return self::STATE_FINISHED;
            }
        }

        return '';
    }

    /**
     * @param RuleModel $rule
     *
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function checkContext($rule)
    {
        $groupId          = '0';
        $websiteId        = $this->_helperData->getWebsiteId();
        $customerGroupIds = $rule->getCustomerGroupArray();
        $websiteIds       = $rule->getWebsiteArray();
        if ($this->_helperData->isCustomerLoggedIn()) {
            $groupId = $this->_helperData->getCustomerGroupId();
        }

        return in_array($groupId, $customerGroupIds, true) && in_array($websiteId, $websiteIds, true);
    }

    /**
     * @return array
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getAllValidRules()
    {
        $validRules = $this->setApply(Apply::CART)->getValidatedRules();
        $quoteItems = $this->getQuote()->getAllVisibleItems();
        foreach ($quoteItems as $quoteItem) {
            if ((int) $quoteItem->getDataByKey(self::QUOTE_RULE_ID) === 0) {
                $product = $this->getHelperGift()->getProductById($quoteItem->getData('product_id'));
                $rules   = $this->setApply(Apply::ITEM)->setProduct($product)->getValidatedRules();
                foreach ($rules as $rule) {
                    $validRules[$rule['rule_id']] = $rule;
                }
            }
        }

        return $validRules;
    }

    /**
     * @return array
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getValidatedRules()
    {
        $processedRule  = [];
        $ruleCollection = $this->validateActiveRules();
        /** @var RuleModel $rule */
        foreach ($ruleCollection as $rule) {
            $processedRule[$rule->getId()] = $this->processRuleData($rule);
        }

        return $processedRule;
    }

    /**
     * @return array
     * @throws NoSuchEntityException
     * @throws Exception
     */
    public function validateActiveRules()
    {
        $validatedRules = [];
        if (!$this->_helperData->isEnabled()) {
            return $validatedRules;
        }
        $activeRules    = $this->getActiveRuleCollection();
        $validateTarget = $this->getValidateTarget();
        /** @var RuleModel $activeRule */
        foreach ($activeRules as $activeRule) {
            if ($this->checkContext($activeRule) && $activeRule->getConditions()->validate($validateTarget)) {
                $validatedRules[] = $activeRule;
                if ((int) $activeRule->getDiscardSubsequentRules()) {
                    return $validatedRules;
                }
            }
        }

        return $validatedRules;
    }

    /**
     * @return RuleCollection
     */
    public function getActiveRuleCollection()
    {
        $currentDate    = $this->_helperData->getCurrentDate();
        $ruleCollection = $this->_ruleCollectionFactory->create();

        $ruleCollection->addFieldToSelect('*')
            ->addFieldToFilter('status', 1)
            ->addFieldToFilter('from_date', ['lteq' => $currentDate])
            ->addFieldToFilter('to_date', [['gteq' => $currentDate], ['null' => true]])
            ->addFieldToFilter('apply_for', $this->getApply())
            ->setOrder('priority', 'ASC');

        return $ruleCollection;
    }

    /**
     * @return Product|Quote\Address
     * @throws Exception
     */
    public function getValidateTarget()
    {
        if ($this->getApply() === Apply::CART) {
            $quote = $this->getProductQuote();
            if ($this->_shippingAddress) {
                $quote->setShippingAddress($this->_shippingAddress);
            }
            $address = $quote->isVirtual() ? $quote->getBillingAddress() : $quote->getShippingAddress();
            $address->setData('total_qty', $quote->getItemsSummaryQty());

            return $address;
        }

        return $this->getProduct();
    }

    /**
     * @return Quote
     * @throws Exception
     */
    public function getProductQuote()
    {
        $quote        = $this->getQuote();
        $productQuote = $this->_quoteFactory->create();
        $productQuote->unsetData();
        $productQuote->setStore($quote->getStore());
        $productQuote->setCurrency($quote->getCurrency());
        $productQuote->setCustomer($quote->getCustomer());
        $productQuote->assignCustomer($quote->getCustomer());
        $productQuote->setCustomerTaxClassId($quote->getCustomerTaxClassId());
        $productQuote->setCustomerGroupId($quote->getCustomerGroupId());
        $productQuote->setRemoteIp($quote->getRemoteIp());

        $quoteItems = $quote->getAllItems();
        /** @var QuoteItem $quoteItem */
        foreach ($quoteItems as $quoteItem) {
            if ($quoteItem->getDataByKey(self::QUOTE_RULE_ID) === null && $quoteItem->getParentItemId() === null) {
                $productParams = $this->getProductOrderOptions($quoteItem);

                try {
                    $productQuote->addProduct($quoteItem->getProduct(), new DataObject($productParams));
                } catch (Exception $e) {
                    $this->logger->critical($e->getMessage());
                }
            }
        }

        $productQuote->getBillingAddress()->unsetData();
        $productQuote->setBillingAddress($quote->getBillingAddress());
        $productQuote->getShippingAddress()->unsetData();
        $productQuote->setShippingAddress($quote->getShippingAddress());
        $productQuote->setCheckoutMethod($quote->getCheckoutMethod());
        $productQuote->setInventoryProcessed(false);

        $totalData = $this->_totalsCollector->collect($productQuote)->getData();
        $productQuote->addData($totalData);

        return $productQuote;
    }

    /**
     * @param QuoteItem $quoteItem
     *
     * @return array
     */
    public function getProductOrderOptions(QuoteItem $quoteItem)
    {
        $quoteInfo = $quoteItem->getProduct()->getTypeInstance()->getOrderOptions($quoteItem->getProduct());
        $request   = [
            'qty'     => $quoteItem->getQty(),
            'product' => (int) $quoteItem->getData('product_id'),
        ];

        if (isset($quoteInfo['info_buyRequest'])) {
            if (isset($quoteInfo['info_buyRequest']['super_attribute'])) {
                $request['super_attribute'] = $quoteInfo['info_buyRequest']['super_attribute'];
            }
            if (isset($quoteInfo['info_buyRequest']['bundle_option'])) {
                $request['bundle_option'] = $quoteInfo['info_buyRequest']['bundle_option'];
            }
            if (isset($quoteInfo['info_buyRequest']['bundle_option_qty'])) {
                $request['bundle_option_qty'] = $quoteInfo['info_buyRequest']['bundle_option_qty'];
            }
        }

        return $request;
    }

    /**
     * @param RuleModel $rule
     * @param bool $collectTotal
     *
     * @return array
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function processRuleData(RuleModel $rule, $collectTotal = false)
    {
        $gifts      = $rule->getGiftArray();
        $totalAdded = 0;
        foreach ($gifts as $id => $gift) {
            if ($this->_helperGift->isGiftInStock($id)) {
                $productGift  = $this->_helperGift->getProductById($id);
                $giftPrice    = $this->_helperGift->getGiftPrice(
                    $gift['discount'],
                    $gift['gift_price'],
                    $productGift->getFinalPrice()
                );
                $configurable = $productGift->getTypeId() === TypeConfigurable::TYPE_CODE;
                $giftAdded    = $this->_helperGift->isGiftAdded($id, $this->getQuote()->getId());
                $qtyGiftAdded = $this->_helperGift->getQtyGiftAdded($id, $this->getQuote()->getId());

                if (is_array($giftAdded)) {
                    $gifts[$id]['added_options'] = $giftAdded;
                    $giftAdded                   = true;
                }
                if ($giftAdded) {
                    $totalAdded += $qtyGiftAdded;
                }

                $gifts[$id]['id']         = $id;
                $gifts[$id]['free_ship']  = (int) $gift['free_ship'];
                $gifts[$id]['gift_price'] = $this->getExtraData()
                    ? $this->_helperData->formatPrice($giftPrice)
                    : $giftPrice;

                if ($this->getExtraData()) {
                    $gifts[$id]['added']           = $giftAdded;
                    $gifts[$id]['configurable']    = $configurable;
                    $gifts[$id]['required_option'] = (int) $productGift->getRequiredOptions() ? true : false;
                    $gifts[$id]['sku']             = $productGift->getSku();
                    $gifts[$id]['name']            = $productGift->getName();
                    $gifts[$id]['final_price']     = $this->_helperData->formatPrice($productGift->getFinalPrice());
                    $gifts[$id]['image']           = $this->getHelperGift()->getGiftImage($productGift);
                    $gifts[$id]['show_qty']        = ($productGift->getTypeId() === Type::TYPE_SIMPLE
                        || ($qtyGiftAdded && $productGift->getTypeId() !== Grouped::TYPE_CODE));
                    $gifts[$id]['qty_added']       = $giftAdded ? $qtyGiftAdded : 1;
                    $gifts[$id]['is_grouped']      = $productGift->getTypeId() === Grouped::TYPE_CODE;
                    $gifts[$id]['option_url']      = $this->_urlBuilder->getUrl('mpfreegifts/gift/option');
                }

                unset($gifts[$id]['discount']);
            } else {
                unset($gifts[$id]);
            }
        }

        $countGifts = $this->getCountGifts($gifts);

        $ruleData = [
            'rule_id'          => $rule->getId(),
            'auto_add'         => $rule->getType() === RuleType::AUTOMATIC ? 1 : 0,
            'max_gift'         => $rule->getMaxGift() > $countGifts ? $countGifts : $rule->getMaxGift(),
            'gifts'            => $collectTotal ? $gifts : array_values($gifts),
            'total_added'      => $totalAdded,
            'multi_free_gifts' => $this->_helperData->getConfigGeneral('multi_free_gifts')
        ];

        if ($rule->isAllowNotice()) {
            $ruleData['notice'] = $rule->getNoticeContent();
        }

        return $ruleData;
    }

    /**
     * @param array $gifts
     *
     * @return int
     * @throws NoSuchEntityException
     */
    public function getCountGifts($gifts)
    {
        $count = count($gifts);
        foreach ($gifts as $gift) {
            $productGift = $this->getHelperGift()->getProductById($gift['id']);
            if ($productGift->getTypeId() === Grouped::TYPE_CODE) {
                $ids   = $this->getHelperGift()->getGroupProduct()
                    ->getChildrenIds($gift['id'])[Link::LINK_TYPE_GROUPED];
                $count += (count($ids) - 1);
            }

        }

        return $count;
    }

    /**
     * @return int|null
     */
    public function getStoreId()
    {
        try {
            return $this->getQuote()->getStoreId();
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * @param int $itemId
     * @param array $rules
     *
     * @return array
     */
    public function prepareJsonScript($itemId, $rules)
    {
        try {
            /** @var QuoteItem $quoteItem */
            $quoteItem = $this->getQuote()->getItemById($itemId);
            if ($quoteItem && $quoteItem->getProduct()) {
                $finalPrice                            = $quoteItem->getPrice();
                $regularPrice                          = $quoteItem->getProduct()->getPriceInfo()
                    ->getPrice('regular_price')->getAmount()->getValue();
                $isNoFgProductSpecialPrice             = $this->_helperData->isNoFgProductSpecialPrice();
                $isNoFgConfigurableProductSpecialPrice = $this->_helperData->isNoFgConfigurableProductSpecialPrice();

                if ($isNoFgProductSpecialPrice
                    && ($finalPrice < $regularPrice
                        || ($quoteItem->getAppliedRuleIds() && $quoteItem->getDiscountAmount() > 0))) {
                    if ($quoteItem->getProduct()->getTypeId() !== TypeConfigurable::TYPE_CODE
                        || ($isNoFgConfigurableProductSpecialPrice
                            && $quoteItem->getProduct()->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                        return [];
                    }
                }
            }

            $element = '#mpfreegifts_item_' . $itemId;
            $scope   = 'mpfreegifts_item_' . $itemId;

            return [
                $element => [
                    'Magento_Ui/js/core/app' => [
                        'components' => [
                            $scope => [
                                'component' => 'Mageplaza_FreeGifts/js/gift/cart',
                                'config'    => [
                                    'item_id'          => $itemId,
                                    'layout'           => $this->getHelperData()->getGiftLayout(),
                                    'button_label'     => $this->getHelperData()->getButtonLabel(),
                                    'option_url'       => $this->_urlBuilder->getUrl('mpfreegifts/gift/option'),
                                    'add_url'          => $this->_urlBuilder->getUrl('mpfreegifts/gift/add'),
                                    'remove_url'       => $this->_urlBuilder->getUrl('mpfreegifts/gift/remove'),
                                    'rule_list'        => $rules,
                                    'auto_popup'       => $this->getHelperData()->getAutoPopup(),
                                    'has_cart'         => $this->getHelperData()->hasCartRule(),
                                    'multi_free_gifts' => $this->_helperData->getConfigGeneral('multi_free_gifts')
                                ]
                            ]
                        ]
                    ]
                ]
            ];
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * @param Product $product
     * @param int $area
     *
     * @return array
     */
    public function getRulesId($product, $area)
    {
        try {
            return $this->setApply(Apply::ITEM)->setProduct($product)->getValidatedRulesWithPosition($area);
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * @param int $ruleId
     *
     * @return array|Collection
     */
    public function getBannersCollection($ruleId)
    {
        try {
            $bannerCollection = $this->bannerCollectionFactory->create();

            $bannerCollection->addFieldToSelect('*')
                ->addFieldToFilter('status', 1)
                ->addFieldToFilter('rule_id', ['eq' => $ruleId])
                ->setOrder('position', 'ASC');

            return $bannerCollection;
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * @param int $area
     *
     * @return array
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getValidatedRulesWithPosition($area)
    {
        $params       = $this->request->getParams();
        $finalPrice   = $this->getProduct()->getFinalPrice();
        $regularPrice = $this->getProduct()->getPriceInfo()
            ->getPrice('regular_price')->getAmount()->getValue();

        $isNoFgProductSpecialPrice             = $this->_helperData->isNoFgProductSpecialPrice();
        $isNoFgConfigurableProductSpecialPrice = $this->_helperData->isNoFgConfigurableProductSpecialPrice();

        if (isset($params['id']) && isset($params['product_id'])) {
            $product   = $this->getProduct();
            $quoteItem = $this->itemFactory->create()->load($params['id']);
            if ($quoteItem->getId() && $isNoFgProductSpecialPrice && $quoteItem->getDiscountAmount() > 0) {
                if (!in_array($product->getTypeId(), [TypeConfigurable::TYPE_CODE, TypeBundle::TYPE_CODE], true)
                    || ($isNoFgConfigurableProductSpecialPrice
                        && $product->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                    return [];
                }
            }
        }

        if ($isNoFgProductSpecialPrice && $finalPrice < $regularPrice) {
            if (!in_array($this->getProduct()->getTypeId(), [TypeConfigurable::TYPE_CODE, TypeBundle::TYPE_CODE], true)
                || ($isNoFgConfigurableProductSpecialPrice
                    && $this->getProduct()->getTypeId() === TypeConfigurable::TYPE_CODE)) {
                return [];
            }
        }

        $processedRule  = [];
        $ruleCollection = $this->validateActiveRules();
        /** @var RuleModel $rule */
        foreach ($ruleCollection as $rule) {
            if ((int) $rule->getMpBannerPosition() === $area) {
                $processedRule[] = $rule->getId();
            }
        }

        return $processedRule;
    }
}
