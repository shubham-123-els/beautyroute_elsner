<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\Item;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\Item
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\QuickBooksOnline\Model\QueueFactory $queueFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory $queueCollection, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $queueFactory, $filter, $queueCollection, $collectionFactory);
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
