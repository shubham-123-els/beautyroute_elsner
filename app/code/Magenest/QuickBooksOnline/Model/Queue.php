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
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;

/**
 * Class Queue
 *
 * @package Magenest\QuickBooksOnline\Model
 * @method int getQueueId()
 * @method string getType()
 * @method string getTypeId()
 * @method string getStatus()
 * @method string getOperation()
 * @method int getCompanyId()
 * @method int getWebsiteId()
 * @method string getEnqueueTime()
 * @method int getPriority()
 * @method string getMsg()
 * @method setPriority(int $priority)
 * @method setEnqueueTime(int $time)
 */
class Queue extends AbstractModel
{

    /**
     * Queue constructor.
     * @param Context $context
     * @param Registry $registry
     * @param AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize
     */
    public function _construct()
    {
        $this->_init(ResourceModel\Queue::class);
    }

    /**
     * @return $this
     */
    public function beforeSave()
    {
        if (!$this->getId()) {
            $this->setEnqueueTime(time());
        }
        $type = $this->getType();
        $this->setPriorityByType($type);

        return parent::beforeSave();
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setPriorityByType($type)
    {
        switch ($type) {
            case 'customer':
                $priority = 1;
                break;
            case 'item':
                $priority = 2;
                break;
            default:
                $priority = 3;
                break;
        }

        $this->setPriority($priority);

        return $this;
    }
}
