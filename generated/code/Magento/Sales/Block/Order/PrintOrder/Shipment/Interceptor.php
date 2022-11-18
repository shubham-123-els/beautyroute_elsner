<?php
namespace Magento\Sales\Block\Order\PrintOrder\Shipment;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\PrintOrder\Shipment
 */
class Interceptor extends \Magento\Sales\Block\Order\PrintOrder\Shipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $paymentHelper, $addressRenderer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemHtml');
        return $pluginInfo ? $this->___callPlugins('getItemHtml', func_get_args(), $pluginInfo) : parent::getItemHtml($item);
    }
}
