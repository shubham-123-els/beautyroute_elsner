<?php
namespace Magento\Checkout\Block\Cart\Item\Renderer;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Item\Renderer
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Item\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Product\Configuration $productConfig, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $messageInterpretationStrategy, array $data = [], ?\Magento\Catalog\Model\Product\Configuration\Item\ItemResolverInterface $itemResolver = null)
    {
        $this->___init();
        parent::__construct($context, $productConfig, $checkoutSession, $imageBuilder, $urlHelper, $messageManager, $priceCurrency, $moduleManager, $messageInterpretationStrategy, $data, $itemResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductName');
        return $pluginInfo ? $this->___callPlugins('getProductName', func_get_args(), $pluginInfo) : parent::getProductName();
    }
}
