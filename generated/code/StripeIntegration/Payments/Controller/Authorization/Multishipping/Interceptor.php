<?php
namespace StripeIntegration\Payments\Controller\Authorization\Multishipping;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Authorization\Multishipping
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Authorization\Multishipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \StripeIntegration\Payments\Helper\Generic $helper, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $helper, $customerSession);
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
