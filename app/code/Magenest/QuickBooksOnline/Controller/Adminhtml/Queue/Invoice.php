<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\Invoice\CollectionFactory;
use Magento\Backend\App\Action\Context;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Ui\Component\MassAction\Filter;

/**
 * Class Invoice
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class Invoice extends AbstractQueue
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var QueueCollectionFactory
     */
    protected $queueCollectionFactory;

    /**
     * Order constructor.
     *
     * @param Context $context
     * @param QueueFactory $queueFactory
     * @param Filter $filter
     * @param QueueCollectionFactory $queueCollection
     * @param CollectionFactory $collectionFactory
     */

    public function __construct(Context $context, QueueFactory $queueFactory, Filter $filter, QueueCollectionFactory $queueCollection, CollectionFactory $collectionFactory)
    {
        parent::__construct($context, $queueFactory, $filter, $queueCollection);
        $this->collectionFactory = $collectionFactory;
        $this->filter = $filter;
        $this->queueCollectionFactory = $queueCollection;
    }
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $collections = [];
        $flag = 0;
        try {

            if (isset($this->getRequest()->getParams()['filters'])) {
                $flag = 1;
                $listIdInvoiceSelected = [];
                $invoiceSelected = $this->filter->getCollection($this->collectionFactory->create());
                foreach ($invoiceSelected as $invoice) {
                    $listIdInvoiceSelected[] = $invoice->getIncrementId();
                    $collections[] = $invoice;
                }
                /**
                 * remove invoice duplicate to display in queue
                 */
                try {
                    $listQueue = $this->queueCollectionFactory->create()->addFieldToFilter('type', 'invoice')->addFieldToFilter('type_id', ['in' => $listIdInvoiceSelected]);
                    $listQueue->walk('delete');
                } catch (\Exception $e) {
                    $this->messageManager->addErrorMessage(__('Something went wrong while adding invoices to queue. Please try again later.'));
                }
            } else {
                try {
                    $qbOnlineQueueItemCollection = $this->queueCollectionFactory->create()
                        ->addFieldToFilter('type', 'invoice');
                    $qbOnlineQueueItemCollection->walk('delete');
                } catch (\Exception $e) {
                }
                $from = $this->getRequest()->getParam('from');
                $to = $this->getRequest()->getParam('to');
                if (empty($from)) {
                    $from = '2000-01-01';
                }
                if (empty($to)) {
                    $to = '2099-01-01';
                }

                $from = $from . ' 00:00:00';
                $to = $to . ' 23:59:59';

                $collections = $this->collectionFactory->create()
                    ->addFieldToFilter('created_at', ['gteq' => $from])
                    ->addFieldToFilter('created_at', ['lteq' => $to]);
            }
            $i = 0;
            /** @var \Magento\Sales\Model\Order\Invoice $invoice */
            foreach ($collections as $invoice) {
                $this->addToQueue($invoice->getIncrementId(), 'invoice');
                $i++;
            }
            $this->messageManager->addSuccessMessage(__('%1 invoice(s) have been added to the queue.', $i));
            if ($flag) {
                $this->_redirect('*/*/');
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while adding invoices to queue. Please try again later.'));
        }
    }
}
