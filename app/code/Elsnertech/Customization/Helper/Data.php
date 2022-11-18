<?php
namespace Elsnertech\Customization\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $_urlInterface;

    private $storeManager;

    private $_scopeConfig;

    public function __construct(
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Response\Http $HttpRedirect,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_urlInterface = $urlInterface;
        $this->_scopeConfig = $scopeConfig;
        $this->httpRedirect = $HttpRedirect;
        $this->storeManager = $storeManager;
    }
    
    public function getCurrentUrl()
    {
        return $this->_urlInterface->getCurrentUrl();
    }

    public function getBaseUrl()
    {
        return $this->_urlInterface->getBaseUrl();
    }

    public function getStoreName()
    {
        return $this->storeManager->getStore()->getName();
    }

    public function getwebConfig() {
        return $this->_scopeConfig->getValue("web/unsecure/base_url");
    }

    public function currentUrl() {
        return $this->storeManager->getStore()->getCurrentUrl();
    }
   
    public function getredirectBlogPage()
    {
        return $this->httpRedirect;
    }
}