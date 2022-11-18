<?php
namespace WeltPixel\LayeredNavigation\Block\Navigation;

/**
 * Interceptor class for @see \WeltPixel\LayeredNavigation\Block\Navigation
 */
class Interceptor extends \WeltPixel\LayeredNavigation\Block\Navigation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Model\Layer\FilterList $filterList, \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag, \Magento\Catalog\Helper\Product\ProductList $productListHelper, \WeltPixel\LayeredNavigation\Helper\Data $wpHelper, \WeltPixel\LayeredNavigation\Model\AttributeOptions $attributeOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $productListHelper, $wpHelper, $attributeOptions, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canShowBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowBlock');
        return $pluginInfo ? $this->___callPlugins('canShowBlock', func_get_args(), $pluginInfo) : parent::canShowBlock();
    }
}
