<?php

namespace Codilar\HelloWorld\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;
use BeautyCustom\RouteReview\Helper\CommonHepler;
use Magento\Catalog\Helper\Image as ImageHelper;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Block\Product\Context as ProductContext;
use Magento\Catalog\Helper\Product\Compare;

/**
 * Class FeaturedProducts
 * @package Mageplaza\Productslider\Block
 */

class FeaturedProducts extends \Magento\Framework\View\Element\Template
{

    protected $_productCollectionFactory;

    protected $storeManager;

    protected $commonHelper;

    protected $imageHelper;

    protected $listProduct;

    protected $imageBuilder;

    protected $compareHelper;
        
    public function __construct(
        Context $context,
        CollectionFactory $productCollectionFactory,
        StoreManagerInterface $storeManager,
        CommonHepler $commonHelper,
        ImageHelper $imageHelper,
        ListProduct $listProduct,
        ProductContext $imageBuilder,
        Compare $compareHelper,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->storeManager = $storeManager;
        $this->commonHelper = $commonHelper;
        $this->imageHelper = $imageHelper;
        $this->listProduct = $listProduct;
        $this->imageBuilder = $imageBuilder->getImageBuilder();
        $this->compareHelper = $compareHelper;
        parent::__construct($context, $data);
    }
    
    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        // fetching only 3 products
        $collection->addAttributeToFilter('custom_featured_product', '1');
        $collection->setPageSize(6);
        return $collection;
    }

    public function getPostDataParams(Product $_product)
    {
       return $this->compareHelper->getPostDataParams($_product);
    }

    public function getMediaUrl()
    {
        $mediaUrl = $this->storeManager
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }

    public function getFeaturedProductImageUrl($featureproduct, $type)
    {
        return $this->imageHelper->init($featureproduct, 'product_base_image')
                    ->setImageFile($featureproduct->getSmallImage()) // image,small_image,thumbnail
                    ->getUrl();
    }

    public function getImage(Product $product, $imageId, $attributes = [])
    {
        return $this->imageBuilder->create($product, $imageId, $attributes);
    }

    public function getProductPrice(Product $_product)
    {
        return $this->listProduct->getProductPrice($_product);
    }

    public function getAddToCartPostParams(Product $_product)
    {
        return $this->listProduct->getAddToCartPostParams($_product);
    }
}
