<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\PaymentMethodsFactory;
use Magenest\QuickBooksOnline\Model\Synchronization;
use Magenest\QuickBooksOnline\Model\TaxFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Model\Order\TaxFactory as SalesOrderTax;
use Magento\Sales\Model\ResourceModel\Order\Tax\Item as TaxItem;
use Magento\Tax\Api\OrderTaxManagementInterface;
use Psr\Log\LoggerInterface;

/**
 * Class Order
 * @package Magenest\QuickBooksOnline\Model\Synchronization
 * @method \Magento\Sales\Model\Order getModel()
 */
class Order extends Synchronization
{
    /**
     * @var Customer
     */
    protected $_syncCustomer;

    /**
     * @var Item
     */
    protected $_item;

    /**
     * @var PaymentMethods
     */
    protected $_paymentMethods;

    /**
     * @var OrderFactory
     */
    protected $_orderFactory;

    /**
     * @var TaxFactory
     */
    protected $tax;

    /**
     * @var TaxCode
     */
    protected $taxSync;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var State
     */
    protected $state;

    /**
     * @var TaxItem
     */
    protected $taxItem;

    /**
     * @var SalesOrderTax
     */
    protected $salesOrderTax;

    /**
     * @var TimezoneInterface
     */
    protected $timezone;

    /**
     * @var OrderTaxManagementInterface
     */
    protected $orderTaxInterface;

    /**
     * Order constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param OrderFactory $orderFactory
     * @param PaymentMethodsFactory $paymentMethods
     * @param Item $item
     * @param Customer $customer
     * @param TaxFactory $taxFactory
     * @param TaxCode $taxSync
     * @param Config $config
     * @param LoggerInterface $logger
     * @param Context $context
     * @param State $state
     * @param TaxItem $taxItem
     * @param SalesOrderTax $salesOrderTax
     * @param OrderTaxManagementInterface $orderTaxInterface
     * @param TimezoneInterface $timezone
     */
    public function __construct(
        Client $client,
        Log $log,
        OrderFactory $orderFactory,
        PaymentMethodsFactory $paymentMethods,
        Item $item,
        Customer $customer,
        TaxFactory $taxFactory,
        TaxCode $taxSync,
        Config $config,
        LoggerInterface $logger,
        Context $context,
        State $state,
        TaxItem $taxItem,
        SalesOrderTax $salesOrderTax,
        OrderTaxManagementInterface $orderTaxInterface,
        TimezoneInterface $timezone
    ) {
        parent::__construct($client, $log, $context);
        $this->_orderFactory     = $orderFactory;
        $this->_item             = $item;
        $this->_syncCustomer     = $customer;
        $this->_paymentMethods   = $paymentMethods;
        $this->type              = 'order';
        $this->tax               = $taxFactory;
        $this->taxSync           = $taxSync;
        $this->config            = $config;
        $this->logger            = $logger;
        $this->state             = $state;
        $this->taxItem           = $taxItem;
        $this->salesOrderTax     = $salesOrderTax;
        $this->orderTaxInterface = $orderTaxInterface;
        $this->timezone          = $timezone;
    }

