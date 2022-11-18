<?php
namespace Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\EstimateCustomer;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\EstimateCustomer
 */
class Interceptor extends \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\EstimateCustomer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory, \Mageplaza\Smtp\Helper\EmailMarketing $emailMarketing)
    {
        $this->___init();
        parent::__construct($context, $customerCollectionFactory, $emailMarketing);
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
