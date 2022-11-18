<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\Methods;

use Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\AbstractPaymentMethods;

/**
 * Class Sync
 *
 * @package Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\Methods
 */
class Sync extends AbstractPaymentMethods
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
            $paymentMethodsList = $this->_scopeConfig->getValue('payment');
            foreach ($paymentMethodsList as $code => $data) {
                if (isset($data['active']) && isset($data['title'])) {
                    $title = $data['title'];
                    if (strlen($title) > 31) {
                        $title = mb_substr($title, 0, 31);
                        $this->messageManager->addNoticeMessage(
                            __(
                                'Payment Methods %1 renamed to "%2" when synced to QuickBooks Online',
                                $data['title'],
                                $title
                            )
                        );
                    }
                    try {
                        $this->paymentMethods->sync($title, $code);
                        $totals++;
                    } catch (\Exception $e) {
                        $this->messageManager->addErrorMessage($e->getMessage());
                    }
                }
            }
        } else {
            $this->messageManager->addErrorMessage(__('You\'re not connected to QuickBooks Online . Please go to Configuration to finish the connection . '));
        }

        $this->messageManager->addSuccessMessage(
            __('A totals of %1 Payment Methods have been synced/updated to QuickBooksOnline.', $totals)
        );

        return $this->_redirect('*/*/index');
    }
}
