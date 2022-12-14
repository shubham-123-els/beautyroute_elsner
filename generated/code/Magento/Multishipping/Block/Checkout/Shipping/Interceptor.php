<?php
namespace Magento\Multishipping\Block\Checkout\Shipping;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Shipping
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filter\DataObject\GridFactory $filterGridFactory, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $filterGridFactory, $multishipping, $taxHelper, $priceCurrency, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsBoxTextAfter(\Magento\Framework\DataObject $addressEntity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsBoxTextAfter');
        return $pluginInfo ? $this->___callPlugins('getItemsBoxTextAfter', func_get_args(), $pluginInfo) : parent::getItemsBoxTextAfter($addressEntity);
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
