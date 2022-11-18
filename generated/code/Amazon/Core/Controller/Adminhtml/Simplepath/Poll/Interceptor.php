<?php
namespace Amazon\Core\Controller\Adminhtml\Simplepath\Poll;

/**
 * Interceptor class for @see \Amazon\Core\Controller\Adminhtml\Simplepath\Poll
 */
class Interceptor extends \Amazon\Core\Controller\Adminhtml\Simplepath\Poll implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amazon\Core\Model\Config\SimplePath $simplePath, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, ?\Amazon\Core\Logger\ExceptionLogger $exceptionLogger = null)
    {
        $this->___init();
        parent::__construct($context, $simplePath, $scopeConfig, $jsonResultFactory, $exceptionLogger);
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
