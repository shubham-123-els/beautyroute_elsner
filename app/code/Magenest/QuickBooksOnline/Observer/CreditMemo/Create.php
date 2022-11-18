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
namespace Magenest\QuickBooksOnline\Observer\CreditMemo;

use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface as ObserverInterface;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo;

/**
 * Class Create
 *
 * @package Magenest\QuickBooksOnline\Observer\CreditMemo
 */
class Create extends AbstractObserver implements ObserverInterface
{
    /**
     * @var Creditmemo
     */
    protected $creditmemo;

    /**
     * Create constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     * @param Creditmemo $creditmemo
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        Creditmemo $creditmemo
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->creditmemo = $creditmemo;
        $this->type = 'creditmemo';
    }

    /**
     * Dispatch when Credit created
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var \Magento\Sales\Model\Order\Creditmemo $creditMemo */
                $creditMemo = $observer->getEvent()->getCreditmemo();
                $id = (string)$creditMemo->getIncrementId();


                if ($id && $this->isEnabled()) {
                    if ($this->isImmediatelyMode()) {
                        $qboId = $this->creditmemo->sync($id, $creditMemo->getAllItems());
                        if ($qboId) {
                            $this->messageManager->addSuccessMessage(__('Successfully updated this Credit Memo(Id: %1) in QuickBooksOnline.', $qboId));
                        }
                        ;
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
