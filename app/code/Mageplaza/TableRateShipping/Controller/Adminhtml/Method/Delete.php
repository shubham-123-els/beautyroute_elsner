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
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;

/**
 * Class Delete
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class Delete extends AbstractMethod
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        if ($objId = $this->getRequest()->getParam('id')) {
            try {
                $this->methodResource->delete($this->_initMethod());

                $this->messageManager->addSuccessMessage(__('The method has been deleted.'));

                return $this->_redirect('*/*/');
            } catch (Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('We can\'t delete the method right now.'));

                $this->logger->critical($e);

                return $this->_redirect('*/*/edit', ['id' => $objId, '_current' => true]);
            }
        }

        $this->messageManager->addErrorMessage(__('We can\'t find a method to delete.'));

        return $this->_redirect('*/*/');
    }
}
