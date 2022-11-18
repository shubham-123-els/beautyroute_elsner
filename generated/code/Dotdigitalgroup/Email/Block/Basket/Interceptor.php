<?php
namespace Dotdigitalgroup\Email\Block\Basket;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Basket
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Basket implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Dotdigitalgroup\Email\Block\Helper\Font $font, \Dotdigitalgroup\Email\Model\Catalog\UrlFinder $urlFinder, \Dotdigitalgroup\Email\Model\Product\ImageType\Context\DynamicContent $imageType, \Dotdigitalgroup\Email\Model\Product\ImageFinder $imageFinder, \Magento\Store\Model\App\EmulationFactory $emulationFactory, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $font, $urlFinder, $imageType, $imageFinder, $emulationFactory, $quoteFactory, $helper, $priceHelper, $productRepository, $data);
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
