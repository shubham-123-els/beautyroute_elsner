<?php
namespace WeltPixel\FrameworkPro\Helper;

/**
 * Class Data
 * @package WeltPixel\FrameworkPro\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    protected $_scopeValue = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

    /**
     * @return string
     */
    public function getListItemsTemplate()
    {
        $templateName = 'Magento_Catalog::product/list/items.phtml';
        if ($this->isGoogleTagManagerProductClickTrackingEnabled() && $this->isOwlCarouselEnabled()) {
            $templateName = 'WeltPixel_FrameworkPro::product/list/items.phtml';
        } elseif ($this->isGoogleTagManagerProductClickTrackingEnabled()) {
            $templateName = 'WeltPixel_GoogleTagManager::product/list/items.phtml';
        } elseif ($this->isOwlCarouselEnabled()) {
            $templateName = 'WeltPixel_OwlCarouselSlider::product/list/items.phtml';
        }

        return $templateName;
    }

    /**
     * @return bool
     */
    public function isGoogleTagManagerProductClickTrackingEnabled()
    {
        return $this->_moduleManager->isEnabled('WeltPixel_GoogleTagManager') &&
            $this->scopeConfig->getValue('weltpixel_googletagmanager/general/enable', $this->_scopeValue) &&
            $this->scopeConfig->getValue('weltpixel_googletagmanager/general/product_click_tracking', $this->_scopeValue);
    }

    /**
     * @return bool
     */
    public function isOwlCarouselEnabled()
    {
        return $this->_moduleManager->isEnabled('WeltPixel_OwlCarouselSlider');
    }
}
