<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

use Magenest\QuickBooksOnline\Controller\Adminhtml\AbstractQueue;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue as QueueResourceModel;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;

/**
 * Class Customer
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class Customer extends AbstractQueue
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
     * @var QueueResourceModel
     */
    protected $queueResourceModel;

    /**
     * @var QueueFactory
     */
    protected $queueFactory;

    /**
     * @var QueueCollection
     */
    protected $queueCollection;

    /**
     * Customer constructor.
     *
     * @param Context $context
     * @param QueueFactory $queueFactory
     * @param QueueResourceModel $queueResourceModel
     * @param CollectionFactory $collectionFactory
     * @param Filter $filter
     * @param QueueCollection $queueCollection
     */
    public function __construct(Context $context, QueueFactory $queueFactory, Filter $filter, QueueCollectionFactory $queueCollection, CollectionFactory $collectionFactory)
    {
        parent::__construct($context, $queueFactory, $filter, $queueCollection);
        $this->collectionFactory = $collectionFactory;
        $this->filter = $filter;
        $this->queueFactory = $queueFactory;
        $this->queueCollection = $queueCollection;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $collections = [];
        $flag = 0;

        try {
            /**
             * remove customer duplicate to display in queue
             */
            $listIdCustomerSelected = [];
            if (isset($this->getRequest()->getParams()['filters'])) {
                $flag = 1;
                $customerSelected = $this->filter->getCollection($this->collectionFactory->create());
                foreach ($customerSelected as $customer) {
                    $listIdCustomerSelected[] = $customer->getId();
                    $collections[] = $customer;
                }
                try {
                    $listQueue = $this->queueCollection->create()->addFieldToFilter('type', 'customer')->addFieldToFilter('type_id', ['in' => $listIdCustomerSelected]);
                    $listQueue->walk('delete');
                } catch (\Exception $e) {
                    $this->messageManager->addErrorMessage(__('Something went wrong while adding customers to queue. Please try again later.'));
                }

            } else {
                try {
                    $qbOnlineQueueCustomerCollection = $this->queueCollection->create()
                        ->addFieldToFilter('type', 'customer');
                    $qbOnlineQueueCustomerCollection->walk('delete');
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
                    ->addFieldToFilter('updated_at', ['gteq' => $from])
                    ->addFieldToFilter('updated_at', ['lteq' => $to]);
            }
            $i = 0;
            /** @var \Magento\Customer\Model\Customer $customer */
            foreach ($collections as $customer) {
                $this->addToQueue($customer->getId(), 'customer');
                $i++;
            }
            $this->messageManager->addSuccessMessage(__('%1 customers have been added to the queue', $i));
            if ($flag) {
                $this->_redirect("*/*/");
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while adding customers to queue. Please try again later.'));
        }
    }
}
