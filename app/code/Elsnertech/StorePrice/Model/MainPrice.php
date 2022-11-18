<?php
namespace Elsnertech\StorePrice\Model;
use Elsnertech\ProductCustomization\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Stdlib\DateTime\DateTimeFactory;
use Magento\Framework\ObjectManagerInterface;

class MainPrice extends \Magento\Framework\Model\AbstractModel
{
    public function __construct(
        \Magento\Framework\Model\Context $context,
        Data $data,
        ScopeConfigInterface $scopeConfig,
        GroupRepositoryInterface $groupRepository,
        StoreManagerInterface $storeManager,
        PriceCurrencyInterface $priceCurrency,
        DateTimeFactory $dateTimeFactory,
        ObjectManagerInterface $objectmanager
    ) {
        $this->data = $data;
        $this->scopeConfig = $scopeConfig;
        $this->groupRepository = $groupRepository;
        $this->storeManager = $storeManager;
        $this->priceCurrency = $priceCurrency;
        $this->dateTimeFactory = $dateTimeFactory;
        $this->objectManager = $objectmanager;
    }

    public function getProductPrice($product ,$B2B,$B2C){
        $customerGroup = $this->scopeConfig->getValue("home/customers/customer_group_list");
        $customerGroup = explode(',', $customerGroup);
        foreach ($customerGroup as $group) {
            $group = $this->groupRepository->getById($group);
            $groupcode[] = $group->getCode();
        }
        $currentLoginCustomer = $this->data->getCurrentCustomeType();
        if (in_array($currentLoginCustomer, $groupcode)) {
            $productPrice = $product[$B2B];
            if (empty($productPrice) or $productPrice==NULL) {
                $productPrice = $product->getPrice();
            }
            return $productPrice;
        } else {
            $productPrice = $product[$B2C];
            if (empty($productPrice) or $productPrice==NULL) {
                $productPrice = $product->getPrice();
            }
            return $productPrice;
        }
    }

    public function CheckoutPrice($item,$product,$B2B,$B2C,$B2BD,$B2CD) {
        $productId = $product->getId();
        $storeId = $product->getStoreId();
        $customerGroup = $this->scopeConfig->getValue("home/customers/customer_group_list");
        $customerGroup = explode(',', $customerGroup);
        $currency = $this->storeManager->getStore()->getCurrentCurrencyCode();        
        $store = $this->storeManager->getStore($storeId);
        $websiteId = $store->getWebsiteId();
        foreach ($customerGroup as $group) {
            $group = $this->groupRepository->getById($group);
            $groupcode[] = $group->getCode();
        }
        $currentLoginCustomer = $this->data->getCurrentCustomeType();
        if (in_array($currentLoginCustomer, $groupcode)) {
            $productPrice = $product[$B2B];
            $discuntproductPrice = $product[$B2BD];
            if (empty($productPrice) or $productPrice==NULL) {
                $productPrice = $product->getPrice();
            }
            if($currency=="USD"){
                $productPrice = $this->convertPrice($productPrice);
                $usaprice = $this->convertPrice($discuntproductPrice);
            }
            if (!empty($discuntproductPrice)) {
                $productPrice = $productPrice-$discuntproductPrice;
            }
            return $productPrice;
        } else {           
            $productPrice = $product[$B2C];
            $discuntproductPrice = $product[$B2CD];
            if (empty($productPrice) or $productPrice==NULL) {
                $productPrice = $product->getPrice();
            }
            if($currency=="USD"){
                $productPrice = $this->convertPrice($productPrice);
                $usaprice = $this->convertPrice($discuntproductPrice);
            }
            if (!empty($discuntproductPrice)) {
                $productPrice = $productPrice-$discuntproductPrice;
            }
            return $productPrice;
            }    
        }

        public function convertPrice($amount, $store = null, $currency = "USD") {
            $store = $this->storeManager->getStore()->getStoreId();
            return $rate = $this->priceCurrency->convert($amount, $store, 'USD');
        }

        public function getProductId($sku) {
            echo $sku;
        }


}
