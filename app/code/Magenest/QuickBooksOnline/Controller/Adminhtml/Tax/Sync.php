<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax;

/**
 * Class Sync
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Tax
 */
class Sync extends AbstractTax
{
    /**
     * execute the action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $config = $this->_objectManager->create('Magenest\QuickBooksOnline\Model\Config');
        $connect = $config->getConnected();
        $totals = 0;
        if ($connect && $connect == 1) {
            $taxList = $this->taxModel->create()->getCollection();
            foreach ($taxList as $listTax) {
                try {
                    $this->taxCode->sync($listTax->getTaxId(), trim($listTax->getTaxCode()), $listTax->getRate());
                    $totals++;
                } catch (\Exception $e) {
                    $this->messageManager->addErrorMessage($e->getMessage());
                }
            }
        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online. Please go to Configuration to finish the connection.'));
        }

        $this->messageManager->addSuccessMessage(
            __('Totals %1 Tax Code have been synced to QuickBooksOnline.', $totals)
        );

        return $this->_redirect('*/*/index');
    }
}
