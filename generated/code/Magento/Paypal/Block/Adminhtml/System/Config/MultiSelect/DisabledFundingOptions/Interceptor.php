<?php
namespace Magento\Paypal\Block\Adminhtml\System\Config\MultiSelect\DisabledFundingOptions;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\System\Config\MultiSelect\DisabledFundingOptions
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\System\Config\MultiSelect\DisabledFundingOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Paypal\Model\Config $config, $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $data);
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
