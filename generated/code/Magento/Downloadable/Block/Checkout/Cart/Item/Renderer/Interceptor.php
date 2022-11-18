<?php
namespace Magento\Downloadable\Block\Checkout\Cart\Item\Renderer;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Checkout\Cart\Item\Renderer
 */
class Interceptor extends \Magento\Downloadable\Block\Checkout\Cart\Item\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Product\Configuration $productConfig, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $messageInterpretationStrategy, \Magento\Downloadable\Helper\Catalog\Product\Configuration $downloadableProductConfiguration, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productConfig, $checkoutSession, $imageBuilder, $urlHelper, $messageManager, $priceCurrency, $moduleManager, $messageInterpretationStrategy, $downloadableProductConfiguration, $data);
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
