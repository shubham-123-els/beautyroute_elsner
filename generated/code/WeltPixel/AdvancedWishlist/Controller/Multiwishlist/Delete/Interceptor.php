<?php
namespace WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Delete;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Delete
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($wishlistFactory, $customerSession, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
