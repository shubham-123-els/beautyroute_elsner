<?php

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue;

/**
 * Class MassSync
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Queue
 */
class MassSync extends Sync
{
    public function execute()
    {
        $connect = $this->config->getConnected();
        if ($connect && $connect == 1) {
            $processed = $this->syncQueue();
            $this->messageManager->addSuccessMessage(__('A total of %1 records are processed', $processed));
        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online. Please go to Configuration to finish the connection.'));
        }

        return $this->_redirect('*/*/index');
    }

    /**
     * @return \Magenest\QuickBooksOnline\Model\ResourceModel\Queue\Collection|\Magento\Framework\Data\Collection\AbstractDb
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getQueueCollection()
    {
        return $this->filter->getCollection(parent::getQueueCollection());
    }
}
