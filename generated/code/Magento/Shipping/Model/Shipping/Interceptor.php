<?php
namespace Magento\Shipping\Model\Shipping;

/**
 * Interceptor class for @see \Magento\Shipping\Model\Shipping
 */
class Interceptor extends \Magento\Shipping\Model\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Shipping\Model\Config $shippingConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Shipping\Model\CarrierFactory $carrierFactory, \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory, \Magento\Shipping\Model\Shipment\RequestFactory $shipmentRequestFactory, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\Framework\Math\Division $mathDivision, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, ?\Magento\Quote\Model\Quote\Address\RateRequestFactory $rateRequestFactory = null, ?\Magento\Shipping\Model\Rate\PackageResultFactory $packageResultFactory = null, ?\Magento\Shipping\Model\Rate\CarrierResultFactory $carrierResultFactory = null)
    {
        $this->___init();
        parent::__construct($scopeConfig, $shippingConfig, $storeManager, $carrierFactory, $rateResultFactory, $shipmentRequestFactory, $regionFactory, $mathDivision, $stockRegistry, $rateRequestFactory, $packageResultFactory, $carrierResultFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function collectCarrierRates($carrierCode, $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectCarrierRates');
        return $pluginInfo ? $this->___callPlugins('collectCarrierRates', func_get_args(), $pluginInfo) : parent::collectCarrierRates($carrierCode, $request);
    }
}
