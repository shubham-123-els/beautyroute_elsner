<?php

namespace Elsnertech\Brandcustomization\Block\Brand;

class View extends \Magiccart\Shopbrand\Block\Brand\View
{
    protected $_shopbrandFactory;

    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Image\AdapterFactory $imageFactory,
        \Magento\Backend\Model\UrlInterface $backendUrl,
        \Magento\Catalog\Model\ProductFactory $product,
        \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Magiccart\Shopbrand\Model\ShopbrandFactory $shopbrandFactory,
        \Magiccart\Shopbrand\Helper\Data $helper,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct(
            $context,
            $imageFactory,
            $backendUrl,
            $product,
            $catalogProductVisibility,
            $filterProvider,
            $shopbrandFactory,
            $helper,
            $data
        );
    }
    
    public function getshopBrand($id) {
        $shopbrand = $this->_shopbrandFactory->create();
        $shopbrand = $shopbrand->load($id);
        return $shopbrand;
    }

    public function getMainurl()
    {
        return $this->_scopeConfig->getValue("web/secure/base_url");
    }
}