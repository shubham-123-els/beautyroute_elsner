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

/**
 * Class RateSave
 * @package Mageplaza\TableRateShipping\Controller\Adminhtml\Method
 */
class RateSave extends RateForm
{
    /**
     * @return void
     */
    public function execute()
    {
        if (!$this->getRequest()->isAjax()) {
            $this->_forward('noroute');

            return;
        }

        $params = $this->getRequest()->getParams();

        parse_str($params['formData'], $data);

        foreach (['country_id', 'region'] as $item) {
            if (empty($data[$item])) {
                $data[$item] = '*';
            }
        }

        if (isset($data['shipping_group'])) {
            $data['shipping_group'] = implode(',', $data['shipping_group']);
        }

        $this->processPostcode($data);

        $rate = $this->_initRate();
        $rate->setData($data);
        try {
            $this->rateResource->save($rate);

            $this->messageManager->addSuccessMessage(__('The rate has been saved'));
        } catch (Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }
    }

    /**
     * @param array $data
     */
    private function processPostcode(&$data)
    {
        $data['postcode_range'] = isset($data['postcode_range']);

        if (!isset($data['postcode'])) {
            $data['postcode'] = '';
        }

        foreach (['postcode_from', 'postcode_to'] as $key) {
            if (!isset($data[$key])) {
                $data[$key] = '';
            }

            $postcode = $this->helper->getPostcodeData($data[$key]);

            $data[$key . '_alpha'] = $postcode['alpha'];
            $data[$key . '_num']   = $postcode['num'];
        }
    }
}
