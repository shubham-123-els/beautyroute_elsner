<?php
namespace Mageplaza\Smtp\Controller\Adminhtml\Smtp\MassResend;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\Adminhtml\Smtp\MassResend
 */
class Interceptor extends \Mageplaza\Smtp\Controller\Adminhtml\Smtp\MassResend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Ui\Component\MassAction\Filter $filter, \Magento\Backend\App\Action\Context $context, \Mageplaza\Smtp\Model\ResourceModel\Log\CollectionFactory $emailLog)
    {
        $this->___init();
        parent::__construct($filter, $context, $emailLog);
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
