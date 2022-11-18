<?php
namespace StripeIntegration\Payments\Model\Adminhtml\Source\SavePaymentMethod;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Model\Adminhtml\Source\SavePaymentMethod
 */
class Interceptor extends \StripeIntegration\Payments\Model\Adminhtml\Source\SavePaymentMethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\StripeIntegration\Payments\Model\Config $config, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($config, $context, $data);
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
