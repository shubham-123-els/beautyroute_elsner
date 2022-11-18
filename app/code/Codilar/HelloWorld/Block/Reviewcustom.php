<?php

namespace Codilar\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Reviewcustom extends Template
{
    protected $_registry;
    protected $_reviewFactory;
    protected $_reviewCollectionFactory;
    protected $_storeManager;
    protected $_productloader;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory,
        \Magento\Review\Model\Review $reviewFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ProductFactory $_productloader
    ) {
        parent::__construct($context);
        $this->_registry = $registry;
        $this->_reviewCollectionFactory = $reviewCollectionFactory;
        $this->_storeManager = $storeManager;
         $this->_productloader = $_productloader;
         $this->_reviewFactory = $reviewFactory;
    }
    public function getCurrentStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }

    public function getProductId()
    {
        $currentproduct = $this->_registry->registry('current_product');
        return $currentproduct->getId();
    }

    public function getProductSummary()
    {

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $reviewFactory = $objectManager->create('Magento\Review\Model\Review');
        $product       = $objectManager->create('Magento\Catalog\Model\Product')->load($this->getProductId());
        $storeManager  = $objectManager->create('\Magento\Store\Model\StoreManagerInterface');
        $storeId = $storeManager->getStore()->getStoreId();
        $this->_reviewFactory->getEntitySummary($product, $storeId);
        $ratingSummary = $product->getRatingSummary()->getRatingSummary();
        $reviewCount   = $product->getRatingSummary()->getReviewsCount();
        return [$ratingSummary,$reviewCount];
    }

    public function getLoadProduct()
    {
        return $this->_productloader->create()->load($this->getProductId());
    }

    public function getReviewCollectionData()
    {
        // echo 'id'. $this->getProductId(); die;
        $currentStoreId = $this->getCurrentStoreId();
        $reviewsCollection = $this->_reviewCollectionFactory->create()
              ->addFieldToSelect('*')
               ->addStoreFilter($currentStoreId)
               ->addEntityFilter('product', $this->getProductId())
              ->addStatusFilter(\Magento\Review\Model\Review::STATUS_APPROVED)
              ->setDateOrder()
              ->addRateVotes();
        return $reviewsCollection;
    }
}
