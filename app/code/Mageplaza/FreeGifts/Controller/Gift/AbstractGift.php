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
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Checkout\Model\Cart;
use Magento\Checkout\Model\Cart\RequestInfoFilterInterface;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\GroupedProduct\Model\Product\Type\Grouped;
use Mageplaza\FreeGifts\Helper\Gift as HelperGift;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;

/**
 * Class AbstractGift
 * @package Mageplaza\FreeGifts\Controller\Gift
 */
abstract class AbstractGift extends Action
{
    /**
     * @var HelperRule
     */
    protected $_helperRule;

    /**
     * @var Cart
     */
    protected $_cart;

    /**
     * @var Registry
     */
    protected $_registry;

    /**
     * @var Json
     */
    protected $_json;

    /**
     * @var CheckoutSession
     */
    protected $_checkoutSession;

    /**
     * @var StockRegistryInterface
     */
    protected $stockRegistry;

    /**
     * @var RequestInfoFilterInterface
     */
    protected $requestInfoFilter;

    /**
     * AbstractGift constructor.
     *
     * @param Context $context
     * @param HelperRule $helperRule
     * @param Cart $cart
     * @param Registry $registry
     * @param CheckoutSession $checkoutSession
     * @param Json $json
     * @param StockRegistryInterface $stockRegistry
     * @param RequestInfoFilterInterface $requestInfoFilter
     */
    public function __construct(
        Context $context,
        HelperRule $helperRule,
        Cart $cart,
        Registry $registry,
        CheckoutSession $checkoutSession,
        Json $json,
        StockRegistryInterface $stockRegistry,
        RequestInfoFilterInterface $requestInfoFilter
    ) {
        $this->_helperRule       = $helperRule;
        $this->_cart             = $cart;
        $this->_registry         = $registry;
        $this->_json             = $json;
        $this->_checkoutSession  = $checkoutSession;
        $this->stockRegistry     = $stockRegistry;
        $this->requestInfoFilter = $requestInfoFilter;

        parent::__construct($context);
    }

    /**
     * @param string $message
     *
     * @return Json
     */
    public function errorMessage($message)
    {
        return $this->_json->setData(['error' => true, 'message' => $message]);
    }

    /**
     * @return array
     */
    public function getRequestParams()
    {
        $params = $this->getRequest()->getParams();
        $data   = [
            'gift_id'           => (int) $params['gift_id'],
            'rule_id'           => (int) $params['rule_id'],
            'qty'               => isset($params['qty']) ? (int) $params['qty'] : 0,
            'is_remove_grouped' => (isset($params['is_remove_grouped']) && $params['is_remove_grouped'] !== 'false')
                ? (bool) $params['is_remove_grouped'] : false,
            'super_group'       => isset($params['super_group']) ? $params['super_group'] : []
        ];

        if (isset($params['super_attribute'])) {
            $data['super_attribute'] = $params['super_attribute'];
        }

        return $data;
    }

    /**
     * @param array $gifts
     * @param int $giftId
     *
     * @return mixed
     */
    public function removeDeletedGift($gifts, $giftId)
    {
        foreach ($gifts as $index => $deleteGift) {
            if ($giftId === (int) $deleteGift) {
                unset($gifts[$index]);
            }
        }

        return $gifts;
    }

    /**
     * @return HelperGift
     */
    public function getHelperGift()
    {
        return $this->_helperRule->getHelperGift();
    }

    /**
     * @return Json
     * @throws NoSuchEntityException
     */
    public function addGift()
    {
        $ruleId = (int) $this->getRequest()->getParam('rule_id');
        $giftId = (int) $this->getRequest()->getParam('gift_id');
        $gift   = $this->getHelperGift()->getProductById($giftId);

        if ($gift->getTypeId() === Grouped::TYPE_CODE) {
            $result = $this->processGroup($gift, $ruleId);
            if ($result['success']) {
                return $this->_json->setData(['success' => true]);
            } else {
                return $this->errorMessage($result['message']);
            }
        }

        if ($this->getHelperGift()->isGiftAdded($giftId)) {
            return $this->errorMessage(__('This gift is already added.'));
        }
        if ($this->getHelperGift()->isMaxGift($ruleId)) {
            return $this->errorMessage(__('Maximum number of gifts added.'));
        }
        if (!$this->getHelperGift()->isGiftInStock($giftId)) {
            return $this->errorMessage(__('This gift is currently out of stock.'));
        }
        if ($links = $this->getHelperGift()->requireLinks($gift)) {
            $giftParams['links'] = $links;
        }

        $giftParams['product']                  = $gift->getId();
        $giftParams[HelperRule::OPTION_RULE_ID] = $ruleId;
        $gift->addCustomOption(HelperRule::QUOTE_RULE_ID, $ruleId);
        $this->getRequest()->setParams($giftParams);

        $deletedGifts = $this->_checkoutSession->getFreeGiftsDeleted();
        if (isset($deletedGifts[$ruleId])) {
            $deletedGifts[$ruleId] = $this->removeDeletedGift($deletedGifts[$ruleId], $giftId);
        }
        $this->_checkoutSession->setFreeGiftsDeleted($deletedGifts);

        try {
            $this->_cart->addProduct($gift, $this->getRequest()->getParams());
            $this->_cart->save();

            return $this->_json->setData(['success' => true]);
        } catch (Exception $e) {
            return $this->errorMessage($e->getMessage());
        }
    }

