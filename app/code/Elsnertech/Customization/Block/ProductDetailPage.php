<?php 
namespace Elsnertech\Customization\Block;

class ProductDetailPage extends \Magento\Framework\View\Element\Template
{
	protected $_productCollectionFactory;

	protected $_reviewFactory;

    protected $_product;

	protected $_reviewCollectionFactory;

	protected $imageHelper;

    protected $listProduct;

	public function __construct(
        \Magento\Backend\Block\Template\Context $context,
		\Magento\Framework\Registry $registry,
		\Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory,
		\Magento\Catalog\Helper\Image $imageHelper,
		\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
		\Magento\Store\Model\StoreManagerInterface $storeManager,
		\Magento\Review\Model\ReviewFactory $reviewFactory,
		\Magento\Catalog\Model\ProductFactory $product,
        \Magento\Catalog\Block\Product\ListProduct $listProduct,
        array $data = []
	) {
        parent::__construct($context, $data);
		$this->_registry = $registry;
		$this->_reviewCollectionFactory= $reviewCollectionFactory;
		$this->_productCollectionFactory = $productCollectionFactory;
		$this->imageHelper = $imageHelper;
		$this->storeManager = $storeManager;
		$this->_reviewFactory = $reviewFactory;
		$this->_product = $product;
        $this->listProduct = $listProduct;
	}

	public function getCurrentProduct()
    {        
       return $this->_registry->registry('current_product');
    } 

    public function getStore()
    {
      return $storeId = $this->storeManager->getStore();
    }

    public function getProduct($productId)
    {
        return $this->_product->create()->load($productId);
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

    public function getRatingSummary($product)
    {
        $this->_reviewFactory->create()->getEntitySummary($product, 
            $this->storeManager->getStore()->getId());
        $ratingSummary = $product->getRatingSummary()->getRatingSummary();
        return $ratingSummary;
    }


    public function getProductCollection($pid)
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(2); 
        $collection->addAttributeToFilter('entity_id', $pid);
        return $collection;
    }

    public function getAllSizeImages(ModelProduct $product, $imageFile)
    {
        return [
            'large' => $this->imageHelper->init($product, 'product_page_image_large_no_frame')
                ->setImageFile($imageFile)
                ->getUrl(),
            'medium' => $this->imageHelper->init($product, 'product_page_image_medium_no_frame')
                ->setImageFile($imageFile)
                ->getUrl(),
            'small' => $this->imageHelper->init($product, 'product_page_image_small')
                ->setImageFile($imageFile)
                ->getUrl(),
        ];
    }

    public function getProductImageUrl($product)
    {
        return $this->imageHelper->init($product, 'product_base_image')
                ->setImageFile($product->getSmallImage())
                ->getUrl();
    }

    public function getAddToCartUrl($product)
    {
        return $this->listProduct->getAddToCartUrl($product);
    }

}
