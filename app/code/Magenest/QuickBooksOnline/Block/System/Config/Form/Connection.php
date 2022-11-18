<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Block\System\Config\Form;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as ConfigFormField;
use Magenest\QuickBooksOnline\Block\Adminhtml\Connection\Status as ConnectionStatus;

/**
 * Class Connection
 * @package Magenest\QuickBooksOnline\Block\System\Config\Form
 */
class Connection extends ConfigFormField
{
    /**
     * Create element for Access token field in store configuration
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $connectionHtml = $this->getLayout()->createBlock(ConnectionStatus::class)->toHtml();

        return $element->getElementHtml() . $connectionHtml;
    }
}
