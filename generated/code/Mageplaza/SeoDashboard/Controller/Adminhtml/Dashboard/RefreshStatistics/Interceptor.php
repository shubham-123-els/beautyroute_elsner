<?php
namespace Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\RefreshStatistics;

/**
 * Interceptor class for @see \Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\RefreshStatistics
 */
class Interceptor extends \Mageplaza\SeoDashboard\Controller\Adminhtml\Dashboard\RefreshStatistics implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, array $reportTypes, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $dateFilter, $reportTypes, $logger);
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
