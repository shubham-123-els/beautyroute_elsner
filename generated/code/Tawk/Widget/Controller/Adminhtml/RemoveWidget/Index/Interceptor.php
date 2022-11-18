<?php
namespace Tawk\Widget\Controller\Adminhtml\RemoveWidget\Index;

/**
 * Interceptor class for @see \Tawk\Widget\Controller\Adminhtml\RemoveWidget\Index
 */
class Interceptor extends \Tawk\Widget\Controller\Adminhtml\RemoveWidget\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Tawk\Widget\Model\WidgetFactory $modelFactory, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($modelFactory, $context, $resultJsonFactory, $logger);
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
