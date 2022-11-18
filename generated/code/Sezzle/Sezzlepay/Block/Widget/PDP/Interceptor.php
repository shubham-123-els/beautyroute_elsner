<?php
namespace Sezzle\Sezzlepay\Block\Widget\PDP;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Block\Widget\PDP
 */
class Interceptor extends \Sezzle\Sezzlepay\Block\Widget\PDP implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Helper\Product $productHelper, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Customer\Model\Session $customerSession, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Sezzle\Sezzlepay\Model\System\Config\Container\SezzleConfigInterface $sezzleConfig, \Magento\Framework\Pricing\Helper\Data $pricingHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $sezzleConfig, $pricingHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canEmailToFriend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEmailToFriend');
        return $pluginInfo ? $this->___callPlugins('canEmailToFriend', func_get_args(), $pluginInfo) : parent::canEmailToFriend();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantityValidators()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuantityValidators');
        return $pluginInfo ? $this->___callPlugins('getQuantityValidators', func_get_args(), $pluginInfo) : parent::getQuantityValidators();
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
