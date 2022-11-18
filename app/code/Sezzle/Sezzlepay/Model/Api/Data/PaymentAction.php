<?php
/*
 * @category    Sezzle
 * @package     Sezzle_Sezzlepay
 * @copyright   Copyright (c) Sezzle (https://www.sezzle.com/)
 */

namespace Sezzle\Sezzlepay\Model\Api\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Sezzle\Sezzlepay\Api\Data\AmountInterface;
use Sezzle\Sezzlepay\Api\Data\PaymentActionInterface;

class PaymentAction extends AbstractExtensibleObject implements PaymentActionInterface
{

    /**
     * @inheritDoc
     */
    public function getUuid()
    {
        $this->_get(self::UUID);
    }

    /**
     * @inheritDoc
     */
    public function setUuid($uuid)
    {
        $this->setData(self::UUID, $uuid);
    }

    /**
     * @inheritDoc
     */
    public function getAmount()
    {
        return $this->_get(self::AMOUNT);
    }

    /**
     * @inheritDoc
     */
    public function setAmount(AmountInterface $amount = null)
    {
        $this->setData(self::AMOUNT, $amount);
    }
}
