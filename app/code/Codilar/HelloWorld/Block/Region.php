<?php
namespace Codilar\HelloWorld\Block;

use Magento\Directory\Model\ResourceModel\Region\Collection;
use Magento\Directory\Model\ResourceModel\Region\CollectionFactory;
use Magento\Checkout\Model\Cart as CustomerCart;

class Region
{
    /**
     * @var Collection
     */
    private $collectionFactory;
    private $scopeConfig;

    public function __construct(
        CollectionFactory $collectionFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        CustomerCart $cart
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->scopeConfig = $scopeConfig;
        $this->cart = $cart;
    }

    /**
     * @param string $region
     * @return string[]
     */
    public function getRegionCode(string $region): array
    {
        $regionCode = $this->collectionFactory->create()
            ->addRegionNameFilter($region)
            ->getFirstItem()
            ->toArray();
        return $regionCode;
    }
    // public getAbc()
    // {
    //     return 'hel';
    // }
    public function getFreeShippingSubtotal()
    {
            return $this->scopeConfig->getValue('carriers/freeshipping/free_shipping_subtotal', 
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function getProductQtyCustom()
    {

        $counting = $this->cart->getSummaryQty();
        return $counting;
    }
    public function getSubtotalHtmlCustom()
    {
        $totals = $this->cart->getQuote()->getTotals();

        $subtotal = $totals['subtotal']['value'];
        return $subtotal;
    }
}
