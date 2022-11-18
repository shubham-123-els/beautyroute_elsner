<?php
namespace Mageplaza\FreeGifts\Plugin\AfterGetProductName;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Plugin\AfterGetProductName
 */
class Interceptor extends \Mageplaza\FreeGifts\Plugin\AfterGetProductName implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\FreeGifts\Helper\Data $helperData, \Mageplaza\FreeGifts\Helper\Rule $helperRule, \Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Product\Configuration $productConfig, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $messageInterpretationStrategy, array $data = [])
    {
        $this->___init();
        parent::__construct($helperData, $helperRule, $context, $productConfig, $checkoutSession, $imageBuilder, $urlHelper, $messageManager, $priceCurrency, $moduleManager, $messageInterpretationStrategy, $data);
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
