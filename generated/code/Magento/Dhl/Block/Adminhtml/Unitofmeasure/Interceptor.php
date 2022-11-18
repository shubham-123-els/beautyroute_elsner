<?php
namespace Magento\Dhl\Block\Adminhtml\Unitofmeasure;

/**
 * Interceptor class for @see \Magento\Dhl\Block\Adminhtml\Unitofmeasure
 */
class Interceptor extends \Magento\Dhl\Block\Adminhtml\Unitofmeasure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Dhl\Model\Carrier $carrierDhl, \Magento\Shipping\Helper\Carrier $carrierHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $carrierDhl, $carrierHelper, $data);
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