    /**
     * Sync Sales Order to QB invoice
     *
     * @param $incrementId
     * @param $newOrder
     *
     * @return mixed
     * @throws \Exception
     */
    public function sync($incrementId, $newOrder = false)
    {
        try {
            if (!$incrementId) {
                throw new LocalizedException(__('Missing Order Increment ID'));
            }
            $model = $this->_orderFactory->create()->loadByIncrementId($incrementId);
            if (is_array($this->config->getSyncFrom())) {
                if (!in_array($model->getStoreId(), $this->config->getSyncFrom())) {
                    $this->addLog($incrementId, null, 'Order sync is not enabled for this store.', 'skip');
                    return null;
                }
            }
            /** @var \Magento\Sales\Model\Order\Item $item */
            $checkOrder = $this->checkOrder($incrementId);
            if (isset($checkOrder['Id'])) {
                //save commit event after order's canceled
                if ($model->getState() == 'canceled') {
                    //TODO: a way to check if existing invoice's already voided
                    /** @var \Magento\Framework\Registry $registryObject */
                    $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
                    if (!$registryObject->registry('voided' . $incrementId)) {
                        $this->void($incrementId, $checkOrder);
                    }

                    return $checkOrder['Id'];

                } else {
                    $this->addLog($incrementId, $checkOrder['Id'], 'This Order already exists.', 'skip');

                    return $checkOrder['Id'];
                }
            } else {
                if (!$model->getId()) {
                    throw new LocalizedException(__('We can\'t find the Order #%1', $incrementId));
                }

                /**
                 * check the case delete customer before sync their order
                 */
                if (!$this->_syncCustomer->checkCustomerExists($model->getCustomerId())) {
                    $model->setCustomerId(null);
                }

                $this->setModel($model);
                $this->prepareParams();
                $params = $this->getParameter();

                $checkOrder = $this->checkOrder($incrementId);
                if (isset($checkOrder['Id'])) {
                    $this->addLog($incrementId, $checkOrder['Id'], 'This Order already exists.', 'skip');

                    return $checkOrder['Id'];
                }
                $response = $this->sendRequest(\Zend_Http_Client::POST, 'invoice', $params);
                if (!empty($response['Invoice']['Id'])) {
                    $qboId = $response['Invoice']['Id'];
                    $this->addLog($incrementId, $qboId);
                }
                $this->parameter = [];

                /** @var \Magento\Framework\Registry $registryObject */
                $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');

                //if invoice's voided, qty is auto returned, no need to resync qty
                if ($model->getState() == 'canceled') {
                    if (!$registryObject->registry('voided' . $incrementId)) {
                        $this->void($incrementId);
                    }
                }

                //no longer needed since QBO automatically deduct qty when invoice's synced
                /*else if ($this->config->getTrackQty()) {
                    foreach ($model->getAllItems() as $orderItem) {
                        $registryObject->unregister('check_to_syn' . $orderItem->getProductId());
                        if ($orderItem->getProductType() == 'bundle') {
                            $this->_item->sync($orderItem->getProductId());
                        } else {
                            if ($this->state->getAreaCode() == 'adminhtml' && ($newOrder == true)) {
                                $orderedQty = $orderItem->getBuyRequest()->getData('qty');
                            } else {
                                $orderedQty = null;
                            }
                            //product with customizable options cannot be synced by SKU
                            if (!empty($orderItem->getProductOptions()['info_buyRequest']['options']))
                                $this->_item->sync($orderItem->getProductId(), true, null, $orderedQty);
                            else
                                $this->_item->syncBySku($orderItem->getSku(), true, $orderedQty);
                        }
                    }
                }
                $registryObject->unregister('skip_log');
                $this->parameter = [];*/

                return $qboId ?? null;

            }
        } catch (LocalizedException $e) {
            $this->parameter = [];
            $this->addLog($incrementId, null, $e->getMessage());
        }

        return null;
    }

    /**
     * @param $incrementId
     * @param array|null $fromOrderSync
     *
     * @return mixed|null
     * @throws \Zend_Http_Client_Exception
     */
    public function void($incrementId, $fromOrderSync = null)
    {
        $this->type = 'ordervoid';
        try {
            if (!$incrementId) {
                throw new LocalizedException(__('Missing Order Increment ID'));
            }
            if (!$fromOrderSync) {
                $checkOrder = $this->checkOrder($incrementId);
                if (!isset($checkOrder['Id'])) {
                    throw new LocalizedException(__('Order %1 is not synced to QuickBooks.', $incrementId));
                }
            } else {
                $checkOrder = $fromOrderSync;
            }

            /** @var \Magento\Framework\Registry $registryObject */
            $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
            if (!$registryObject->registry('voided' . $incrementId)) {

                $params = [
                    'Id'        => $checkOrder['Id'],
                    'SyncToken' => $checkOrder['SyncToken'],
                    'BillEmail' => $checkOrder['BillEmail']
                ];

                $response = $this->sendRequest(\Zend_Http_Client::POST, 'invoice?operation=void', $params);

                if (!empty($response['Invoice']['Id'])) {
                    $qboId = $response['Invoice']['Id'];
                    $this->addLog($incrementId, $qboId);
                }
                //a voided invoice is already synced -> skip subsequence syncs in this session
                $registryObject->register('voided' . $incrementId, true);
            }

        } catch (LocalizedException $e) {
            $this->parameter = [];
            $this->addLog($incrementId, null, $e->getMessage());
        }

        $this->type = 'order';

        return $qboId ?? null;
    }

