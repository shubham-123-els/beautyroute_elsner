<?php
namespace Mageplaza\Sitemap\Model\Sitemap;

/**
 * Interceptor class for @see \Mageplaza\Sitemap\Model\Sitemap
 */
class Interceptor extends \Mageplaza\Sitemap\Model\Sitemap implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Escaper $escaper, \Magento\Sitemap\Helper\Data $sitemapData, \Magento\Framework\Filesystem $filesystem, \Magento\Sitemap\Model\ResourceModel\Catalog\CategoryFactory $categoryFactory, \Magento\Sitemap\Model\ResourceModel\Catalog\ProductFactory $productFactory, \Magento\Sitemap\Model\ResourceModel\Cms\PageFactory $cmsFactory, \Mageplaza\Sitemap\Helper\Data $helperConfig, \Magento\Cms\Model\PageFactory $corePageFactory, \Magento\Catalog\Model\ProductFactory $coreProductFactory, \Magento\Catalog\Model\CategoryFactory $coreCategoryFactory, \Magento\CatalogInventory\Model\Stock\Item $stockItem, \Magento\Framework\Stdlib\DateTime\DateTime $modelDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Stdlib\DateTime $dateTime, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $escaper, $sitemapData, $filesystem, $categoryFactory, $productFactory, $cmsFactory, $helperConfig, $corePageFactory, $coreProductFactory, $coreCategoryFactory, $stockItem, $modelDate, $storeManager, $request, $dateTime, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        return $pluginInfo ? $this->___callPlugins('generateXml', func_get_args(), $pluginInfo) : parent::generateXml();
    }
}
