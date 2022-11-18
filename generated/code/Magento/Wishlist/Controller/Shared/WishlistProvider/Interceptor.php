<?php
namespace Magento\Wishlist\Controller\Shared\WishlistProvider;

/**
 * Interceptor class for @see \Magento\Wishlist\Controller\Shared\WishlistProvider
 */
class Interceptor extends \Magento\Wishlist\Controller\Shared\WishlistProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($request, $wishlistFactory, $checkoutSession);
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
