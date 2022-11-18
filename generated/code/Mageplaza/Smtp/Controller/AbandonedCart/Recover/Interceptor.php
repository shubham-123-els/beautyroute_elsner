<?php
namespace Mageplaza\Smtp\Controller\AbandonedCart\Recover;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\AbandonedCart\Recover
 */
class Interceptor extends \Mageplaza\Smtp\Controller\AbandonedCart\Recover implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Mageplaza\Smtp\Helper\Data $helperData, \Magento\Quote\Model\ResourceModel\Quote\Collection $quoteCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($context, $helperData, $quoteCollection, $storeManager, $customerSession, $checkoutSession);
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
