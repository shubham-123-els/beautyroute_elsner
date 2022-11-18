<?php

namespace MageArray\HidePrice\Helper;

/**
 * Class Data
 * @package MageArray\HidePrice\Helper
 */
/**
 * Class Data
 * @package MageArray\HidePrice\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * To check HidePrice Active 
     */
    const XML_PATH_HIDEPRICE_ACTIVE = 'hideprice/general/active';
    /**
     * To check HidePrice Display Text 
     */
    const XML_PATH_HIDEPRICE_DISPLAY_TEXT = 'hideprice/general/display_text';
    /**
     * To check HidePrice Url
     */
    const XML_PATH_HIDEPRICE_LINK_URL = 'hideprice/general/url';
    /**
     * To check HidePrice Enabled / Disabled
     */
    const XML_PATH_HIDEPRICE_ENABLE_CUSTOMER_GROUP =
        'hideprice/general/enable_customer_group';
    /**
     * To check HidePrice Customer Group
     */
    const XML_PATH_HIDEPRICE_CUSTOMER_GROUP =
        'hideprice/general/customer_group';
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function getIsActive($store = null)
    {

        return $this->scopeConfig->getValue(
            self::XML_PATH_HIDEPRICE_ACTIVE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    /**
     * @return mixed
     */
    public function getDisplayText($store = null)
    {

        return $this->scopeConfig
            ->getValue(
                self::XML_PATH_HIDEPRICE_DISPLAY_TEXT,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store
            );
    }

    /**
     * @return mixed
     */
    public function getLinkUrl($store = null)
    {
        return $this->scopeConfig
            ->getValue(
                self::XML_PATH_HIDEPRICE_LINK_URL,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store
            );
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupId($store = null)
    {
        return $this->scopeConfig
            ->getValue(
                self::XML_PATH_HIDEPRICE_CUSTOMER_GROUP,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store
            );
    }

    /**
     * @return mixed
     */
    public function getHideByCustomerGroup($store = null)
    {

        return $this->scopeConfig
            ->getValue(
                self::XML_PATH_HIDEPRICE_ENABLE_CUSTOMER_GROUP,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store
            );
    }
}
