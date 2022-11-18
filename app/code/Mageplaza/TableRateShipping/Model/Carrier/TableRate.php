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
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Model\Carrier;

use Magento\Catalog\Model\Product;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\DataObject;
use Magento\Quote\Model\Cart\ShippingMethod;
use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory;
use Magento\Quote\Model\Quote\Address\RateResult\MethodFactory;
use Magento\Quote\Model\Quote\Item;
use Magento\Shipping\Model\Carrier\AbstractCarrier;
use Magento\Shipping\Model\Carrier\CarrierInterface;
use Magento\Shipping\Model\Rate\ResultFactory;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\Rate;
use Mageplaza\TableRateShipping\Model\ResourceModel\Method\CollectionFactory;
use Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory as RateCollectionFactory;
use Mageplaza\TableRateShipping\Model\Source\VolumeWeight;
use Psr\Log\LoggerInterface;

/**
 * Class TableRate
 * @package Mageplaza\TableRateShipping\Model\Carrier
 */
class TableRate extends AbstractCarrier implements CarrierInterface
{
    /**
     * @var bool
     */
    protected $_isFixed = true;

    /**
     * @var string
     */
    protected $_code = 'mptablerate';

    /**
     * @var ResultFactory
     */
    private $_rateResultFactory;

    /**
     * @var MethodFactory
     */
    private $_rateMethodFactory;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var RateCollectionFactory
     */
    private $rateCollectionFactory;

    /**
     * @var Data
     */
    private $helper;

    /**
     * AbstractCarrier constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param ErrorFactory $rateErrorFactory
     * @param LoggerInterface $logger
     * @param ResultFactory $rateResultFactory
     * @param MethodFactory $rateMethodFactory
     * @param CollectionFactory $collectionFactory
     * @param RateCollectionFactory $rateCollectionFactory
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        ErrorFactory $rateErrorFactory,
        LoggerInterface $logger,
        ResultFactory $rateResultFactory,
        MethodFactory $rateMethodFactory,
        CollectionFactory $collectionFactory,
        RateCollectionFactory $rateCollectionFactory,
        Data $helper,
        array $data = []
    ) {
        $this->_rateResultFactory    = $rateResultFactory;
        $this->_rateMethodFactory    = $rateMethodFactory;
        $this->collectionFactory     = $collectionFactory;
        $this->rateCollectionFactory = $rateCollectionFactory;
        $this->helper                = $helper;

        parent::__construct($scopeConfig, $rateErrorFactory, $logger, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedMethods()
    {
        $methods = [];

        /** @var Method $method */
        foreach ($this->collectionFactory->create()->getItems() as $method) {
            $methods[$method->getId()] = $method->getName();
        }

