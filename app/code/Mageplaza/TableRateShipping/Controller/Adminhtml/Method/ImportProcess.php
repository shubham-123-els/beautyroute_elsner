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

/**
 * Class ImportProcess
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class ImportProcess extends RateForm
{
    /**
     * @return void
     */
    public function execute()
    {
        /** @var Http $request */
        $request = $this->getRequest();

        $data = $request->getPostValue();

        if (empty($data['rates']) || !$this->getRequest()->isAjax()) {
            $this->_forward('noroute');

            return;
        }

        $methodId = $request->getParam('id');
        $count    = 0;
        foreach ($data['rates'] as $rateId) {
            $rateData = $this->_initRate()->load($rateId)->getData();

            unset($rateData['rate_id']);

            $rateData['method_id'] = $methodId;

            try {
                $this->rateResource->save($this->_initRate()->setData($rateData));

                $count++;
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }

        if ($count) {
            $this->messageManager->addSuccessMessage(__('A total of %1 rate(s) have been imported.', $count));
        }
    }
}
