<?php
namespace MageArray\HidePrice\Pricing\Render\PriceBox;

/**
 * Interceptor class for @see \MageArray\HidePrice\Pricing\Render\PriceBox
 */
class Interceptor extends \MageArray\HidePrice\Pricing\Render\PriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Product $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \MageArray\HidePrice\Helper\Data $dataHelper, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $dataHelper, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        return $pluginInfo ? $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo) : parent::getCacheKey();
    }
}
