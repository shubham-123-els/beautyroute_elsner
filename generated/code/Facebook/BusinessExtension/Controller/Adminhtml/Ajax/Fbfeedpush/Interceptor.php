<?php
namespace Facebook\BusinessExtension\Controller\Adminhtml\Ajax\Fbfeedpush;

/**
 * Interceptor class for @see \Facebook\BusinessExtension\Controller\Adminhtml\Ajax\Fbfeedpush
 */
class Interceptor extends \Facebook\BusinessExtension\Controller\Adminhtml\Ajax\Fbfeedpush implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Facebook\BusinessExtension\Helper\FBEHelper $helper, \Facebook\BusinessExtension\Model\Product\Feed\Method\BatchApi $batchApi)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $helper, $batchApi);
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