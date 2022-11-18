<?php
namespace Magenest\QuickBooksOnline\Controller\Connection\Success;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Connection\Success
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Connection\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magenest\QuickBooksOnline\Model\Authenticate $authenticate, \Magento\Framework\App\Cache\TypeListInterface $cache, \Magento\Framework\App\Cache\Frontend\Pool $cachePool)
    {
        $this->___init();
        parent::__construct($context, $authenticate, $cache, $cachePool);
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
