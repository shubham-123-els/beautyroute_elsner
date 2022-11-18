<?php
namespace Codilar\HelloWorld\Block;

use Magento\Catalog\Model\ResourceModel\Eav\Attribute;
use Magento\Catalog\Model\ResourceModel\Product;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Store\Model\ScopeInterface;

class ProductNewTrend extends \Magento\Framework\View\Element\Template
{
    protected $_productCollectionFactory;

    protected $_reviewCollectionFactory;

    protected $_reviewFactory;

    protected $_product;

    protected $categoryRepository;

    protected $scopeConfig;

    protected $listProduct;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory,
        \Magento\Review\Model\ReviewFactory $reviewFactory,
        \Magento\Review\Model\Review $review,
        \Magento\Catalog\Model\CategoryRepository $categoryRepository,
        \Magento\Catalog\Model\ProductFactory $product,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Catalog\Block\Product\ListProduct $listProduct
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_storeManager = $storeManager;
        $this->_reviewCollectionFactory= $reviewCollectionFactory;
        $this->_product = $product;
        $this->_reviewFactory = $reviewFactory;
        $this->scopeConfig = $scopeConfig;
        $this->listProduct = $listProduct;
        parent::__construct($context);
    }
    
    
    public function getTrendingProducts()
    {
        $trendingProductsId = $this->getTendingProductCatId();
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*')->setPageSize(2);
        $collection->addCategoriesFilter(['in' => $trendingProductsId]);
        return $collection;
    }

    public function getNewProducts()
    {
        $newProductsId = $this->getNewProductCatId();
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*')->setPageSize(2);
        $collection->addCategoriesFilter(['in' => $newProductsId]);
        return $collection;
    }
     
    public function getMediaUrl()
    {
        $mediaUrl = $this->_storeManager
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }
    public function getRating($productid)
    {
        $result = $items = $starData = [];
        $idArray = $productid; // product id
        $reviewsCollection = $this->_reviewCollectionFactory->create()
        ->addFieldToFilter('entity_pk_value', ["in" => $idArray])
        ->addStatusFilter(\Magento\Review\Model\Review::STATUS_APPROVED)
        ->addRateVotes();
        $reviewsCollection->getSelect();

        foreach ($reviewsCollection->getItems() as $review) {

            foreach ($review->getRatingVotes() as $_vote) {
                $rating = [];
                $percent = $_vote->getPercent();
                $star = ($percent/20);
                $productId = $_vote->getEntityPkValue();

                $productModel = $this->_product->create();
                $product = $productModel->load($productId);
                $countReview = $this->_reviewFactory->create()->getTotalReviews($productId, false);
                $review_id = $_vote->getReviewId();

                $rating['review_id'] = $review_id;
                $rating['product_id'] = $productId;
                $rating['percent']   = $percent;
                $rating['star']      = $star;
                $rating['nickname']  = $review->getNickname();
                $items[] = $rating;
                $starData[$star][] = $rating;
            }

        }

        if (count($items) > 0) {
              $result['all'] = $items;
              $result['star'] = $starData;

            if (isset($starData[1])) {
                $result ['count'][1] = count($starData[1]);
            } else {
                $result ['count'][1] = 0;
            }

            if (isset($starData[2])) {
                $result ['count'][2] = count($starData[2]);
            } else {
                $result ['count'][2] = 0;
            }

            if (isset($starData[3])) {
                $result ['count'][3] = count($starData[3]);
            } else {
                $result ['count'][3] = 0;
            }

            if (isset($starData[4])) {
                $result ['count'][4] = count($starData[4]);
            } else {
                $result ['count'][4] = 0;
            }

            if (isset($starData[5])) {
                $result ['count'][5] = count($starData[5]);
            } else {
                $result ['count'][5] = 0;
            }

            $sum = $startSum = 0;

            foreach ($result['count'] as $number => $count) {
                $sum += $number * $count;
                $startSum +=  $count;
            }

            $avg =  $sum/$startSum;

            $result ['count']['all'] = count($result['all']);
            $result ['count']['avg'] = round($avg, 1);
        }

        return $result;
    }
    public function getAllStart($pid)
    {
        $review = $this->_reviewCollectionFactory->create()     //\Magento\Review\Model\Review $reviewFactory (_objectReview)
            ->addFieldToFilter('main_table.status_id', 1)
            ->addEntityFilter('product', $pid)          //$pid = > your current product ID
            ->addStoreFilter($this->_storeManager->getStore()->getId())
            ->addFieldToSelect('review_id')
        ;
        $review->getSelect()->columns('detail.detail_id')->joinInner(
            ['vote' => $review->getTable('rating_option_vote')],
            'main_table.review_id = vote.review_id',
            ['review_value' => 'vote.value']
        );
        $review->getSelect()->order('review_value DESC');
        $review->getSelect()->columns('count(vote.vote_id) as total_vote')->group('review_value');
        for ($i = 5; $i >= 1; $i--) {
            $arrRatings[$i]['value'] = 0;
        }
        foreach ($review as $_result) {
            $arrRatings[$_result['review_value']]['value'] = $_result['total_vote'];
        }
        return $arrRatings;
    }
    public function getwishlistProducts($pid)
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addCategoriesFilter(['in' => $pid]);
        return $collection;
    }

    public function getNewcatUrl()
    {
        $category = $this->categoryRepository->get($this->getNewProductCatId(), 
            $this->_storeManager->getStore()->getId());
        return $category->getUrl();
    }
    public function getTrendcatUrl()
    {
        $category = $this->categoryRepository->get($this->getTendingProductCatId(), 
            $this->_storeManager->getStore()->getId());
        return $category->getUrl();
    }

    public function getRatingSummary($product)
    {
        $this->_reviewFactory->create()->getEntitySummary($product, 
            $this->_storeManager->getStore()->getId());
        $ratingSummary = $product->getRatingSummary()->getRatingSummary();
        return $ratingSummary;
    }

    public function getProductImageTrending($product)
    {
        $imageUrl = $this->getMediaUrl() . 'catalog/product/' . $product->getProductImageTrending();
        return $imageUrl;
    }

    public function getProductImageNew($product)
    {
        $imageUrl = $this->getMediaUrl() . 'catalog/product/' . $product->getProductImageNew();
        return $imageUrl;
    }

    public function getTendingProductCatId()
    {
        return $this->scopeConfig->getValue(
                'home_customization/product_block/select_trending_product',
                ScopeInterface::SCOPE_STORE
                );
    }

    public function getNewProductCatId()
    {
        return $this->scopeConfig->getValue(
                'home_customization/product_block/select_new_product',
                ScopeInterface::SCOPE_STORE
                );
    }

    public function getAddToCartUrl($product)
    {
        return $this->listProduct->getAddToCartUrl($product);
    }

    public function getProductPrice($product)
    {
        return $this->listProduct->getProductPrice($product);
    }
    
    public function getMainurl()
    {
        return $this->_scopeConfig->getValue("web/secure/base_url");
    }
}