    /**
     * @return $this
     * @throws LocalizedException
     * @throws \Exception
     */
    protected function prepareParams()
    {
        /** @var \Magento\Sales\Model\Order $model */
        $model  = $this->getModel();
        $prefix = $this->config->getPrefix('order');

        //set billing address
        $billCountry = $this->prepareBillingAddress();

        $params = [
            'DocNumber'   => $prefix . $model->getIncrementId(),
            'TxnDate'     => $this->timezone->date(new \DateTime($model->getCreatedAt()))->format('Y-m-d'),
            'CustomerRef' => $this->prepareCustomerId(),
            'Line'        => $this->prepareLineItems($billCountry),
            'TotalAmt'    => $model->getBaseGrandTotal(),
            'BillEmail'   => ['Address' => mb_substr((string)$model->getCustomerEmail(), 0, 100)],
        ];

        //add shipping method sync
        if (!empty($model->getShippingDescription()) && strlen($model->getShippingDescription()) <= 30) {
            $params['ShipMethodRef'] = ['value' => $model->getShippingDescription()];
        }

        $this->setParameter($params);
        // st Tax
        if ($this->config->getCountry() == 'OTHER' && $model->getBaseTaxAmount() > 0) {
            $this->prepareTax();
        }

        if ($this->getIsShippingEnabled() == true) {
            $this->prepareShippingAddress();
        }

        return $this;
    }

    /**
     * Create Tax
     */
    public function prepareTax()
    {
        /** @var \Magento\Sales\Model\Order $model */
        $model      = $this->getModel();
        $taxRateRef = null;

        try {
            $taxRateRef = $this->getTaxRateRef();
        } catch (\Exception $e) {
        }

        $params['TxnTaxDetail'] = [
            'TotalTax' => $model->getBaseTaxAmount()
        ];

        if (isset($taxRateRef)) {
            $params['TxnTaxDetail']['TxnTaxCodeRef'] = [
                'value' => $taxRateRef
            ];
//            $params['TxnTaxDetail']['TaxLine'] = [
//                [
//                    'Amount' => $model->getBaseTaxAmount(),
//                    'DetailType' => 'TaxLineDetail',
//                    'TaxLineDetail' => [
//                        'TaxRateRef' => ['value' => $taxRateRef]
//                    ]
//                ]
//            ];
        }

        return $this->setParameter($params);
    }

    /**
     * @param $taxId
     *
     * @return int
     */
    protected function getTaxQBOIdFromTaxItem($taxId)
    {
        $code = $this->salesOrderTax->create()->load($taxId)->getCode();

        return $this->tax->create()->loadByCode($code)->getQboId();
    }

    /**
     * @return null|string
     * @throws NoSuchEntityException
     */
    private function getTaxCode()
    {
        $order           = $this->getModel();
        $orderTaxDetails = $this->orderTaxInterface->getOrderTaxDetails($order->getId())->getAppliedTaxes();
        if (isset($orderTaxDetails[0])) {
            return $orderTaxDetails[0]->getCode();
        }

        return null;
    }

