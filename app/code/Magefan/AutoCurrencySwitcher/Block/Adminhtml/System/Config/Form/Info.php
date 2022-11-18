<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\AutoCurrencySwitcher\Block\Adminhtml\System\Config\Form;

/**
 * Admin configurations information block
 */
class Info extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var \Magento\Framework\Module\ModuleListInterface
     */
    protected $moduleList;

    /**
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     * @param \Magento\Backend\Block\Template\Context       $context
     * @param array                                         $data
     */
    public function __construct(
        \Magento\Framework\Module\ModuleListInterface $moduleList,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleList       = $moduleList;
    }

    /**
     * Return info block html
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $m = $this->moduleList->getOne($this->getModuleName());
        $html = '
        <div style="padding:10px;background-color:#f8f8f8;border:1px solid #ddd;margin-bottom:7px;">
            Auto Currency Switcher Extension v' . $m['setup_version'] . ' was developed by <a href="http://magefan.com/" target="_blank">Magefan</a>.
        </div>';
        $html .= '<div style="padding:10px;background-color:#ffe5e5;border:1px solid #ddd;margin-bottom:7px;">
            <strong>Attention!</strong> Once changes being made, please make sure that you have flushed browser cookie or use anonymous-browser tab for testing.
        </div>';

        return $html;
    }
}
