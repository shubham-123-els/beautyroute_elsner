<?php
namespace Bss\Quickview\Controller\Wishlist\Add;

/**
 * Interceptor class for @see \Bss\Quickview\Controller\Wishlist\Add
 */
class Interceptor extends \Bss\Quickview\Controller\Wishlist\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Wishlist\Controller\WishlistProviderInterface $wishlistProvider, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Wishlist\Helper\Data $data)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $wishlistProvider, $productRepository, $formKeyValidator, $data);
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
