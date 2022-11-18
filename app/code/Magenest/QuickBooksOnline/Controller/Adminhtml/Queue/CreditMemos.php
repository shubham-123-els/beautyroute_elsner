<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\Creditmemo\CollectionFactory;
use Magento\Backend\App\Action\Context;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Ui\Component\MassAction\Filter;

/**
 * Class CreditMemos
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class CreditMemos extends AbstractQueue
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
     * @var Filter
     */
    protected $queueCollection;


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
        $this->filter            = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->queueCollection = $queueCollection;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $collections=[];
        $flag= 0;

        try {
            if (isset($this->getRequest()->getParams()['filters'])) {
                $flag=1;
                $creditMemosSelected = $this->filter->getCollection($this->collectionFactory->create());
                $listIdCreditMemoSelected = [];
                foreach ($creditMemosSelected as $creditMemo) {
                    $listIdCreditMemoSelected[]=$creditMemo->getIncrementId();
                    $collections[] = $creditMemo;
                }
                /**
                 * remove creditmemo duplicate to display in queue
                 */
                try {

                    $listQueue =  $this->queueCollection->create()->addFieldToFilter('type', 'creditmemo')->addFieldToFilter('type_id', ['in'=>$listIdCreditMemoSelected]);
                    $listQueue->walk('delete');
                } catch (\Exception $e) {
                    $this->messageManager->addErrorMessage(__('Something went wrong while adding credit memo to queue. Please try again later.'));
                }
            } else {
                /**
                 * remove creditmemo duplicate to display in queue
                 */
                try {
                    $qbOnlineQueueItemCollection = $this->queueCollection->create()
                        ->addFieldToFilter('type', 'creditmemo');
                    $qbOnlineQueueItemCollection->walk('delete');
                } catch (\Exception $e) {
                }

                $from = $this->getRequest()->getParam('from');
                $to   = $this->getRequest()->getParam('to');
                if (empty($from)) {
                    $from = '2000-01-01';
                }
                if (empty($to)) {
                    $to = '2099-01-01';
                }

                $from = $from . ' 00:00:00';
                $to   = $to . ' 23:59:59';

                $collections = $this->collectionFactory->create()
                    ->addFieldToFilter('created_at', ['gteq' => $from])
                    ->addFieldToFilter('created_at', ['lteq' => $to]);
            }
            $i = 0;
            /** @var \Magento\Sales\Model\Order\Creditmemo $creditmemo */
            foreach ($collections as $creditmemo) {
                $this->addToQueue($creditmemo->getIncrementId(), 'creditmemo');
                $i++;
            }
            $this->messageManager->addSuccessMessage(__('%1 credit memo(s) have been added to the queue.', $i));
            if ($flag) {
                $this->_redirect("*/*/");
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while adding credit memo to queue. Please try again later.'));
        }

        return;
    }
}
