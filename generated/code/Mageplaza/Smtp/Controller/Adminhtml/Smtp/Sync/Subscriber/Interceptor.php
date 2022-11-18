<?php
namespace Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Subscriber;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Subscriber
 */
class Interceptor extends \Mageplaza\Smtp\Controller\Adminhtml\Smtp\Sync\Subscriber implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\Smtp\Helper\EmailMarketing $helperEmailMarketing, \Magento\Newsletter\Model\ResourceModel\Subscriber\CollectionFactory $subscriberCollectionFactory, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $helperEmailMarketing, $subscriberCollectionFactory, $customerCollectionFactory);
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
