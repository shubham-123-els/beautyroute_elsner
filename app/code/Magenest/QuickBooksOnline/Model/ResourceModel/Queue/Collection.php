<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Model\ResourceModel\Queue;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magenest\QuickBooksOnline\Model\Queue as QueueModel;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue as QueueResourceModel;

/**
 * Class Collection
 * @package Magenest\QuickBooksOnline\Model\ResourceModel\Queue
 */
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(QueueModel::class, QueueResourceModel::class);
        $this->_setIdFieldName('queue_id');
    }
}
