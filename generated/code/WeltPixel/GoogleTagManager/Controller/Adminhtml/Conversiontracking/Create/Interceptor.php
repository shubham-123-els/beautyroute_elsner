<?php
namespace WeltPixel\GoogleTagManager\Controller\Adminhtml\Conversiontracking\Create;

/**
 * Interceptor class for @see \WeltPixel\GoogleTagManager\Controller\Adminhtml\Conversiontracking\Create
 */
class Interceptor extends \WeltPixel\GoogleTagManager\Controller\Adminhtml\Conversiontracking\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\GoogleTagManager\Model\Api\ConversionTracking $apiModel, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($apiModel, $context, $resultJsonFactory);
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
