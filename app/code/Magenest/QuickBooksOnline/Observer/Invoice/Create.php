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
namespace Magenest\QuickBooksOnline\Observer\Invoice;

use Magenest\QuickBooksOnline\Observer\AbstractObserver;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface as ObserverInterface;
use Magenest\QuickBooksOnline\Model\Synchronization\Invoice;
use Magento\Framework\Message\ManagerInterface;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Framework\App\ObjectManager;

/**
 * Class Create
 */
class Create extends AbstractObserver implements ObserverInterface
{
    /**
     * @var Invoice
     */
    protected $_invoice;

    /**
     * Create constructor.
     *
     * @param ManagerInterface $messageManager
     * @param Config $config
     * @param QueueFactory $queueFactory
     * @param Invoice $invoice
     */
    public function __construct(
        ManagerInterface $messageManager,
        Config $config,
        QueueFactory $queueFactory,
        Invoice $invoice
    ) {
        parent::__construct($messageManager, $config, $queueFactory);
        $this->_invoice = $invoice;
        $this->type = 'invoice';
    }

    /**
     * Dispatch when Invoice created
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->isConnected() && $this->isConnected() == 1) {
            try {
                /** @var \Magento\Sales\Model\Order\Invoice $invoice */
                $invoice = $observer->getEvent()->getInvoice();
                $note = $invoice->getCustomerNote();
                if ($note != 'quickbook') {
                    $incrementId = $invoice->getIncrementId();
                    if ($incrementId && $this->isEnabled() && !$invoice->getIsUsedForRefund()) {
                        if ($this->isImmediatelyMode()) {
                            $qboId = $this->_invoice->sync($incrementId);
                            /**
                             * @var \Magento\Backend\Model\Auth\Session $adminSession
                             */
                            $adminSession = ObjectManager::getInstance()->get('\Magento\Backend\Model\Auth\Session');
                            $isAdminPage  = $adminSession->isLoggedIn();
                            if ($qboId && $isAdminPage) {
                                $this->messageManager->addSuccessMessage(__('Successfully updated this Invoice(Id: %1) in QuickBooksOnline.', $qboId));
                            }
                        } else {
                            $this->addToQueue($incrementId);
                        }
                    }
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
    }
}