    /**
     * @return int|null
     * @throws NoSuchEntityException
     */
    private function getTaxRateRef()
    {
        $taxCode = $this->getTaxCode();
        if (empty($taxCode)) {
            return null;
        }

        return $this->tax->create()->loadByCode($taxCode)->getQboId();
    }

    /**
     * @return array
     * @throws LocalizedException
     */
    public function prepareCustomerId()
    {
        try {
            $model      = $this->getModel();
            $customerId = $model->getCustomerId();
            if ($customerId) {
                $cusRef = $this->_syncCustomer->sync($customerId, false);
            } else {
                $cusRef = $this->_syncCustomer->syncGuest(
                    $model->getBillingAddress(),
                    $model->getShippingAddress()
                );
            }

            return ['value' => $cusRef];
        } catch (\Exception $e) {
            throw new LocalizedException(
                __('Can\'t sync customer on Order to QBO: %1', $e->getMessage())
            );
        }
    }

    /**
     * @return null|string
     */
    public function prepareBillingAddress()
    {
        /** @var \Magento\Sales\Model\Order\Address $billAddress */
        $billAddress = $this->getModel()->getBillingAddress();
        if ($billAddress !== null) {
            $params['BillAddr'] = $this->getAddress($billAddress);
            $billCountry        = isset($params['BillAddr']['Country']) ? $params['BillAddr']['Country'] : '';
            if ($this->config->getCountry() == 'FR') {
                if ($billCountry == 'FR') {
                    $params['TransactionLocationType'] = 'WithinFrance';
                } elseif (in_array($billCountry, $this->config->getFranceTerritories())) {
                    $params['TransactionLocationType'] = 'FranceOverseas';
                } elseif (in_array($billCountry, $this->config->getEUCountries())) {
                    $params['TransactionLocationType'] = 'OutsideFranceWithEU';
                } else {
                    $params['TransactionLocationType'] = 'OutsideEU';
                }
            }
            $this->setParameter($params);

            return $billCountry;
        }

        return null;
    }

    /**
     * get shipping
     */
    public function prepareShippingAddress()
    {
        $shippingAddress = $this->getModel()->getShippingAddress();
        if ($shippingAddress !== null) {
            $params['ShipAddr'] = $this->getAddress($shippingAddress);
            $this->setParameter($params);
        }
    }

