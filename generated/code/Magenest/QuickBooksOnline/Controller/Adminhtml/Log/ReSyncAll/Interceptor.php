<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Log\ReSyncAll;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Log\ReSyncAll
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Log\ReSyncAll implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magenest\QuickBooksOnline\Model\ResourceModel\Log\CollectionFactory $collectionFactory, \Magenest\QuickBooksOnline\Model\Config $config, \Magenest\QuickBooksOnline\Model\Synchronization\Customer $customer, \Magenest\QuickBooksOnline\Model\Synchronization\Item $item, \Magenest\QuickBooksOnline\Model\Synchronization\Order $order, \Magenest\QuickBooksOnline\Model\Synchronization\Invoice $invoice, \Magenest\QuickBooksOnline\Model\Synchronization\Creditmemo $creditmemo, \Magenest\QuickBooksOnline\Model\Synchronization\PaymentMethods $paymentMethods, \Magenest\QuickBooksOnline\Model\Synchronization\TaxCode $taxCode, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magenest\QuickBooksOnline\Model\TaxFactory $taxFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Sales\Model\ResourceModel\Order $orderResource)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $collectionFactory, $config, $customer, $item, $order, $invoice, $creditmemo, $paymentMethods, $taxCode, $messageManager, $scopeConfig, $taxFactory, $orderFactory, $orderResource);
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
