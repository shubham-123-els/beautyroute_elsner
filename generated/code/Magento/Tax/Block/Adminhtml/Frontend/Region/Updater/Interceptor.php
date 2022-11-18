<?php
namespace Magento\Tax\Block\Adminhtml\Frontend\Region\Updater;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Frontend\Region\Updater
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Frontend\Region\Updater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $data, $secureRenderer);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
