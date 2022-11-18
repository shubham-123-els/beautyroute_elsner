<?php
namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Import\Process;

/**
 * Interceptor class for @see \Mageplaza\TableRateShipping\Controller\Adminhtml\Import\Process
 */
class Interceptor extends \Mageplaza\TableRateShipping\Controller\Adminhtml\Import\Process implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\File\Csv $csvProcessor, \Magento\Framework\Controller\Result\Json $resultJson, \Magento\Framework\View\Layout $layout, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Driver\File $file, \Mageplaza\TableRateShipping\Model\Import $import, \Mageplaza\TableRateShipping\Helper\Media $helperFile)
    {
        $this->___init();
        parent::__construct($context, $csvProcessor, $resultJson, $layout, $uploaderFactory, $filesystem, $file, $import, $helperFile);
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
