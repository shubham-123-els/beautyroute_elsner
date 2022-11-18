<?php 
namespace Elsnertech\Customization\Block\Cart;

use Magento\Backend\Block\Template\Context;
use Magento\Checkout\Model\Cart;
use Magento\Framework\Pricing\Helper\Data as PricingHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use BeautyCustom\RouteReview\Helper\CommonHepler;

class CustomShipping extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Cart $cart
     */
    protected $cart;
    
    /**
     * @var PricingHelper $pricingHelper
     */
    protected $pricingHelper;

    /**
     * @var ScopeConfigInterface $scopeConfig
     */
    private $scopeConfig;

    /**
     * @var Registry $registry
     */
    protected $registry;

    /**
     * @var CommonHepler $commonHepler
     */
    protected $commonHepler;

    /**
     * @param Context $context
     * @param Cart $cart
     * @param PricingHelper $pricingHelper
     * @param ScopeConfigInterface $scopeConfig
     * @param Registry $registry
     * @param CommonHepler $commonHepler
     * @param array $data
     */
	public function __construct(
        Context $context,
        Cart $cart,
        PricingHelper $pricingHelper,
        ScopeConfigInterface $scopeConfig,
        Registry $registry,
        CommonHepler $commonHepler,
        array $data = []
	) {
        $this->cart = $cart;
        $this->pricingHelper = $pricingHelper;
        $this->scopeConfig = $scopeConfig;
        $this->registry = $registry;
        $this->commonHepler = $commonHepler;
        parent::__construct($context, $data);
	}

    /**
     * @return float
     */
    public function getMinimumOrderAmountForFreeShip()
    {
        return $this->scopeConfig->getValue('countryshipping/general/price', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getMinimumOrderAmountForFreeShipCheckout()
    {
        return $this->scopeConfig->getValue('countryshipping/general/price', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getBaseCurrencyCode()
    {
        return $this->_storeManager->getStore()->getCurrentCurrencyCode();
    }

    public function getCurrentCurrency()
    {   
        $currentcurrency = $this->_storeManager->getStore()->getCurrentCurrency()->getCode();
        if ($currentcurrency=="USD") {
            $currency = "US";
        } else {
            $currency = "CA";
        }
        return $currency;
    }

    public function getCurrentProduct()
    {        
       return $this->registry->registry('current_product');
    } 

    public function getCartGrandTotal()
    {
        $grandTotal = $this->cart->getQuote()->getGrandTotal();
        return round($grandTotal,2);
    }

    public function getCartCountry()
    {
        $country = $this->cart->getQuote();
        return $country->getShippingAddress()->getCountryId();
    }

    public function getCartSubTotal()
    {
        return $this->cart->getQuote()->getSubtotal();
    }

    public function getCurrencySymbol()
    {
        return $this->commonHepler->getCurrencySymbol();
    }

    public function getStoreCode()
    {
        return $this->_storeManager->getStore()->getCode();
    }

    public function getMediaUrl()
    {
        $mediaUrl = $this->_storeManager
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }

    public function getShipPrice($minimumFreeShippingAmount)
    {
        return str_replace(array('$US','$'),array('',''), $this->pricingHelper->currency($minimumFreeShippingAmount, true, false));
    }

    public function getShipPriceAtDetailPage($minimumFreeShippingAmount, $currencysymbol)
    {
        return str_replace(array($currencysymbol),array(''),$this->pricingHelper->currency($minimumFreeShippingAmount, true,false));
    }

    public function getProductPrice($currencysymbol, $productPrice)
    {
        return str_replace(array($currencysymbol),array(''),$this->pricingHelper->currency($productPrice, true,false));
    }
    
    public function getNewPrice($minimumFreeShippingAmount, $cartprice)
    {
        return str_replace(',','.',$minimumFreeShippingAmount) - str_replace(',','.',$cartprice);
    }
}
