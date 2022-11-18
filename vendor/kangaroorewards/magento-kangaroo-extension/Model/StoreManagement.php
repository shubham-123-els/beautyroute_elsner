<?php
/**
 * Get store location info
 */
namespace Kangaroorewards\Core\Model;
use Kangaroorewards\Core\Api\StoreManagementInterface;

/**
 * Class StoreManagement
 *
 * @package Kangaroorewards\Core\Model
 */
class StoreManagement implements StoreManagementInterface
{
    private $_store;
    private $_storeManager;
    private $_regionFactory;
    private $_countryFactory;

    /**
     * StoreManagement constructor.
     *
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Store\Model\Information $storeInfo
     * @param \Magento\Directory\Model\RegionFactory $regionFactory
     * @param \Magento\Directory\Model\CountryFactory $countryFactory
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Store\Model\Information $storeInfo,
        \Magento\Directory\Model\RegionFactory $regionFactory,
        \Magento\Directory\Model\CountryFactory $countryFactory
    ) {
        $this->_store = $storeInfo;
        $this->_storeManager = $storeManager;
        $this->_regionFactory = $regionFactory;
        $this->_countryFactory = $countryFactory;
    }

    /**
     * Get store address, country info
     *
     * @return array
     */
    public function getStoreAddressInfo()
    {

        $stores = $this->_storeManager->getStores();
        $object = [];
        foreach ($stores as $store) {
            $info = $this->_store->getStoreInformationObject($store);
            $region = null;
            if ($info->getRegionId()) {
                $region = $this->_regionFactory->create()
                    ->load($info->getRegionId())->getName();
            }

            $country = null;
            if ($info->getCountryId()) {
                $countryName = $this->_countryFactory->create()
                    ->loadByCode($info->getCountryId())->getName();
                $country = array('title' => $countryName,
                    'code' => $info->getCountryId());
            }
            $object[] = array('name' => $store->getName(),
                'city' => $info['city'],
                'region' => $region,
                'country' => $country,
                'street' => $info['street_line1'],
                'zipcode' => $info['postcode'],
                'shopId' => $store->getId());
        }
        return $object;
    }
}
