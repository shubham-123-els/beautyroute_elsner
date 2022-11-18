<?php
namespace Codilar\HelloWorld\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;
use BeautyCustom\RouteReview\Helper\CommonHepler;
use Magento\Catalog\Helper\Image as ImageHelper;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Block\Product\Context as ProductContext;
use Magento\Catalog\Helper\Product\Compare;
use Magento\Framework\Registry;

class SimilarProduct extends \Magento\Framework\View\Element\Template
{
    protected $_productCollectionFactory;

    protected $storeManager;

    protected $commonHelper;

    protected $imageHelper;

    protected $listProduct;

    protected $imageBuilder;

    protected $compareHelper;

    protected $_registry;

    protected $productFactory;

    public function __construct(
        Context $context,
        CollectionFactory $productCollectionFactory,
        StoreManagerInterface $storeManager,
        CommonHepler $commonHelper,
        ImageHelper $imageHelper,
        ListProduct $listProduct,
        ProductContext $imageBuilder,
        Compare $compareHelper,
        Registry $registry,
        ProductFactory $productFactory,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->storeManager = $storeManager;
        $this->commonHelper = $commonHelper;
        $this->imageHelper = $imageHelper;
        $this->listProduct = $listProduct;
        $this->imageBuilder = $imageBuilder->getImageBuilder();
        $this->compareHelper = $compareHelper;
        $this->_registry = $registry;
        $this->productFactory = $productFactory;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    public function getProduct($productId)
    {
        return $this->productFactory->create()->load($productId);
    }

    public function getProductCollection($pid)
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
       // $collection->setPageSize(3); // fetching only 3 products
        $collection->addAttributeToFilter('entity_id', $pid);
        return $collection;
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
