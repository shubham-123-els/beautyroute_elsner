<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\QuickBooksOnline\Model\QueueFactory;
use Magento\Ui\Component\MassAction\Filter;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;

/**
 * Class AbstractQueue
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml
 */
abstract class AbstractQueue extends Action
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var QueueCollectionFactory
     */
    protected $queueCollection;

    /**
     * @var QueueFactory
     */
    protected $queueFactory;

    /**
     * Queue constructor.
     *
     * @param Context $context
     * @param QueueFactory $queueFactory
     * @param Filter $filter
     * @param QueueCollectionFactory $queueCollection
     */
    public function __construct(
        Context $context,
        QueueFactory $queueFactory,
        Filter $filter,
        QueueCollectionFactory $queueCollection
    ) {
        $this->filter          = $filter;
        $this->queueCollection = $queueCollection;
        $this->queueFactory    = $queueFactory;
        parent::__construct($context);
    }

    /**
     * Init actions
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function _initAction()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magenest_QuickBooksOnline::queue')
            ->addBreadcrumb(__('List Queue'), __('List Queue'));
        $resultPage->getConfig()->getTitle()->set(__('List Queue'));

        return $resultPage;
    }

    /**
     * Add to Queue
     *
     * @param $id
     * @param $type
     */
    public function addToQueue($id, $type)
    {
        $model = $this->queueFactory->create();
        $data  = [
            'type'    => $type,
            'type_id' => $id
        ];

        $model->addData($data);
        $model->save();
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_QuickBooksOnline::queue');
    }
}
