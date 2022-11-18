<?php
namespace Magento\Catalog\Block\Product\ListProduct;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ListProduct
 */
class Interceptor extends \Magento\Catalog\Block\Product\ListProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Url\Helper\Data $urlHelper, array $data = [], ?\Magento\Catalog\Helper\Output $outputHelper = null)
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $data, $outputHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = false, $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        return $pluginInfo ? $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo) : parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
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
