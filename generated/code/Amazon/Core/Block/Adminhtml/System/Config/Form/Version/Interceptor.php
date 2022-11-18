<?php
namespace Amazon\Core\Block\Adminhtml\System\Config\Form\Version;

/**
 * Interceptor class for @see \Amazon\Core\Block\Adminhtml\System\Config\Form\Version
 */
class Interceptor extends \Amazon\Core\Block\Adminhtml\System\Config\Form\Version implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amazon\Core\Helper\Data $coreHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreHelper, $data);
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
