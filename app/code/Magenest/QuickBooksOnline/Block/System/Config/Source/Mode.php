<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\QuickBooksOnline\Block\System\Config\Source;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as ConfigFormField;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Model\Url as BackendUrl;
use Magento\Framework\View\Helper\Js as HelperJs;
use Magenest\QuickBooksOnline\Model\Config;

/**
 * Class Mode
 *
 * @package Magenest\QuickBooksOnline\Block\System\Config\Source
 */
class Mode extends ConfigFormField
{
    /**
     * @var \Magento\Backend\Model\Url
     */
    protected $_url;

    /**
     * @var \Magento\Framework\View\Helper\Js
     */
    protected $_jsHelper;

    /**
     * Mode constructor.
     * @param Context $context
     * @param BackendUrl $url
     * @param HelperJs $jsHelper
     * @param Authenticate $authenticate
     * @param array $data
     */
    public function __construct(
        Context $context,
        BackendUrl $url,
        HelperJs $jsHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_url = $url;
        $this->_jsHelper = $jsHelper;
    }

    /**
     * Render connection button considering request parameter
     *
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $mode = $this->getRequest()->getParam('qbo_mode');
        if ($mode) {
            \Magento\Framework\App\ObjectManager::getInstance()->create('Magenest\QuickBooksOnline\Model\Authenticate')
                ->saveDataByPath(Config::XML_PATH_QBONLINE_APP_MODE, $mode);
            $element->setValue($mode);
        }
        $isConnected = $this->_scopeConfig->isSetFlag(Config::XML_PATH_QBONLINE_IS_CONNECTED);
        if ($isConnected) {
            $element->setDisabled(true);
        }

        return parent::render($element);
    }

    /**
     * Get country selector html
     *
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $urlParams = [
            'section' => $this->getRequest()->getParam('section'),
            'website' => $this->getRequest()->getParam('website'),
            'store' => $this->getRequest()->getParam('store'),
            'qbo_mode' => '__mode__',
        ];
        $urlString = $this->_escaper->escapeJsQuote($this->_url->getUrl('*/*/*', $urlParams));
        $jsString = '
            $("' .'#' . $element->getHtmlId() . '").on("change", function () {
                location.href = \'' . $urlString . '\'.replace("__mode__", this.value);
            });
        ';

        return parent::_getElementHtml($element) . $this->_jsHelper->getScript(
            'require([\'jquery\'], function($){ $(document).ready( function() {' . $jsString . '});});'
        );
    }
}
