<?php
namespace Mageplaza\Core\Block\Adminhtml\System\Config\Button;

/**
 * Interceptor class for @see \Mageplaza\Core\Block\Adminhtml\System\Config\Button
 */
class Interceptor extends \Mageplaza\Core\Block\Adminhtml\System\Config\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mageplaza\Core\Helper\Validate $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $data);
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
