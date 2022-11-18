<?php
namespace Magefan\ProductGridInline\Controller\Adminhtml\Attribute\MassAttribute;

/**
 * Interceptor class for @see \Magefan\ProductGridInline\Controller\Adminhtml\Attribute\MassAttribute
 */
class Interceptor extends \Magefan\ProductGridInline\Controller\Adminhtml\Attribute\MassAttribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magefan\ProductGridInline\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $config);
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
