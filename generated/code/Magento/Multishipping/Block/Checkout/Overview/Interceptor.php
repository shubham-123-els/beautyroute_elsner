<?php
namespace Magento\Multishipping\Block\Checkout\Overview;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Overview
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Overview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, \Magento\Quote\Model\Quote\TotalsReader $totalsReader, array $data = [], ?\Magento\Checkout\Helper\Data $checkoutHelper = null)
    {
        $this->___init();
        parent::__construct($context, $multishipping, $taxHelper, $priceCurrency, $totalsCollector, $totalsReader, $data, $checkoutHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getRowItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowItemHtml');
        return $pluginInfo ? $this->___callPlugins('getRowItemHtml', func_get_args(), $pluginInfo) : parent::getRowItemHtml($item);
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
