<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Ajax;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Ajax
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Ajax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Framework\UrlFactory $urlFactory, \Amasty\Feed\Model\ValidProduct\ResourceModel\CollectionFactory $collectionFactory, \Amasty\Feed\Api\FeedRepositoryInterface $feedRepository, \Amasty\Feed\Model\Config $config, \Amasty\Feed\Model\Indexer\Feed\IndexBuilder $indexBuilder, \Amasty\Feed\Model\FeedExport $feedExport, \Amasty\Feed\Model\Filesystem\FeedOutput $feedOutput)
    {
        $this->___init();
        parent::__construct($context, $logger, $urlFactory, $collectionFactory, $feedRepository, $config, $indexBuilder, $feedExport, $feedOutput);
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
