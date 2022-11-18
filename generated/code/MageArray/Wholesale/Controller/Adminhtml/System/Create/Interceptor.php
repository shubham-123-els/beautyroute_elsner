<?php
namespace MageArray\Wholesale\Controller\Adminhtml\System\Create;

/**
 * Interceptor class for @see \MageArray\Wholesale\Controller\Adminhtml\System\Create
 */
class Interceptor extends \MageArray\Wholesale\Controller\Adminhtml\System\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Indexer\Model\Processor $processor, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Framework\Filter\FilterManager $filterManager)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $processor, $cacheFrontendPool, $resourceConfig, $filterManager);
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
