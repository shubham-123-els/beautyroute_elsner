<?php
namespace Solwin\ScrolltoTop\Block\Color;

/**
 * Interceptor class for @see \Solwin\ScrolltoTop\Block\Color
 */
class Interceptor extends \Solwin\ScrolltoTop\Block\Color implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $coreRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $data);
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
