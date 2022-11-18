<?php
namespace WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Download;

/**
 * Interceptor class for @see \WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Download
 */
class Interceptor extends \WeltPixel\GoogleTagManager\Controller\Adminhtml\Json\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http $http, \WeltPixel\GoogleTagManager\Model\JsonGenerator $jsonGenerator)
    {
        $this->___init();
        parent::__construct($context, $http, $jsonGenerator);
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
