<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;

/**
 * Class Customer
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class Item extends AbstractQueue
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
    protected $queueCollection;

    /**
     * Customer constructor.
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
            $listIdProductSelected= [];
            if (isset($this->getRequest()->getParams()['filters'])) {
                $flag=1;
                $productSelected = $this->filter->getCollection($this->collectionFactory->create());
                foreach ($productSelected as $product) {
                    $listIdProductSelected[] = $product->getId();
                    $collections[] = $product;
                }
                /**
                 * remove product duplicate to display in queue
                 */
                try {
                    $listQueue =  $this->queueCollection->create()->addFieldToFilter('type', 'item')->addFieldToFilter('type_id', ['in'=>$listIdProductSelected]);
                    $listQueue->walk('delete');
                } catch (\Exception $e) {
                    $this->messageManager->addErrorMessage(__('Something went wrong while adding products to queue. Please try again later.'));
                }
            } else {
                /**
                 * remove product duplicate to display in queue
                 */
                try {
                    $qbOnlineQueueItemCollection = $this->queueCollection->create()
                        ->addFieldToFilter('type', 'item');
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
                    ->addFieldToFilter('updated_at', ['gteq' => $from])
                    ->addFieldToFilter('updated_at', ['lteq' => $to]);
            }
            $i = 0;
            /** @var \Magento\Catalog\Model\Product $product */
            foreach ($collections as $product) {
                if ($product->getTypeId() != 'grouped') {
                    $this->addToQueue($product->getId(), 'item');
                    $i++;
                }
            }
            $this->messageManager->addSuccessMessage(__('%1 products have been added to the queue', $i));
            if ($flag) {
                $this->_redirect('*/*/');
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while adding products to queue. Please try again later.'));
        }
    }
}
