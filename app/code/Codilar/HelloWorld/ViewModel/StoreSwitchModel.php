<?php

namespace Codilar\HelloWorld\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Locale\TranslatedLists;
use Magento\Framework\Url\EncoderInterface;
use Magento\Framework\UrlInterface;
use Magento\Store\Api\Data\StoreInterface;
use Magento\Store\Model\ResourceModel\Website\Collection as WebsiteCollection;
use Magento\Store\Model\ResourceModel\Website\CollectionFactory as WebsiteCollectionFactory;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Store\ViewModel\SwitcherUrlProvider;

class StoreSwitchModel extends SwitcherUrlProvider
{
    const LOCALE_CONFIG_PATH = 'general/locale/code';

    const DEFAULT_COUNTRY_CONFIG_PATH = 'general/country/default';

    private $websiteCollectionFactory;

    private $scopeConfig;

    private $translatedLists;

    private $storeManager;

    public function __construct(
        EncoderInterface $encoder,
        StoreManagerInterface $storeManager,
        UrlInterface $urlBuilder,
        WebsiteCollectionFactory $websiteCollectionFactory,
        ScopeConfigInterface $scopeConfig,
        TranslatedLists $translatedLists
    ) {
        parent::__construct($encoder, $storeManager, $urlBuilder);
        $this->websiteCollectionFactory = $websiteCollectionFactory;
        $this->scopeConfig = $scopeConfig;
        $this->translatedLists = $translatedLists;
        $this->storeManager = $storeManager;
    }

    public function getWebsite()
    {
        return $this->storeManager->getWebsite();
    }

    public function getWebsites(): WebsiteCollection
    {
        return $this->websiteCollectionFactory->create();
    }

    public function getStoreLocale(StoreInterface $store): string
    {
        $locale = $this->scopeConfig->getValue(self::LOCALE_CONFIG_PATH, ScopeInterface::SCOPE_STORE, $store->getId());

        return $locale;
    }

    public function getStoreCountryCode(StoreInterface $store): string
    {
        return $this->scopeConfig->getValue(
            self::DEFAULT_COUNTRY_CONFIG_PATH,
            ScopeInterface::SCOPE_STORE,
            $store->getId()
        );
    }
}
