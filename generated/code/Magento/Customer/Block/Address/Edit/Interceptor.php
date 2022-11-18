<?php
namespace Magento\Customer\Block\Address\Edit;

/**
 * Interceptor class for @see \Magento\Customer\Block\Address\Edit
 */
class Interceptor extends \Magento\Customer\Block\Address\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\App\Cache\Type\Config $configCacheType, \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, array $data = [], ?\Magento\Customer\Api\AddressMetadataInterface $addressMetadata = null, ?\Magento\Customer\Helper\Address $addressHelper = null)
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $jsonEncoder, $configCacheType, $regionCollectionFactory, $countryCollectionFactory, $customerSession, $addressRepository, $addressDataFactory, $currentCustomer, $dataObjectHelper, $data, $addressMetadata, $addressHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        return $pluginInfo ? $this->___callPlugins('fetchView', func_get_args(), $pluginInfo) : parent::fetchView($fileName);
    }
}
