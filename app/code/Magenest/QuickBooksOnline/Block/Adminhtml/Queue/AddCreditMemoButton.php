<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 30/06/2018
 * Time: 09:25
 */

namespace Magenest\QuickBooksOnline\Block\Adminhtml\Queue;

use Magento\Catalog\Block\Adminhtml\Product\Attribute\Button\Generic;
use Magento\Framework\App\ObjectManager;

class AddCreditMemoButton extends Generic
{
    public function getButtonData()
    {
        /**
         * @var \Magenest\QuickBooksOnline\Model\Config $config
         */
        $config = ObjectManager::getInstance()->get('Magenest\QuickBooksOnline\Model\Config');
        if ($config->isEnableByType('creditmemo')) {
            return [
                'id' => 'add_creditmemo_button',
                'class' => '',
                'label' => __('Add Credit Memos'),
                'on_click' => ''
            ];
        }
        return [];
    }
}
