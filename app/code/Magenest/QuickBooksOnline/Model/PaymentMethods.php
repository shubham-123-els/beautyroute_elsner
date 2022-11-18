<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */
namespace Magenest\QuickBooksOnline\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class PaymentMethod
 *
 * @package Magenest\QuickBooksOnline\Model
 * @method int getSyncToken()
 * @method int getQboId()
 * @method int getDepositAccount()
 * @method string getTitle()
 * @method PaymentMethods setTitle(string $title)
 * @method PaymentMethods setPaymentCode(string $code)
 * @method PaymentMethods setQboId(int $id)
 * @method PaymentMethods setSyncToken(int $syncToken)
 */
class PaymentMethods extends AbstractModel
{
    /**
     * Initize
     */
    public function _construct()
    {
        $this->_init('Magenest\QuickBooksOnline\Model\ResourceModel\PaymentMethods');
    }

    /**
     * Load By Payment code
     *
     * @param $id
     * @return $this
     */
    public function loadByCode($id)
    {
        return $this->load($id, 'payment_code');
    }
}
