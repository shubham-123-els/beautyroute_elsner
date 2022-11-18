<?php

namespace Elsnertech\StorePrice\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Catalog\Model\ProductRepository;
use Elsnertech\ProductCustomization\Helper\Data;
use Elsnertech\StorePrice\Model\MainPrice;

class CustomPrice implements ObserverInterface
{
    const BTB_USA = 'b2b_usa';
    const BTC_USA = 'b2c_usa';
    const BTB_USA_DISCOUNT = 'b2b_united_state_discount';
    const BTC_USA_DISCOUNT = 'b2c_united_state_discount';
    const BTB_CANADA = 'b2b_canada';
    const BTC_CANADA = 'b2c_canada';
    const BTB_CANADA_DISCOUNT = 'b2b_canada_discount';
    const BTC_CANADA_DISCOUNT = 'b2c_canada_discount';

    public function __construct(
        ProductRepository $productRepository,
        Data $data,
        MainPrice $mainprice
    ) {
        $this->_productRepository = $productRepository;
        $this->data = $data;
        $this->mainprice = $mainprice;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $_USA = array('US','USA','United States');
        $_CANADA = array('CA','Canada');
        $item = $observer->getEvent()->getData('quote_item');
        $currentCountry = $this->data->getCountryName();
        $sku = $item->getData('sku');
        $product = $this->_productRepository->get($sku);
        if (in_array($currentCountry, $_USA)) {
            $price =  $this->mainprice->CheckoutPrice($item,$product,self::BTB_USA,self::BTC_USA,self::BTB_USA_DISCOUNT,self::BTC_USA_DISCOUNT);
            $item->setCustomPrice($price);
            $item->setOriginalCustomPrice($price);
            $item->getProduct()->setIsSuperMode(true);
        } elseif(in_array($currentCountry, $_CANADA)){
            $price = $this->mainprice->CheckoutPrice($item,$product,self::BTB_CANADA,self::BTC_CANADA,self::BTB_CANADA_DISCOUNT,self::BTC_CANADA_DISCOUNT);
            $item->setCustomPrice($price);
            $item->setOriginalCustomPrice($price);
            $item->setOriginalCustomPrice($price);
            $item->setCanadaPrice($price);
            $item->getProduct()->setIsSuperMode(true);
        } else {
            $product->setPrice($product->getPrice());
        }
    }
}