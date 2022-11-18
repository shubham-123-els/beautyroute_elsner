<?php
namespace Vertex\Tax\Block\Adminhtml\Config\Form\Field\FlexibleNumericFields;

/**
 * Interceptor class for @see \Vertex\Tax\Block\Adminhtml\Config\Form\Field\FlexibleNumericFields
 */
class Interceptor extends \Vertex\Tax\Block\Adminhtml\Config\Form\Field\FlexibleNumericFields implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Vertex\Tax\Block\Adminhtml\Config\Form\Field\FlexibleFieldUtilities $utilities, \Vertex\Tax\Block\Adminhtml\Config\Form\Field\FieldSource\OptionProvider $optionProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $utilities, $optionProvider, $data);
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
