<?php
namespace Magento\Quote\Model\Quote\Address\Total\Subtotal;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Address\Total\Subtotal
 */
class Interceptor extends \Magento\Quote\Model\Quote\Address\Total\Subtotal implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteValidator $quoteValidator)
    {
        $this->___init();
        parent::__construct($quoteValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(\Magento\Quote\Model\Quote $quote, \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment, \Magento\Quote\Model\Quote\Address\Total $total)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collect');
        return $pluginInfo ? $this->___callPlugins('collect', func_get_args(), $pluginInfo) : parent::collect($quote, $shippingAssignment, $total);
    }
}
