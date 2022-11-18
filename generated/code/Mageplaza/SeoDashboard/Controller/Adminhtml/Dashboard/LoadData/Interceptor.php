<?php
namespace Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\LoadData;

/**
 * Interceptor class for @see \Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\LoadData
 */
class Interceptor extends \Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\LoadData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\SeoDashboard\Helper\Report $report)
    {
        $this->___init();
        parent::__construct($context, $report);
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
