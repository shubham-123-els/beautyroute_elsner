<?php
namespace BeautyCustom\RouteReview\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;

class CommonHepler extends AbstractHelper
{
    protected $request;

    protected $_productAttributeRepository;

    protected $_registry;

    protected $_customerRepository;

    protected $filterBuilder;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    protected $_shopbrandFactory;
    
    protected $priceCurrency;

    protected $productAttributeRepositoryInterface;

    /**
     * Fonts constructor.
     * @param Context $context
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        FilterBuilder $filterBuilder,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        ProductRepositoryInterface $productRepository,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Catalog\Model\Product\Attribute\Repository $productAttributeRepository,
        \Magento\Framework\Registry $registry,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magiccart\Shopbrand\Model\ShopbrandFactory $shopbrandFactory,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Catalog\Api\ProductAttributeRepositoryInterface $productAttributeRepositoryInterface,
        PriceCurrencyInterface $priceCurrency
    ) {
        parent::__construct($context);
        $this->request = $request;
        $this->_productAttributeRepository = $productAttributeRepository;
        $this->_registry = $registry;
        $this->_customerRepository = $customerRepository;
        $this->filterBuilder = $filterBuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->productRepository = $productRepository;
        $this->storeManager = $storeManager;
        $this->_shopbrandFactory = $shopbrandFactory;
        $this->priceCurrency = $priceCurrency;
        $this->productAttributeRepositoryInterface = $productAttributeRepositoryInterface;
    }

    /**
     * @return string
     */
    public function getParamvalue()
    {
        return $params = $this->request->getParams();
    }

    /**
     * Return  file url
     * @return string
     */
    public function getFileUrl()
    {
        try {
            return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        } catch (NoSuchEntityException $e) {
            return '';
        }
    }

    public function getBrandCollection()
    {
        $store       = $this->storeManager->getStore()->getStoreId();
        $collection  = $this->_shopbrandFactory->create()->getCollection()
                        ->addFieldToFilter('stores', [ ['finset' => 0], ['finset' => 3]])
                        ->addFieldToFilter('status', 1);

        if ($collection->getSize()) {
            $optionBrandIds   = [];
            $manufactorerList = $this->getManufactorerList();
             
            foreach ($collection->getData() as $key => $brandmenu) {

                foreach ($manufactorerList as $manufactor) {
                    if ($manufactor[1]    == $brandmenu['option_id']) {
                        $optionBrandIds[] = [$manufactor[0],$brandmenu['urlkey']];
                    }
                }
            }

            $this->getSortedMegaMenus($optionBrandIds);
            return $optionBrandIds;
        }
        return false;
    }

    public function getStoreId()
    {
        try {
            return $this->storeManager->getStore()->getId();
        } catch (NoSuchEntityException $e) {
            return '';
        }
    }

    public function getManufactorerList()
    {
        /** @var \Magento\Catalog\Api\Data\ProductAttributeInterface $attribute */
        $attribute = $this->productAttributeRepositoryInterface->get('manufacturer')->setStoreId($this->getStoreId());

        if ($attribute->getOptions()) {
            foreach ($attribute->getOptions() as $option) {
                 $manufactorer[] = [$option->getLabel(),$option->getValue()];
            }
            return $manufactorer;
        }
        return false;
    }

    private function getSortedMegaMenus($sotedMegaMenus = [])
    {
        $AG  =['a','b','c'];
        if ($sotedMegaMenus) {
            foreach ($sotedMegaMenus as $menus) {
                $test=$menus[0];
                if (in_array(strtolower($test[0]), $AG) ==true) {
                    return strtolower($test[0]).'<br>';
                }
            }
        }
    }
    public function getBrandWidgetCollection()
    {
        $store       = $this->storeManager->getStore()->getStoreId();
        $collection  = $this->_shopbrandFactory->create()->getCollection()
                        ->addFieldToFilter('stores', [ ['finset' => 0], ['finset' => 3]])
                        ->addFieldToFilter('status', 1);

        if ($collection->getSize()) {
            return $collection->getData();
        }
        return false;
    }

    public function getCurrencySymbol()
    {
        // USE STORE ID
        $currencySymbol = $this->priceCurrency->getCurrencySymbol($this->getStoreId());

        return $currencySymbol;
    }
}
