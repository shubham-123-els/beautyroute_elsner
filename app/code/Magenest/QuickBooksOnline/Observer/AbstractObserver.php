<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details. *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 * @category  Magenest
 * @package   Magenest_QuickBooksOnline
 * @author    Magenest JSC
 */

namespace Magenest\QuickBooksOnline\Observer;

use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Framework\Exception\NotFoundException;
use Magenest\QuickBooksOnline\Model\Config\Source\SyncMode;

/**
 * Class AbstractObserver
 * @package Magenest\QuickBooksOnline\Observer
 */
abstract class AbstractObserver
{
    /**
     * @var ManagerInterface
     */
    protected $messageManager;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var QueueFactory
     */
    protected $queueFactory;

    /**
     * @var string
     */
    protected $type;

    /**
     * AbstractObserver constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory
    ) {
        $this->queueFactory   = $queueFactory;
        $this->config         = $config;
        $this->messageManager = $messageManager;
    }

    /**
     * Check enable
     * @return mixed
     * @throws NotFoundException
     */
    public function isEnabled()
    {
        if ($this->type === null) {
            throw new NotFoundException(__('You did\'t set type variable!'));
        }

        return $this->config->isEnableByType($this->type);
    }

    /**
     * @param null $type
     *
     * @return bool
     */
    public function isImmediatelyMode($type = null)
    {
        if ($this->getMode($type) == SyncMode::SYNC_MODE_IMMEDIATELY) {
            return true;
        }

        return false;
    }

    /**
     * @param null $type
     *
     * @return mixed
     */
    public function getMode($type = null)
    {
        return $this->config->getSyncModeByType($type ?? $this->type);
    }

    /**
     * Add to queue
     *
     * @param $id
     */
    public function addToQueue($id)
    {
        $collection = $this->queueFactory->create()->getCollection();
        $data       = [
            'type'    => $this->type,
            'type_id' => $id
        ];
        /** @var \Magento\Framework\Model\AbstractModel $model */
        $model = $collection->addFieldToFilter('type', $this->type)
            ->addFieldToFilter('type_id', $id)
            ->getFirstItem();

        $model->addData($data);
        $model->save();
    }

    /**
     * @return mixed
     */
    public function isConnected()
    {
        return $this->config->getConnected();
    }
}
