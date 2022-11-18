<?php
namespace Magenest\QuickBooksOnline\Controller\Connection\Begin;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Connection\Begin
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Connection\Begin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magenest\QuickBooksOnline\Model\Authenticate $authenticate)
    {
        $this->___init();
        parent::__construct($context, $authenticate);
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
