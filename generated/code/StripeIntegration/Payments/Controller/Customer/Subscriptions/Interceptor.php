<?php
namespace StripeIntegration\Payments\Controller\Customer\Subscriptions;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Customer\Subscriptions
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Customer\Subscriptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Customer\Model\Session $session, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Subscriptions $subscriptionsHelper, \StripeIntegration\Payments\Model\SubscriptionFactory $subscriptionFactory, \Magento\Sales\Model\Order $order)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $session, $helper, $subscriptionsHelper, $subscriptionFactory, $order);
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
