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

/**
 * Class Prepare
 * @package Magenest\QuickBooksOnline\Model
 */
class Prepare extends \Magento\Framework\Model\AbstractModel
{

    /**
     * Initize
     */
    public function _construct()
    {
        $this->_init('Magenest\QuickBooksOnline\Model\ResourceModel\Prepare');
    }
}