    /**
     * @param $billCountry
     *
     * @return array
     * @throws LocalizedException
     */
    public function prepareLineItems($billCountry = null)
    {
        try {
            $i     = 1;
            $lines = [];
            /** @var \Magento\Sales\Model\Order\Item $item */
            $model = $this->getModel();
            foreach ($model->getItems() as $item) {
                $productType    = $item->getProductType();
                $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
                if ($productType == 'configurable') {
                    $total         = $item->getBaseRowTotal();
                    $tax           = $item->getBaseTaxAmount() > 0;
                    $childrenItems = $item->getChildrenItems();
                    if (isset($childrenItems[0])) {
                        $productId = $childrenItems[0]->getProductId();
                        $sku       = $childrenItems[0]->getSku();
                        $qty       = $childrenItems[0]->getQtyOrdered();
                    } else {
                        $productId = $item->getProductId();
                        $sku       = $item->getSku();
                        $qty       = $item->getQtyOrdered();
                    }
                    $price = $qty > 0 ? $total / $qty : $item->getBasePrice();
                    $registryObject->unregister('check_to_syn' . $productId);
                    $itemId = $this->_item->syncBySku($sku, false);
                    if (!$itemId) {
                        throw new \Exception(
                            __('Can\'t sync Product with SKU:%1 on Order to QBO', $sku)
                        );
                    }
                } elseif ($item->getParentItem() && ($productType == 'virtual' || $productType == 'simple')) {
                    if ($item->getParentItem()->getProductType() == 'configurable') {
                        continue;
                    } else {
                        $productId = $item->getProductId();
                        $sku       = $item->getSku();
                        $qty       = $item->getQtyOrdered();
                        $total     = $item->getBaseRowTotal();
                        $price     = $qty > 0 ? $total / $qty : $item->getBasePrice();
                        $tax       = $item->getBaseTaxAmount() > 0;

                        $registryObject->unregister('check_to_syn' . $productId);
                        if (!empty($item->getProductOptions()['info_buyRequest']['options'])) {
                            $itemId = $this->_item->sync($item->getProductId());
                        } else {
                            $itemId = $this->_item->syncBySku($sku);
                        }
                        $registryObject->unregister('check_to_syn' . $productId);
                        if (!$itemId) {
                            throw new \Exception(
                                __('Can\'t sync Product with SKU:%1 on Order to QBO', $sku)
                            );
                        }
                    }
                } else {
                    $productId = $item->getProductId();
                    $sku       = $item->getSku();
                    $qty       = $item->getQtyOrdered();
                    $total     = $item->getBaseRowTotal();
                    $price     = $qty > 0 ? $total / $qty : $item->getBasePrice();
                    $tax       = $item->getBaseTaxAmount() > 0;

                    $registryObject->unregister('check_to_syn' . $productId);
                    if ($productType == 'bundle') {
                        $priceType = $item->getProductOptionByCode('product_calculations');
                        if ($priceType == 0) {
                            $price = 0;
                            $total = 0;
                        }
                        $itemId = $this->_item->sync($productId);
                    } elseif (!empty($item->getProductOptions()['info_buyRequest']['options'])) {
                        $itemId = $this->_item->sync($item->getProductId());
                    } else {
                        $itemId = $this->_item->syncBySku($sku);
                    }
                    $registryObject->unregister('check_to_syn' . $productId);
                    if (!$itemId) {
                        throw new \Exception(
                            __('Can\'t sync Product with SKU:%1 on Order to QBO', $sku)
                        );
                    }
                }

                if ($this->config->getCountry() == 'FR') {
                    $lines[] = [
                        'LineNum'             => $i,
                        'Amount'              => $total,
                        'DetailType'          => 'SalesItemLineDetail',
                        'SalesItemLineDetail' => [
                            'ItemRef'    => ['value' => $itemId],
                            'UnitPrice'  => $price,
                            'Qty'        => $qty,
                            'TaxCodeRef' => ['value' => $this->taxSync->getFRProductTax($billCountry)]
                        ],
                    ];
                } elseif ($this->config->getCountry() == 'OTHER') {
                    $lines[] = [
                        'LineNum'             => $i,
                        'Amount'              => $total,
                        'DetailType'          => 'SalesItemLineDetail',
                        'SalesItemLineDetail' => [
                            'ItemRef'    => ['value' => $itemId],
                            'UnitPrice'  => $price,
                            'Qty'        => $qty,
                            'TaxCodeRef' => ['value' => $tax ? 'TAX' : 'NON'],
                        ],
                    ];
                } else {
                    $taxId   = $this->prepareTaxCodeRef($item->getItemId(), $model->getId());
                    $lines[] = [
                        'LineNum'             => $i,
                        'Amount'              => $total,
                        'DetailType'          => 'SalesItemLineDetail',
                        'SalesItemLineDetail' => [
                            'ItemRef'    => ['value' => $itemId],
                            'UnitPrice'  => $price,
                            'Qty'        => $qty,
                            'TaxCodeRef' => ['value' => !$tax ? $this->getTaxFreeId() : $taxId ?? $this->getTaxFreeId()]
                        ],
                    ];
                }

                $i++;
            }

            // set shipping fee
            if ($this->getIsShippingEnabled() == true) {
                $lineShipping = $this->prepareLineShippingFee($billCountry);
                if (!empty($lineShipping)) {
                    $lines[] = $lineShipping;
                }
            }

            // set discount
            $lines[] = $this->prepareLineDiscountAmount();

            return $lines;
        } catch (\Exception $exception) {
            throw new LocalizedException(
                __('Error when syncing products: %1', $exception->getMessage())
            );
        }
    }

