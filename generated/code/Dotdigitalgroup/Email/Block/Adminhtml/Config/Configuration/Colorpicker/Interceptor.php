<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\Configuration\Colorpicker;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Config\Configuration\Colorpicker
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Config\Configuration\Colorpicker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Text $text)
    {
        $this->___init();
        parent::__construct($context, $text);
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
