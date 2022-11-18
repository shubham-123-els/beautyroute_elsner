<?php
namespace Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Order;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Order
 */
class Interceptor extends \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\Smtp\Helper\EmailMarketing $helperEmailMarketing, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $helperEmailMarketing, $customerFactory, $orderCollectionFactory);
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