    /**
     * @return mixed
     */
    public function getTaxFreeId()
    {
        $localId = $this->config->getTaxFree();

        return $this->tax->create()->loadbyTaxId($localId)->getQboId();
    }

    /**
     * @param $itemId
     * @param $orderId
     *
     * @return bool|int
     * @throws NoSuchEntityException
     */
    public function prepareTaxCodeRef($itemId, $orderId)
    {
        $modelTax = $this->orderTaxInterface->getOrderTaxDetails($orderId);
        foreach ($modelTax->getItems() as $taxDetailsItem) {
            if ($taxDetailsItem->getItemId() == $itemId) {
                foreach ($taxDetailsItem->getAppliedTaxes() as $taxCode => $unused) {
                    $tax     = $this->tax->create()->loadByCode($taxCode);
                    if ($tax->getQboId() && $tax->getQboId() > 0) {
                        return $tax->getQboId();
                    }
                    break;
                }
            }
        }

        return false;
    }

    /**
     * @param null $billCountry
     *
     * @return array
     * @throws LocalizedException
     */
    protected function prepareLineShippingFee($billCountry = null)
    {
        $model          = $this->getModel();
        $shippingAmount = $model->getBaseShippingAmount() ?? 0;
        if ($this->config->getCountry() == 'FR') {
            $lines = [
                'Amount'              => $shippingAmount,
                'DetailType'          => 'SalesItemLineDetail',
                'SalesItemLineDetail' => [
                    'ItemRef'    => ['value' => 'SHIPPING_ITEM_ID'],
                    'TaxCodeRef' => ['value' => $this->taxSync->getFRShippingTax($billCountry)],
                ],
            ];
        } elseif ($this->config->getCountry() != 'OTHER') {
            $taxItems = $this->taxItem->getTaxItemsByOrderId($model->getId());
            foreach ($taxItems as $key => $value) {
                if (isset($value['taxable_item_type']) && $value['taxable_item_type'] == 'shipping') {
                    $taxId     = $value['tax_id'];
                    $taxCodeId = $this->getTaxQBOIdFromTaxItem($taxId);
                    break;
                }
            }

            if ($shippingAmount == 0) {
                $taxCodeId = $this->getTaxFreeId();
            }

            $lines = [
                'Amount'              => $shippingAmount,
                'DetailType'          => 'SalesItemLineDetail',
                'SalesItemLineDetail' => [
                    'ItemRef'    => ['value' => 'SHIPPING_ITEM_ID'],
                    'TaxCodeRef' => ['value' => $taxCodeId ?? $this->config->getTaxShipping()],
                ],
            ];
        } else {
            $lines = [
                'Amount'              => $shippingAmount,
                'DetailType'          => 'SalesItemLineDetail',
                'SalesItemLineDetail' => [
                    'ItemRef' => ['value' => 'SHIPPING_ITEM_ID'],
                ],
            ];
        }

        return $lines;
    }

    /**
     * @return array
     */
    protected function prepareLineDiscountAmount()
    {
        $discountAmount       = $this->getModel()->getDiscountAmount();
        $discountCompensation = $this->getModel()->getDiscountTaxCompensationAmount();

        $amount = $discountAmount ? (-1 * $discountAmount - $discountCompensation) : 0;
        if ($this->getModel()->getData('mageworx_giftcards_amount')) {
            $amount -= $this->getModel()->getData('mageworx_giftcards_amount');
        }

        return [
            'Amount'             => $amount,
            'DetailType'         => 'DiscountLineDetail',
            'DiscountLineDetail' => [
                'PercentBased' => false,
            ]
        ];
    }


    /**
     * @param $id
     *
     * @return array
     * @throws LocalizedException
     */
    protected function checkOrder($id)
    {
        $prefix = $this->config->getPrefix('order');
        $name   = $prefix . $id;
        $query  = "SELECT Id, SyncToken, BillEmail FROM invoice WHERE DocNumber='{$name}'";

        return $this->query($query);
    }
}
