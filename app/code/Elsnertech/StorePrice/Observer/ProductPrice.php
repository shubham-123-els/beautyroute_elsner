<?php
namespace Elsnertech\StorePrice\Observer;
use Magento\Framework\Event\ObserverInterface;
use Elsnertech\ProductCustomization\Helper\Data;
use Elsnertech\StorePrice\Model\MainPrice;

class ProductPrice implements ObserverInterface
{
    const BTB_USA = 'b2b_usa';
    const BTC_USA = 'b2c_usa';
    const BTB_CANADA = 'b2b_canada';
    const BTC_CANADA = 'b2c_canada';
    
    public function __construct(
        Data $data,
        MainPrice $mainprice
    ) {
        $this->data = $data;
        $this->mainprice = $mainprice;
    }
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $currentCountry = $this->data->getCountryName();
        $product = $observer->getProduct();
        $originalprice = $product->getPrice();
        $_USA = array('US','USA','United States');
        $_CANADA = array('CA','Canada');
        if (in_array($currentCountry, $_USA)) {
            $price = $this->mainprice->getProductPrice($product,self::BTB_USA,self::BTC_USA);
            $product->setPrice($price);
        } elseif(in_array($currentCountry, $_CANADA)){
            $price = $this->mainprice->getProductPrice($product,self::BTB_CANADA,self::BTC_CANADA);
            $product->setPrice($price);
        }else {
            $product->setPrice($product->getPrice());
        }
    }
}