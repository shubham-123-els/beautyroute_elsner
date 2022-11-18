<?php
namespace Amazon\Core\Controller\Simplepath\Listener;

/**
 * Interceptor class for @see \Amazon\Core\Controller\Simplepath\Listener
 */
class Interceptor extends \Amazon\Core\Controller\Simplepath\Listener implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \Amazon\Core\Model\Config\SimplePath $simplepath, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, ?\Amazon\Core\Logger\ExceptionLogger $exceptionLogger = null)
    {
        $this->___init();
        parent::__construct($context, $jsonResultFactory, $simplepath, $scopeConfig, $exceptionLogger);
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
