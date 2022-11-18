<?php
namespace Mageplaza\SeoDashboard\Controller\Adminhtml\NoRoute\Resolve;

/**
 * Interceptor class for @see \Mageplaza\SeoDashboard\Controller\Adminhtml\NoRoute\Resolve
 */
class Interceptor extends \Mageplaza\SeoDashboard\Controller\Adminhtml\NoRoute\Resolve implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Backend\Model\View\Result\ForwardFactory $forwardFactory, \Mageplaza\SeoDashboard\Model\NoRouteFactory $noRouteFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $forwardFactory, $noRouteFactory);
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
