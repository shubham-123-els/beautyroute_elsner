<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Connection\Disconnect;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Connection\Disconnect
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Connection\Disconnect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magenest\QuickBooksOnline\Model\Authenticate $authenticate, \Magento\Config\Model\Config $config, \Magento\Framework\App\Config\Storage\WriterInterface $writer, \Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\App\Cache\TypeListInterface $cacheType, \Magento\Framework\App\Cache\Frontend\Pool $cachePool)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $authenticate, $config, $writer, $resource, $cacheType, $cachePool);
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
