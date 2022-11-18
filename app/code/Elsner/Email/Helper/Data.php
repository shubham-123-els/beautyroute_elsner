<?php

namespace Elsner\Email\Helper;
use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
    * @var OrderRepositoryInterface
    */
    protected $orderRepository;

    /**
    * OrderDetails constructor.
    * @param OrderRepositoryInterface $orderRepository
    */

    /**
    * @var ProductRepositoryInterface
    */
    protected $productRepository;

    /**
    * OrderDetails constructor.
    * @param ProductRepositoryInterface $productRepository
    */

    /**
    * @var storeManager
    */
    protected $storeManager;

    /**
    * OrderDetails constructor.
    * @param StoreManagerInterface $storeManager
    */

   public function __construct
   (
       OrderRepositoryInterface $orderRepository,
       ProductRepositoryInterface $productRepository,
       StoreManagerInterface $storeManager
   ) {
       $this->orderRepository = $orderRepository;
       $this->productRepository = $productRepository;
       $this->storeManager = $storeManager;
   }

   /**
    * Get Order by Order ID
    * @param $id
    * @return OrderRepositoryInterface
    */
    public function getOrderDetails($id) {
        return $this->orderRepository->get($id);
    }

    public function getProductImage($sku) {
        $product = $this->productRepository->get($sku);
        $mediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA );
        $image = $mediaUrl."catalog/product".$product->getData('thumbnail');
        return $image;
    }
}
