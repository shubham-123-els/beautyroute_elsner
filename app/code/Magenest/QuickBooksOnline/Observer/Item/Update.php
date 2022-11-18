<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */

namespace Magenest\QuickBooksOnline\Observer\Item;

use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\Item;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Framework\Registry;

/**
 * Class Update
 */
class Update extends AbstractObserver implements ObserverInterface
{
    /**
     * @var Item
     */
    protected $_item;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * Update constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     * @param Item $item
     * @param Registry $registry
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        Item $item,
        Registry $registry
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->_item    = $item;
        $this->type     = 'item';
        $this->registry = $registry;
    }

    /**
     * Admin save a Product
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var \Magento\Catalog\Model\Product $product */
                $product = $observer->getEvent()->getProduct();
                /** @var \Magento\Framework\Registry $registryObject */
                $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');
                if ($product->getIsDuplicate()) {
                    $registryObject->register('is_duplicate', true);
                }
                $id = $product->getId();
                if ($id && $this->isEnabled() && $product->getTypeId() != 'grouped') {
                    if ($this->isImmediatelyMode()) {
                        if ($registryObject->registry('check_to_syn') == null) {
                            if ($product->getTypeId() == 'configurable') {
                                $this->_item->sync($id, true);
                                $arrId = $this->registry->registry('arr_id' . $id);
                                if (!empty($arrId)) {
                                    foreach ($arrId as $qboId) {
                                        $this->messageManager->addSuccessMessage(
                                            __('Successfully updated this product (Id: %1) in QuickBooksOnline.', $qboId)
                                        );
                                    }
//                                    $this->registry->unregister('arr_id' . $id);
                                }
                            } else {
                                $qboId = $this->_item->sync($id, true);
                                if ($qboId) {
                                    $this->messageManager->addSuccessMessage(
                                        __('Successfully updated this product (Id: %1) in QuickBooksOnline.', $qboId)
                                    );
                                }
                            }
                        }
                    } else {
                        $this->addToQueue($id);
                    }
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
    }
}
