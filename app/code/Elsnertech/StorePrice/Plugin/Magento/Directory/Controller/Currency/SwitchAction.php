<?php
namespace Elsnertech\StorePrice\Plugin\Magento\Directory\Controller\Currency;

class SwitchAction
{
    public function __construct(
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory,
		\Magento\Checkout\Model\Cart $cart)
	{
		$this->cart = $cart;
        $this->priceCurrency = $priceCurrency;
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->storeManager = $storeManager;
	}

    /**
     * @return void
     */
    public function beforeExecute()
    {    
        $resultRedirect = $this->resultRedirectFactory->create();
        $quote = $this->cart->getQuote()->getItemsCollection();
        $currency = $this->storeManager ->getStore()->getCurrentCurrencyCode();
        if ($currency=="USD") {
            $currency = "CAD";
        } else {
            $currency = "USD";
        }
        foreach ($quote as $post) {
            $baseprice = $post->getBasePrice();
            if ($currency=="CAD") {
                $convertprice = $post->getCanadaPrice();
            } 
            if ($currency=="USD"){
                $convertprice = $this->convertPrice($baseprice,"",$currency);
            }
            // $logger->info($convertprice);
            $post->setPrice($convertprice);
            $post->setBasePrice($convertprice);
            $post->setRowTotal($convertprice);
            $post->setCustomPrice($convertprice);
            $post->setOriginalCustomPrice($convertprice);
            $post->setBaseRowTotal($convertprice);
            $post->save();
        }

        if ($currency) {
            $this->storeManager->getStore()->setCurrentCurrencyCode($currency);
        }
        $storeUrl = $this->storeManager->getStore()->getBaseUrl();
        $resultRedirect->setPath($storeUrl);
        return $resultRedirect;
    }

    public function convertPrice($amount, $store = null, $currency) {
        $store = $this->storeManager->getStore()->getStoreId();
        return $rate = $this->priceCurrency->convert($amount, $store, $currency);
    }
}
