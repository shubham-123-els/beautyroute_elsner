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

namespace Mageplaza\TableRateShipping\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Rate
 * @package Mageplaza\TableRateShipping\Model
 * @method getName()
 * @method getProductFixedRate()
 * @method getProductPercentageRate()
 * @method getWeightFixedRate()
 * @method getOrderFixedRate()
 * @method getDelivery()
 * @method getCountryId()
 * @method getRegion()
 * @method getPostcodeFrom()
 * @method getPostcodeTo()
 * @method getWeightFrom()
 * @method getWeightTo()
 * @method getSubtotalFrom()
 * @method getSubtotalTo()
 * @method getQtyFrom()
 * @method getQtyTo()
 * @method setMethodId($value)
 * @method getPostcodeRange()
 * @method getShippingGroup()
 */
class Rate extends AbstractModel
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Rate::class);
    }

    /**
     * @param array $cartData
     *
     * @return float
     */
    public function calculatePrice($cartData)
    {
        $price = $this->getOrderFixedRate();
        $price += $this->getProductPercentageRate() / 100 * $cartData['subtotal'];
        $price += $this->getProductFixedRate() * $cartData['qty'];
        $price += $this->getWeightFixedRate() * $cartData['weight'];

        return $price;
    }
}
