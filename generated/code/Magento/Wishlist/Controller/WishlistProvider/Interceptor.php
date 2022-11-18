<?php
namespace Magento\Wishlist\Controller\WishlistProvider;

/**
 * Interceptor class for @see \Magento\Wishlist\Controller\WishlistProvider
 */
class Interceptor extends \Magento\Wishlist\Controller\WishlistProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\RequestInterface $request)
    {
        $this->___init();
        parent::__construct($wishlistFactory, $customerSession, $messageManager, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function getWishlist($wishlistId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWishlist');
        return $pluginInfo ? $this->___callPlugins('getWishlist', func_get_args(), $pluginInfo) : parent::getWishlist($wishlistId);
    }
}
