<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\ResourceModel;

/**
 * Class Prepare
 * @package Magenest\QuickBooksOnline\Model\ResourceModel
 */
class Prepare extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magenest_qbonline_prepare', 'entity_id');
    }//end _construct()
}//end class