        return $methods;
    }

    /**
     * @param Rate[] $rates
     * @param RateRequest $request
     *
     * @return array
     */
    public function validateShippingGroup($rates, $request)
    {
        $result = [];
        if ($rates) {
            foreach ($rates as $rate) {
                $shippingGroups = $rate->getShippingGroup() ? explode(',', $rate->getShippingGroup()) : null;

                if (!$shippingGroups) {
                    $result[] = $rate;
                    continue;
                }

                $hasItemMatchRate = false;
                /** @var Item $item */
                foreach ($request->getAllItems() as $item) {
                    if ($item->getIsVirtual() && !$this->getConfigData('include_virtualtrtet_price')) {
                        continue;
                    }

                    if (!in_array($item->getProductType(), ['bundle', 'configurable'], true)) {
                        $type = $this->helper->getProdAttrVal($item->getProduct(), Data::SHIP_TYPE_ATTR);
                        if (!in_array($type, $shippingGroups, true)) {
                            continue;
                        }

                        $hasItemMatchRate = true;
                    }
                }

                if ($hasItemMatchRate) {
                    $result[] = $rate;
                }
            }
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function collectRates(RateRequest $request)
    {
        if (!$this->getConfigFlag('active')) {
            return false;
        }

        $result = $this->_rateResultFactory->create();

        $isFree = $request->getFreeShipping();

        $cartData = $this->getCartData($request);

        $rateCount = 0;
        /** @var Method $item */
        foreach ($this->collectionFactory->create()->getItems() as $item) {
            $rates = $this->getApplicableRates($request, $item, $cartData);

            /**
             * In getApplicableRates only filter by product. Re-validate to correct rates
             */
            $rates = $this->validateShippingGroup($rates, $request);

            if (empty($rates)) {
                continue;
            }

            $shippingPrice = $isFree ? 0 : $item->calculatePrice($rates, $request, $this);

            /** @var \Magento\Quote\Model\Quote\Address\RateResult\Method|ShippingMethod $method */
            $method = $this->_rateMethodFactory->create();

            $method->setCarrier($this->_code);
            $method->setCarrierTitle($this->getConfigData('title'));

            $method->setMethod($item->getId());
            $title = $item->getTitle($request->getStoreId());
            if (strpos($title, '{{delivery_days}}') !== false) {
                $title = str_replace('{{delivery_days}}', $this->getDeliveryDays($rates), $title);
            }
            $method->setMethodTitle($title);

            $method->setPrice($shippingPrice);
            $method->setCost($shippingPrice);

            $result->append($method);
            $rateCount++;
        }

        if ($rateCount === 0 && $this->getConfigData('showmethod')) {
            $error = $this->_rateErrorFactory->create();
            $error->setCarrier($this->_code);
            $error->setCarrierTitle($this->getConfigData('title'));
            $error->setErrorMessage($this->getConfigData('specificerrmsg'));
            $result->append($error);
        }

        return $result;
    }

    /**
     * @param RateRequest $request
     * @param Rate $rate
     *
     * @return array
     */
    public function getCartData($request, $rate = null)
    {
        $cartData = [
            'weight'   => 0,
            'subtotal' => 0,
            'qty'      => 0,
        ];

        $shipTypes = $rate && $rate->getShippingGroup() ? explode(',', $rate->getShippingGroup()) : null;

        /** @var Item $item */
        foreach ($request->getAllItems() as $item) {
            if ($item->getIsVirtual() && !$this->getConfigData('include_virtual_price')) {
                continue;
            }

            if ($rate) {
                if ($item->getFreeShipping()) {
                    continue;
                }

                /** validate shipping group of non-composite product */
                if ($shipTypes && !in_array($item->getProductType(), ['bundle', 'configurable'], true)) {
                    $type = $this->helper->getProdAttrVal($item->getProduct(), Data::SHIP_TYPE_ATTR);
                    if ($type && !in_array($type, $shipTypes, true)) {
                        continue;
                    }
                }
            }

            /**
             * get weight from all product type except configurable
             * include simple, grouped, bundle, children of configurable and bundle
             */
            if ($item->getProductType() !== 'configurable') {
                $qty = $item->getQty();

                if ($parent = $item->getParentItem()) {
                    $qty *= $parent->getQty();
                }

                $cartData['weight'] += $this->getItemWeight($item) * $qty;
            }

            /** get visible item */
            if (!$item->getParentItem()) {
                $cartData['subtotal'] += $item->getPrice() * $item->getQty();
                $cartData['qty']      += $item->getQty();
            }
        }

        return $cartData;
    }

    /**
     * @param RateRequest $request
     * @param Method $method
     * @param array $cartData
     *
     * @return DataObject[]|Rate[]
     */
    private function getApplicableRates($request, $method, $cartData)
    {
        if (!$method->isActive($request->getStoreId())) {
            return [];
        }

        $collection = $this->rateCollectionFactory->create()
            ->addFieldToFilter('method_id', $method->getId())
            ->filterByRequest($request, $cartData);

        return $collection->getItems();
    }

    /**
     * @param Item $item
     *
     * @return float
     */
    public function getItemWeight($item)
    {
        if (!$product = $this->determineProduct($item)) {
            return 0;
        }

        $weight = 0;

        switch ($this->getConfigData('volume_weight')) {
            case VolumeWeight::WEIGHT:
                $weight = $this->helper->getProdAttrVal($product, $this->getConfigData('weight_attribute'));

                if (!is_numeric($weight)) {
                    $weight = 0;
                }

                break;
            case VolumeWeight::V_ATTRIBUTE:
                $vol = $this->helper->getProdAttrVal($product, $this->getConfigData('v_attribute'));

                if (!is_string($vol)) {
                    break;
                }

                foreach (explode('x', strtolower($vol)) as $value) {
                    if (is_numeric($value)) {
                        $weight = $weight ? $weight * $value : $value;
                    }
                }

                $weight /= $this->getConfigData('shipping_factor') ?: 1;

                break;
            case VolumeWeight::USER_ATTRIBUTE:
                for ($i = 1; $i <= 3; $i++) {
                    $value = $this->helper->getProdAttrVal($product, $this->getConfigData('user_attribute_' . $i));

                    if (is_numeric($value)) {
                        $weight = $weight ? $weight * $value : $value;
                    }
                }

                $weight /= $this->getConfigData('shipping_factor') ?: 1;

                break;
        }

        $orgWeight = $this->helper->getProdAttrVal($product, 'weight');

        if (is_numeric($orgWeight) && $orgWeight > $weight) {
            return $orgWeight;
        }

        return (float) $weight;
    }

    /**
     * @param Item $item
     *
     * @return Product|null
     */
    private function determineProduct($item)
    {
        if ($item->getParentItemId() && $item->getParentItem()->getProductType() === 'bundle') {
            $isDynamic = $this->helper->getProdAttrVal($item->getParentItem()->getProduct(), 'weight_type');

            return $isDynamic ? null : $item->getProduct();
        }

        if ($item->getProductType() === 'bundle') {
            $isDynamic = $this->helper->getProdAttrVal($item->getProduct(), 'weight_type');

            return $isDynamic ? $item->getProduct() : null;
        }

        return $item->getProduct();
    }

    /**
     * @param Rate[] $rates
     *
     * @return string
     */
    private function getDeliveryDays($rates)
    {
        $minDelivery = 0;
        $maxDelivery = 0;

        foreach ($rates as $rate) {
            $delivery = $rate->getDelivery();

            if ($minDelivery > $delivery) {
                $minDelivery = $delivery;
            }

            if ($maxDelivery < $delivery) {
                $maxDelivery = $delivery;
            }
        }

        if (!$maxDelivery) {
            return '';
        }

        if (!$minDelivery || $minDelivery === $maxDelivery) {
            return __('%1 day(s)', $maxDelivery);
        }

        return __('%1 - %2 day(s)', $minDelivery, $maxDelivery);
    }
}
