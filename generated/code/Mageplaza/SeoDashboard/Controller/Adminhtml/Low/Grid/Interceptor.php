<?php
namespace Mageplaza\SeoDashboard\Controller\Adminhtml\Low\Grid;

/**
 * Interceptor class for @see \Mageplaza\SeoDashboard\Controller\Adminhtml\Low\Grid
 */
class Interceptor extends \Mageplaza\SeoDashboard\Controller\Adminhtml\Low\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($resultLayoutFactory, $context);
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
