<?php
namespace Mageplaza\BetterMaintenance\Block\Adminhtml\System\PreviewButton;

/**
 * Interceptor class for @see \Mageplaza\BetterMaintenance\Block\Adminhtml\System\PreviewButton
 */
class Interceptor extends \Mageplaza\BetterMaintenance\Block\Adminhtml\System\PreviewButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Url $frontendUrl, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($frontendUrl, $context, $data);
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
