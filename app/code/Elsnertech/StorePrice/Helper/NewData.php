<?php
namespace Elsnertech\StorePrice\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Elsnertech\ProductCustomization\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Registry;
use Magento\Customer\Model\Group;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Locale\CurrencyInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Block\Product\Context as ProductContext;

class NewData extends AbstractHelper
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
        \Magento\Framework\Model\Context $context,
        Data $data,
        ScopeConfigInterface $scopeConfig,
        GroupRepositoryInterface $groupRepository,
        StoreManagerInterface $storeManager,
        PriceCurrencyInterface $priceCurrency,
        Registry $registry,
        Http $request,
        Session $customerSession,
        Group $customerGroupCollection,
        CurrencyInterface $localeCurrency,
        ProductFactory $productFactory,
        ListProduct $listproduct,
        ProductContext $imageBuilder
    ) {
        $this->data = $data;
        $this->scopeConfig = $scopeConfig;
        $this->groupRepository = $groupRepository;
        $this->storeManager = $storeManager;
        $this->priceCurrency = $priceCurrency;
        $this->registry = $registry;
        $this->request = $request;
        $this->customerSession = $customerSession;
        $this->_customerGroupCollection = $customerGroupCollection;
        $this->localecurrency = $localeCurrency;
        $this->productFactory = $productFactory;
        $this->listproduct = $listproduct;
        $this->imageBuilder = $imageBuilder->getImageBuilder();
    }

    public function productInfo($id) {
        $product = $this->productFactory->create()->load($id); 
        if (!empty($product->getData('thumbnail'))) {
            return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)."catalog/product".$product->getData('thumbnail');              
        } 
    }

    public function getCart($_product) {
        return $this->listproduct->getAddToCartUrl($_product);
    }

    public function countryName() {
        return $currentCountry = $this->data->getCountryName();        
    }

    public function getProductPrice($sku){
        $controller = $this->request->getControllerName();
        $action  = $this->request->getActionName();
        $route   = $this->request->getRouteName();
        $layout = $controller.'_'.$action.'_'.$route;
        if ($layout=="product_view_catalog") {
            $product = $this->getCurrentProduct();
        } else {
            $product = $this->productFactory->create();
            $product = $product->load($sku);
        }
        $currentCountry = $this->data->getCountryName();
        if ($currentCountry=="United States") {
            return (float)$price =  $this->CheckoutPrice($ite=false,$product,self::BTB_USA,self::BTC_USA,self::BTB_USA_DISCOUNT,self::BTC_USA_DISCOUNT);
        } elseif($currentCountry=="Canada"){
            return (float)$price = $this->CheckoutPrice($item=false,$product,self::BTB_CANADA,self::BTC_CANADA,self::BTB_CANADA_DISCOUNT,self::BTC_CANADA_DISCOUNT);
        } else {
            return $product->getPrice();
        }
    }

    public function getImage(Product $product, $imageId, $attributes = []) {
        return $this->imageBuilder->create($product, $imageId, $attributes);
    }


    public function getDetailsProductPrice($product){
        $currentCountry = $this->data->getCountryName();
        $customer_type = $this->getCurrentCustomeType();
        if ($currentCountry=="United States") {
            if ($customer_type=="Salon") {
                return $product->getData('b2b_usa');
            } else {
                return $product->getData('b2c_usa');
            }
        } elseif($currentCountry=="Canada"){
            if ($customer_type=="Salon") {
                return $product->getData('b2b_canada');
            } else {
                return $product->getData('b2c_canada');
            }
        } else {
            return $product->getPrice();
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

    public function CurrentStore() {
        return $store = $this->storeManager->getStore()->getName();
    }

    public function newconvertPrice($amount, $store = null, $currency = "USD") {
        if ($this->getStoreCurrency()=="US$") {
            $store = $this->storeManager->getStore()->getStoreId();
            return $rate = $this->priceCurrency->convert($amount, $store, 'USD');
        } else {
            return $amount;
        }
    }
    
    public function getCurrentProduct() {
        return $this->registry->registry('current_product');
    }

    public function getStoreCurrency() {
        $currencyCode = $this->storeManager->getStore()->getCurrentCurrency();
        $code = $currencyCode->getData('currency_code'); 
        return $this->localecurrency->getCurrency($code)->getSymbol();
    }
    
    public function getCureentDiscountType($id) {
        $customerGroup = $this->scopeConfig->getValue("home/customers/customer_group_list");
        $customerGroup = explode(',', $customerGroup);
        foreach ($customerGroup as $group) {
            $group = $this->groupRepository->getById($group);
            $groupcode[] = $group->getCode();
        }
        $product = $this->productFactory->create();
        $product = $product->load($id);
        $code = "";
        if ($this->countryName()=="United States") {
            $currentLoginCustomer = $this->data->getCurrentCustomeType();
            if ($currentLoginCustomer=="Salon") { 
                return $this->PriceCode($currentLoginCustomer, $groupcode ,self::BTB_USA_DISCOUNT ,self::BTB_USA,$product);
            } else {
                return $this->PriceCode($currentLoginCustomer, $groupcode ,self::BTC_USA_DISCOUNT,self::BTC_USA,$product);
            }
        } elseif ($this->countryName()=="Canada") {
            $currentLoginCustomer = $this->data->getCurrentCustomeType();
            if ($currentLoginCustomer=="Salon") {  
                return $this->PriceCode($currentLoginCustomer, $groupcode ,self::BTB_CANADA_DISCOUNT ,self::BTB_CANADA,$product);
            } else {
                return $this->PriceCode($currentLoginCustomer, $groupcode ,self::BTC_CANADA_DISCOUNT,self::BTC_CANADA,$product);
            } 
        }
    }

    public function PriceCode($currentLoginCustomer, $groupcode, $code, $customercode, $product) {
        $price = $product->getData($customercode);
        $discount = $product->getData($code);
        $total = $price-$discount;
        if(!empty($discount) && $total<$price && $total>0){
            return $code;
        }
    }
    
    public function ProdoctDiscountCode($id ,$code) {
        $product = $this->productFactory->create();
        $product = $product->load($id);
        $discount =  $product->getData($code);
        return $discount;
    }

    public function getCurrentCustomeType() {
        if ($this->customerSession->isLoggedIn()) {
            $currentGroupId = $this->customerSession->getCustomer()->getGroupId();
            $collection = $this->_customerGroupCollection->load($currentGroupId); 
            return $collection->getCustomerGroupCode();
        } else {
            return "No";
        }
    }

    public function getProfessionalText() {
        return $customerGroup = $this->scopeConfig->getValue("home/customers/display_text");
    }

    public function getProfessionalCustomer() {
        return $ProfessionalCustomer = $this->scopeConfig->getValue("home/customers/customer_group_list");
    }


    public function getAttributeOpetion($id,$att_code) {
        $optionText = " ";
        $product = $this->productFactory->create()->load($id);
        $country = $product->getData($att_code);
        $attribute = $product->getResource()->getAttribute($att_code);
        if ($attribute->usesSource()) {
            $optionText = $attribute->getSource()->getOptionText($country);
        }
        return $optionText;
    }

}
