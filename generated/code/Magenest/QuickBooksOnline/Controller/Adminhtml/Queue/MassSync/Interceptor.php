<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\MassSync;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\MassSync
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Queue\MassSync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magenest\QuickBooksOnline\Model\QueueFactory $queueFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory $queueCollection, \Magenest\QuickBooksOnline\Model\Config $config, \Magenest\QuickBooksOnline\Model\Synchronization\Customer $customer, \Magenest\QuickBooksOnline\Model\Synchronization\Item $item, \Magenest\QuickBooksOnline\Model\Synchronization\Order $order, \Magenest\QuickBooksOnline\Model\Synchronization\Invoice $invoice, \Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo $creditmemo, \Magenest\QuickBooksOnline\Logger\Logger $logger)
    {
        $this->___init();
        parent::__construct($context, $queueFactory, $filter, $queueCollection, $config, $customer, $item, $order, $invoice, $creditmemo, $logger);
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
