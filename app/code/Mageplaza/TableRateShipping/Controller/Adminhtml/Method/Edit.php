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

use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Edit
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class Edit extends AbstractMethod
{
    /**
     * @return Page|ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $object = $this->_initMethod();
        $objId  = $this->getRequest()->getParam('id');

        if ($objId !== null && $object->getData() === null) {
            $this->messageManager->addErrorMessage(__('This method no longer exists.'));

            return $this->_redirect('*/*/');
        }

        // restore form data
        $data = $this->_session->getTableRateShippingData(true);
        if (!empty($data)) {
            $object->addData($data);
        }

        $this->registry->register(RegistryConstants::METHOD, $object);

        if ($object) {
            $objName    = $object->getName();
            $pageTitle  = $objId !== null ? __('Edit Method "%1"', $objName) : __('Create New Method');
            $resultPage = $this->_initAction();
            $resultPage->getConfig()->getTitle()->prepend($pageTitle);

            return $resultPage;
        }

        return $this->_redirect('*/*/');
    }
}
