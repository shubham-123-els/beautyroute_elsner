<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax;

/**
 * Class AddTax
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Tax
 */
class AddTax extends AbstractTax
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $collections = $this->taxInfo->getCollection();
        try {
            /** @var \Magento\Tax\Model\Calculation\Rate $collections */
            foreach ($collections as $taxs) {
                $data = [
                    'tax_id' => $taxs->getId(),
                    'tax_code' => trim($taxs->getCode()),
                    'rate' => $taxs->getRate(),
                    'tax_rate_name' => trim($taxs->getCode()).'_'.$taxs->getId(),
                ];
                $model = $this->taxModel->create()->load($taxs->getCode(), 'tax_code');
                $model->addData($data)->save();
            }
            $taxZero = [

                'tax_id' => 1000,
                'tax_code' => 'tax_zero_qb',
                'rate' => 0,
                'tax_rate_name' => 'tax_zero_qb_1000',
            ];

            $model = $this->taxModel->create()->load('tax_zero_qb', 'tax_code');
            $model->addData($taxZero)->save();
            $this->messageManager->addSuccessMessage(__('All tax codes have been added to the queue.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while adding tax codes to the queue. Please try again later.'));
        }

        $this->_redirect('*/*/index');
    }
}
