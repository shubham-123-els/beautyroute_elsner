<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\ResourceModel\Oauth;

/**
 * Class Collection
 * @package Magenest\QuickBooksOnline\Model\ResourceModel\Oauth
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magenest\QuickBooksOnline\Model\Oauth', 'Magenest\QuickBooksOnline\Model\ResourceModel\Oauth');
    }
}
