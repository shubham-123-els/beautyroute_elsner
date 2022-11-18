<?php
namespace Elsnertech\ProductCustomization\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magefan\GeoIp\Model\IpToCountryRepository;
use Magento\Directory\Model\CountryFactory;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;
use Magento\Catalog\Model\ProductRepository;
use Magento\Customer\Model\Session;
use Magento\Customer\Model\Group;
use Magento\Framework\App\Config\ScopeConfigInterface;

class CountryCode implements ArgumentInterface
{
    /**
     * Country finderGroup
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
        ProductRepository $productRepository,
        Session $customerSession,
        Group $customerGroupCollection,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_productRepository = $productRepository;
        $this->remoteAddress = $remoteAddress;
        $this->_countryFactory = $countryFactory;
        $this->ipToCountryRepository = $ipToCountryRepository;
        $this->customerSession = $customerSession;
        $this->_customerGroupCollection = $customerGroupCollection;
        $this->scopeConfig = $scopeConfig;
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
        $optionText = " ";
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
            return "No";
        }
    }

    public function getProductPrice($id) {
        $product = $this->_productRepository->getById($id);
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