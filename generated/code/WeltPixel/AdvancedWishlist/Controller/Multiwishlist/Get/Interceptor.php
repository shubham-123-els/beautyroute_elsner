<?php
namespace WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Get;

/**
 * Interceptor class for @see \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Get
 */
class Interceptor extends \WeltPixel\AdvancedWishlist\Controller\Multiwishlist\Get implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\AdvancedWishlist\Model\MultipleWishlistProvider $multipleWishlistProvider, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($multipleWishlistProvider, $customerSession, $context);
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
