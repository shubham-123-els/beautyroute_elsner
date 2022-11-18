<?php
namespace WeltPixel\OwlCarouselSlider\Block\Slider\Products;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Slider\Products
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Slider\Products implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \WeltPixel\OwlCarouselSlider\Helper\Products $helperProducts, \WeltPixel\OwlCarouselSlider\Helper\Custom $helperCustom, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productsCollectionFactory, \Magento\Reports\Model\ResourceModel\Product\CollectionFactory $reportsCollectionFactory, \Magento\Reports\Block\Product\Widget\Viewed $viewedProductsBlock, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperProducts, $helperCustom, $catalogProductVisibility, $productsCollectionFactory, $reportsCollectionFactory, $viewedProductsBlock, $data);
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
