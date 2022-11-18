<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\Methods\Sync;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\Methods\Sync
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Payment\Methods\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magenest\QuickBooksOnline\Model\Synchronization\PaymentMethods $paymentMethods, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $paymentMethods, $scopeConfig);
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
