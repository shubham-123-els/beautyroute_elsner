<?php
namespace Mageplaza\FreeGifts\Controller\Gift\Add;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Gift\Add
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Gift\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Mageplaza\FreeGifts\Helper\Rule $helperRule, \Magento\Checkout\Model\Cart $cart, \Magento\Framework\Registry $registry, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Controller\Result\Json $json, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Checkout\Model\Cart\RequestInfoFilterInterface $requestInfoFilter)
    {
        $this->___init();
        parent::__construct($context, $helperRule, $cart, $registry, $checkoutSession, $json, $stockRegistry, $requestInfoFilter);
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
