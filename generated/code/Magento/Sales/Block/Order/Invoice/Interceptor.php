<?php
namespace Magento\Sales\Block\Order\Invoice;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Invoice
 */
class Interceptor extends \Magento\Sales\Block\Order\Invoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Http\Context $httpContext, \Magento\Payment\Helper\Data $paymentHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $httpContext, $paymentHelper, $data);
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
