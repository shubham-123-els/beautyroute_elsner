<?php
namespace WeltPixel\ProductLabels\Controller\Adminhtml\ProductLabels\Save;

/**
 * Interceptor class for @see \WeltPixel\ProductLabels\Controller\Adminhtml\ProductLabels\Save
 */
class Interceptor extends \WeltPixel\ProductLabels\Controller\Adminhtml\ProductLabels\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \WeltPixel\ProductLabels\Model\Config\FileUploader\FileProcessor $fileProcessor)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $dataPersistor, $fileProcessor);
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
