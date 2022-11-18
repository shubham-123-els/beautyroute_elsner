<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Method;

use Exception;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Exception\LocalizedException;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Model\Method;

/**
 * Class MassStatus
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class MassStatus extends AbstractMethod
{
    /**
     * @return ResponseInterface
     * @throws LocalizedException
     */
    public function execute()
    {
        $collection = $this->filter->getCollection($this->methodFactory->create()->getCollection());
        $status     = (int) $this->getRequest()->getParam('status');
        $count      = 0;

        /** @var Method $item */
        foreach ($collection->getItems() as $item) {
            try {
                $item->setStatus($status);
                $this->methodResource->save($item);
                $count++;
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage(__('Something went wrong while updating the record(s) status.'));

                $this->logger->critical($e);
            }
        }

        $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been updated.', $count));

        return $this->_redirect('*/*/');
    }
}
