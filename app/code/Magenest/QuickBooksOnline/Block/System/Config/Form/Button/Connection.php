<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Block\System\Config\Form\Button;

use Magento\Config\Block\System\Config\Form\Field as ConfigFormField;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magenest\QuickBooksOnline\Model\Config;

/**
 * Class Connection
 * @package Magenest\QuickBooksOnline\Block\System\Config\Form\Button
 */
class Connection extends ConfigFormField
{
    /**
     * Set Template
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (!$this->getTemplate()) {
            $this->setTemplate('system/config/connection/button.phtml');
        }

        return $this;
    }

    /**
     * Return URL process connector
     * @return string
     */
    public function getGrantUrl()
    {
        $mode = (int)$this->getRequest()->getParam('qbo_mode');
        if (!$mode) {
            $mode = $this->_scopeConfig->getValue(Config::XML_PATH_QBONLINE_APP_MODE);
        }

        $params = [
            'website'  => $this->getWebsiteId(),
            'qbo_mode' => $mode
        ];

//        return $this->getUrl('qbonline/connection/begin');
        return $this->getBaseUrl() . 'qbonline/connection/begin/website/' . $this->getWebsiteId() . '/qbo_mode/' . $mode;
    }

    /**
     * Get Website Id
     * @return int
     */
    protected function getWebsiteId()
    {
        $websiteId = $this->getRequest()->getParam('website');
        if (!$websiteId) {
            $websiteId = 0;
        }

        return $websiteId;
    }

    /**
     * Return URL process connector
     * @return string
     */
    public function getIndexUrl()
    {
        return $this->getUrl('*/*/index');
    }

    /**
     * Return Menu URL
     * @return string
     */
    public function getMenuUrl()
    {
        return $this->getUrl('qbonline/connection/menu');
    }

    /**
     * Unset some non-related element parameters
     *
     * @param AbstractElement $element
     *
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();

        return parent::render($element);
    }

    /**
     * Get the button and scripts contents
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
