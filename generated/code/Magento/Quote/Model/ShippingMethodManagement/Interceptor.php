<?php
namespace Magento\Quote\Model\ShippingMethodManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\ShippingMethodManagement
 */
class Interceptor extends \Magento\Quote\Model\ShippingMethodManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\Cart\ShippingMethodConverter $converter, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, ?\Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory = null, ?\Magento\Quote\Model\ResourceModel\Quote\Address $quoteAddressResource = null, ?\Magento\Customer\Model\Session $customerSession = null)
    {
        $this->___init();
        parent::__construct($quoteRepository, $converter, $addressRepository, $totalsCollector, $addressFactory, $quoteAddressResource, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function estimateByAddress($cartId, \Magento\Quote\Api\Data\EstimateAddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'estimateByAddress');
        return $pluginInfo ? $this->___callPlugins('estimateByAddress', func_get_args(), $pluginInfo) : parent::estimateByAddress($cartId, $address);
    }

    /**
     * {@inheritdoc}
     */
    public function estimateByExtendedAddress($cartId, \Magento\Quote\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'estimateByExtendedAddress');
        return $pluginInfo ? $this->___callPlugins('estimateByExtendedAddress', func_get_args(), $pluginInfo) : parent::estimateByExtendedAddress($cartId, $address);
    }

    /**
     * {@inheritdoc}
     */
    public function estimateByAddressId($cartId, $addressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'estimateByAddressId');
        return $pluginInfo ? $this->___callPlugins('estimateByAddressId', func_get_args(), $pluginInfo) : parent::estimateByAddressId($cartId, $addressId);
    }
}
