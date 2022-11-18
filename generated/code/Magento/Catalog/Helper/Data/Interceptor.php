<?php
namespace Magento\Catalog\Helper\Data;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Data
 */
class Interceptor extends \Magento\Catalog\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Session $catalogSession, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Helper\Category $catalogCategory, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Framework\Registry $coreRegistry, \Magento\Catalog\Model\Template\Filter\Factory $templateFilterFactory, $templateFilterModel, \Magento\Tax\Api\Data\TaxClassKeyInterfaceFactory $taxClassKeyFactory, \Magento\Tax\Model\Config $taxConfig, \Magento\Tax\Api\Data\QuoteDetailsInterfaceFactory $quoteDetailsFactory, \Magento\Tax\Api\Data\QuoteDetailsItemInterfaceFactory $quoteDetailsItemFactory, \Magento\Tax\Api\TaxCalculationInterface $taxCalculationService, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Customer\Api\GroupRepositoryInterface $customerGroupRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory, \Magento\Customer\Api\Data\RegionInterfaceFactory $regionFactory)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $catalogSession, $string, $catalogCategory, $catalogProduct, $coreRegistry, $templateFilterFactory, $templateFilterModel, $taxClassKeyFactory, $taxConfig, $quoteDetailsFactory, $quoteDetailsItemFactory, $taxCalculationService, $customerSession, $priceCurrency, $productRepository, $categoryRepository, $customerGroupRepository, $addressFactory, $regionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getBreadcrumbPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBreadcrumbPath');
        return $pluginInfo ? $this->___callPlugins('getBreadcrumbPath', func_get_args(), $pluginInfo) : parent::getBreadcrumbPath();
    }
}
