<?php
namespace Elsnertech\StorePrice\Observer;
use Magento\Framework\Event\ObserverInterface;
use Elsnertech\ProductCustomization\Helper\Data;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Elsnertech\StorePrice\Model\MainPrice;

class CatagoryListing implements ObserverInterface
{
    const BTB_USA = 'b2b_usa';
    const BTC_USA = 'b2c_usa';
    const BTB_CANADA = 'b2b_canada';
    const BTC_CANADA = 'b2c_canada';
    
    public function __construct(
        Data $data,
        ProductRepositoryInterface $productRepository,
        MainPrice $mainprice
    ) {
        $this->data = $data;
        $this->_productRepository = $productRepository;
        $this->mainprice = $mainprice;
    }
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $currentCountry = $this->data->getCountryName();
        $_collection = $observer->getCollection();
        $_USA = array('US','USA','United States');
        $_CANADA = array('CA','Canada');
        if ($_collection) :
            foreach ($_collection as $_product) :
                $product = $this->_productRepository->getById($_product->getId());
                $originalprice = $_product->getPrice();
                if (in_array($currentCountry, $_USA)) {
                    $price = $this->mainprice->getProductPrice($product,self::BTB_USA,self::BTC_USA);
                    $_product->setPrice($price);
                } elseif(in_array($currentCountry, $_CANADA)){
                    $price = $this->mainprice->getProductPrice($product,self::BTB_CANADA,self::BTC_CANADA);
                    $_product->setPrice($price);
                }else {
                    $_product->setPrice($_product->getPrice());
                }
            endforeach;
        endif;
    }
}