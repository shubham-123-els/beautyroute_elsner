<?php
namespace Klaviyo\Reclaim\Controller\Checkout\Cart;

/**
 * Interceptor class for @see \Klaviyo\Reclaim\Controller\Checkout\Cart
 */
class Interceptor extends \Klaviyo\Reclaim\Controller\Checkout\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Cart $cart, \Magento\Framework\App\Action\Context $context, \Magento\Quote\Model\QuoteRepository $quoteRepository, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($cart, $context, $quoteRepository, $quoteIdMaskFactory);
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
