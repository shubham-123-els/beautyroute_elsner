<?php
namespace Magento\Config\Block\System\Config\Form\Field\Regexceptions;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Form\Field\Regexceptions
 */
class Interceptor extends \Magento\Config\Block\System\Config\Form\Field\Regexceptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $labelFactory, $data);
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