    /**
     * @param Product $gift
     * @param int $ruleId
     *
     * @return array
     */
    public function processGroup($gift, $ruleId)
    {
        try {
            $params = $this->getRequest()->getParams();
            if (!isset($params['super_group'])) {
                return ['success' => false, 'message' => __('Please choose the products.')];
            }

            $countProduct = count($params['super_group']);
            $superGroup   = [];
            foreach ($params as $key => $param) {
                if ($key === 'super_group_qty') {
                    foreach ($param as $k => $par) {
                        $superGroup[$k] = array_key_exists($k, $params['super_group']) ? $params['super_group'][$k] : 0;
                    }
                }
            }

            $params['super_group'] = $superGroup;
            $request               = $this->getQtyRequest($gift, $params);
            $cartCandidates        = $gift->getTypeInstance()->prepareForCartAdvanced(
                $request,
                $gift,
                AbstractType::PROCESS_MODE_FULL
            );

            $countGroupProducts = count($cartCandidates);
            if ($this->_helperRule->getHelperData()->getConfigGeneral(
                'multi_free_gifts',
                $this->_helperRule->getHelperData()->getStoreId()
            )) {
                $countGroupProducts = array_sum($params['super_group']);
            }

            if ($this->getHelperGift()->isMaxGift($ruleId, null, $countGroupProducts)) {
                return ['success' => false, 'message' => __('Maximum number of gifts added.')];
            }

            foreach ($cartCandidates as $candidate) {
                $giftId = $candidate->getId();
                if ($links = $this->getHelperGift()->requireLinks($candidate)) {
                    $giftParams['links'] = $links;
                }

                $giftParams['product']                  = $candidate->getId();
                $giftParams['gift_id']                  = $candidate->getId();
                $giftParams['qty']                      = $params['super_group'][$candidate->getId()];
                $giftParams[HelperRule::OPTION_RULE_ID] = $ruleId;
                $candidate->addCustomOption(HelperRule::QUOTE_RULE_ID, $ruleId);
                $candidate->addCustomOption('count_product', $countProduct);
                $this->getRequest()->setParams($giftParams);

                $deletedGifts = $this->_checkoutSession->getFreeGiftsDeleted();
                if (isset($deletedGifts[$ruleId])) {
                    $deletedGifts[$ruleId] = $this->removeDeletedGift($deletedGifts[$ruleId], $giftId);
                }
                $this->_checkoutSession->setFreeGiftsDeleted($deletedGifts);
                $this->_cart->addProduct($candidate, $this->getRequest()->getParams());
            }
            $this->_cart->save();

            return ['success' => true];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    /**
     * Get request quantity
     *
     * @param Product $product
     * @param DataObject|int|array $request
     *
     * @return int|DataObject
     * @throws LocalizedException
     */
    private function getQtyRequest($product, $request = 0)
    {
        $request    = $this->_getProductRequest($request);
        $stockItem  = $this->stockRegistry->getStockItem($product->getId(), $product->getStore()->getWebsiteId());
        $minimumQty = $stockItem->getMinSaleQty();
        if ($minimumQty
            && $minimumQty > 0
            && !$request->getQty()
        ) {
            $request->setQty($minimumQty);
        }

        return $request;
    }

    /**
     * Get request for product add to cart procedure
     *
     * @param DataObject|int|array $requestInfo
     *
     * @return  DataObject
     * @throws LocalizedException
     */
    protected function _getProductRequest($requestInfo)
    {
        if ($requestInfo instanceof DataObject) {
            $request = $requestInfo;
        } elseif (is_numeric($requestInfo)) {
            $request = new DataObject(['qty' => $requestInfo]);
        } elseif (is_array($requestInfo)) {
            $request = new DataObject($requestInfo);
        } else {
            throw new LocalizedException(
                __('We found an invalid request for adding product to quote.')
            );
        }
        $this->requestInfoFilter->filter($request);

        return $request;
    }
}
