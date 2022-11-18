<?php
namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Method\InlineEdit;

/**
 * Interceptor class for @see \Mageplaza\TableRateShipping\Controller\Adminhtml\Method\InlineEdit
 */
class Interceptor extends \Mageplaza\TableRateShipping\Controller\Adminhtml\Method\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Mageplaza\TableRateShipping\Model\MethodFactory $methodFactory, \Mageplaza\TableRateShipping\Model\ResourceModel\Method $methodResource, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $methodFactory, $methodResource, $logger);
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
