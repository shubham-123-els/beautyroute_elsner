<?php
namespace Elsnertech\Customization\Model\Plugin;

class Shipping
{
    protected $product;
 
    public function __construct(
        \Magento\Catalog\Model\ProductFactory $product
    ) {
        $this->product = $product;
    }
 
    public function aroundCollectCarrierRates(
        \Magento\Shipping\Model\Shipping $subject,
        \Closure $proceed,
        $carrierCode,
        $request
    ) {
        $allItems = $request->getAllItems();
        foreach ($allItems as $item) {    
            $_product = $this->product->create()->load($item->getProduct()->getId());
            if ($_product->getNoFreeShipping()) {
                $noFreeShipping = true;
                break;
            }
        }
        // getBaseSubtotalWithDiscountInclTax

        $DiscountAmount = $request->getDiscountAmount();
        $subtotal = $request->getBaseSubtotalInclTax()-$DiscountAmount;
        if ($carrierCode == 'freeshipping') {
            if ($request->getDestCountryId() == 'US') {
                return false;
            } 
            if ($request->getDestCountryId() == 'CA' && $request->getBaseSubtotalWithDiscountInclTax() < 75) {
                return false;
            } 
        }

        if ($carrierCode == 'flatrate') {
            if ($request->getDestCountryId() == 'CA' && $request->getBaseSubtotalWithDiscountInclTax() > 75) {
                return false;
            } 
        }
    
        $result = $proceed($carrierCode, $request);
        return $result;
    }
}