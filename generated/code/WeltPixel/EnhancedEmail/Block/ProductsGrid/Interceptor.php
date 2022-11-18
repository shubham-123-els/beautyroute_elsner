<?php
namespace WeltPixel\EnhancedEmail\Block\ProductsGrid;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\ProductsGrid
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\ProductsGrid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\Product\Visibility $productVisibility, \WeltPixel\EnhancedEmail\Helper\Data $wpHelper, array $data = [], ?\Magento\Catalog\Model\ResourceModel\Product\Link\CollectionFactory $linkCollectionFactory = null, ?\Magento\Sales\Api\OrderRepositoryInterface $orderRepository = null, ?\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($context, $productVisibility, $wpHelper, $data, $linkCollectionFactory, $orderRepository, $productCollectionFactory);
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
