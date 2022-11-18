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
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\TableRateShipping\Controller\Adminhtml\AbstractMethod;
use Mageplaza\TableRateShipping\Helper\Data;

/**
 * Class Save
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class Save extends AbstractMethod
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        /** @var Http $request */
        $request = $this->getRequest();

        if ($data = $request->getPostValue()) {
            $object = $this->_initMethod();

            if ($objId = $this->getRequest()->getParam('method_id')) {
                $object->load($objId);
            }

            try {
                $this->media->uploadImage($data, 'image', '', $object->getImage());
            } catch (Exception $e) {
                $data['image'] = $data['image']['value'] ?? '';
            }

            foreach (['labels', 'comments'] as $item) {
                if (!empty($data[$item])) {
                    $data[$item] = Data::jsonEncode($data[$item]);
                }
            }

            foreach (['store_id', 'customer_group'] as $item) {
                $data[$item] = isset($data[$item]) ? implode(',', $data[$item]) : null;
            }

            $object->addData($data);

            try {
                $this->methodResource->save($object);

                $this->messageManager->addSuccessMessage(__('The method has been saved.'));

                $this->_session->setTableRateShippingData(false);

                if ($this->getRequest()->getParam('back', false)) {
                    return $this->_redirect('*/*/edit', ['id' => $object->getId(), '_current' => true]);
                }
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());

                $this->logger->critical($e);

                $this->_session->setTableRateShippingData($data);

                return $this->_redirect('*/*/edit', ['id' => $objId, '_current' => true]);
            }
        }

        return $this->_redirect('*/*/');
    }
}
