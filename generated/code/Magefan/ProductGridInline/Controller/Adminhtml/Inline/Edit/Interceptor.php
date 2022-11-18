<?php
namespace Magefan\ProductGridInline\Controller\Adminhtml\Inline\Edit;

/**
 * Interceptor class for @see \Magefan\ProductGridInline\Controller\Adminhtml\Inline\Edit
 */
class Interceptor extends \Magefan\ProductGridInline\Controller\Adminhtml\Inline\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\Product\Action $action, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor, \Magento\Store\Model\App\Emulation $emulation, \Psr\Log\LoggerInterface $logger, \Magefan\ProductGridInline\Model\Config $config, ?\Magento\Catalog\Api\CategoryLinkManagementInterface $categoryLinkManagement = null)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $productRepository, $action, $indexerRegistry, $productFlatIndexerProcessor, $emulation, $logger, $config, $categoryLinkManagement);
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
