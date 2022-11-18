<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Tax
 *
 * @package Magenest\QuickBooksOnline\Model
 *
 * @method int getEntityId()
 * @method int getTaxId()
 * @method string getTaxCode()
 * @method int getRate()
 * @method int getQboId()
 * @method int getTaxRateValue()
 * @method string getTaxRateName()
 */
class Tax extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magenest\QuickBooksOnline\Model\ResourceModel\Tax');
    }

    /**
     * Load By Tax  Code
     *
     * @param $id
     * @return $this
     */
    public function loadByCode($code)
    {
        return $this->load($code, 'tax_code');
    }

    public function loadbyTaxId($taxId)
    {
        return $this->load($taxId, 'tax_id');
    }
}
