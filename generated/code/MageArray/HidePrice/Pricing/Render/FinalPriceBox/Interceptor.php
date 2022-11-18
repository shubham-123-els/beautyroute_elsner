<?php
namespace MageArray\HidePrice\Pricing\Render\FinalPriceBox;

/**
 * Interceptor class for @see \MageArray\HidePrice\Pricing\Render\FinalPriceBox
 */
class Interceptor extends \MageArray\HidePrice\Pricing\Render\FinalPriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\SaleableInterface $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \MageArray\HidePrice\Helper\Data $dataHelper, \Magento\Customer\Model\Session $customerSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $dataHelper, $customerSession, $data);
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
