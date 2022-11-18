<?php
namespace Magento\Wishlist\CustomerData\Wishlist;

/**
 * Interceptor class for @see \Magento\Wishlist\CustomerData\Wishlist
 */
class Interceptor extends \Magento\Wishlist\CustomerData\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Wishlist\Block\Customer\Sidebar $block, \Magento\Catalog\Helper\ImageFactory $imageHelperFactory, \Magento\Framework\App\ViewInterface $view, ?\Magento\Catalog\Model\Product\Configuration\Item\ItemResolverInterface $itemResolver = null)
    {
        $this->___init();
        parent::__construct($wishlistHelper, $block, $imageHelperFactory, $view, $itemResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionData');
        return $pluginInfo ? $this->___callPlugins('getSectionData', func_get_args(), $pluginInfo) : parent::getSectionData();
    }
}
