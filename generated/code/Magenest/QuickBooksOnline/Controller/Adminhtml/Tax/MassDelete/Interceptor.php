<?php
namespace Magenest\QuickBooksOnline\Controller\Adminhtml\Tax\MassDelete;

/**
 * Interceptor class for @see \Magenest\QuickBooksOnline\Controller\Adminhtml\Tax\MassDelete
 */
class Interceptor extends \Magenest\QuickBooksOnline\Controller\Adminhtml\Tax\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magenest\QuickBooksOnline\Model\Synchronization\TaxCode $taxCode, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Tax\Model\Calculation\Rate $rate, \Magenest\QuickBooksOnline\Model\TaxFactory $taxFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Magenest\QuickBooksOnline\Model\ResourceModel\Tax\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $taxCode, $scopeConfig, $rate, $taxFactory, $filter, $collectionFactory);
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
