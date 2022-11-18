<?php

namespace Elsnertech\ProductCustomization\Helper;  

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magefan\GeoIp\Model\IpToCountryRepository;
use Magento\Directory\Model\CountryFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;
use Magento\Catalog\Model\ProductRepository;
use Magento\Customer\Model\Session;
use Magento\Customer\Model\Group;
use Magento\Framework\Registry;

class Data extends AbstractHelper
{
    /**
     * Country finder
     *
     * @var ipToCountryRepository
     */
    protected $ipToCountryRepository;

    /**
     * product info
     *
     * @var _productRepository
     */
    protected $_productRepository;
    
    /**
     * product info
     *
     * @var customerSession
     */
    protected $customerSession;
    /**
     * cusomer group
     *
     * @var _customerGroupCollection
     */
    protected $_customerGroupCollection;


    /**
     * Custom Country finder
     *
     * @param \Magefan\GeoIp\Model\IpToCountryRepository $ipToCountryRepository
     * @param \Magento\Directory\Model\CountryFactory $countryFactory
     * @param \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress
     * @param \Magento\Catalog\Model\ProductRepository $productRepository
     * @param \Magento\Catalog\Model\Session $customerSession
     * @param \Magento\Catalog\Model\Group $customerGroupCollection
     * 
     */
    public function __construct(
        IpToCountryRepository $ipToCountryRepository,
        CountryFactory $countryFactory,
        RemoteAddress $remoteAddress,
        ScopeConfigInterface $scopeConfig,
        ProductRepository $productRepository,
        Session $customerSession,
        Group $customerGroupCollection,
        Registry $registry
    ) {
        $this->_productRepository = $productRepository;
        $this->remoteAddress = $remoteAddress;
        $this->scopeConfig = $scopeConfig;
        $this->_countryFactory = $countryFactory;
        $this->ipToCountryRepository = $ipToCountryRepository;
        $this->customerSession = $customerSession;
        $this->_customerGroupCollection = $customerGroupCollection;
        $this->registry = $registry;
    }
    
    /**
     * get country Name
     *
     * @return getCountryName
     */
    public function getCountryName() {
        $visitorCountyCode = $this->ipToCountryRepository->getVisitorCountryCode();
        $ip = $this->remoteAddress->getRemoteAddress();
        $someCountryCodeByIp = $this->ipToCountryRepository->getCountryCode($ip);
        // echo $someCountryCodeByIp;exit;
        $country = $this->_countryFactory->create()->loadByCode($someCountryCodeByIp);
        return $country->getName();
    }

    /**
     * get product country
     *
     * @param getProductCountry $id
     * @return void
     */
    public function getAttributeOpetion($id,$att_code) {
        $product = $this->_productRepository->getById($id);
        $country = $product->getData($att_code);
        $attribute = $product->getResource()->getAttribute($att_code);
        if ($attribute->usesSource()) {
            $optionText = $attribute->getSource()->getOptionText($country);
        }
        return $optionText;
    }

    public function getCurrentCustomeType() {
        if ($this->customerSession->isLoggedIn()) {
            $currentGroupId = $this->customerSession->getCustomer()->getGroupId();
            $collection = $this->_customerGroupCollection->load($currentGroupId); 
            return $collection->getCustomerGroupCode();
        } else {
            return "Not Login";
        }
    }

    public function getCurrentCustomeId() {
        if ($this->customerSession->isLoggedIn()) {
            $currentGroupId = $this->customerSession->getCustomer()->getGroupId();
            return $currentGroupId;
        } else {
            return "Not Login";
        }
    }

    public function getCurrentProduct() {
        return $this->registry->registry('current_product');
    }

    public function getProfessionalText() {
        return $customerGroup = $this->scopeConfig->getValue("home/customers/display_text");
    }

    public function getProfessionalCustomer() {
        return $ProfessionalCustomer = $this->scopeConfig->getValue("home/customers/customer_group_list");
    }

    public function getCurrentCustomeGroup($code) {
        $currentGroupId = explode(",",$code);
        if ($this->customerSession->isLoggedIn()) {
            foreach ($currentGroupId as $group) {
                $collection = $this->_customerGroupCollection->load($group); 
                $customerGroup[] = $collection->getCustomerGroupCode();
            }
            return $customerGroup;
        } else {
            return "Not Login";
        }
    }
    
}