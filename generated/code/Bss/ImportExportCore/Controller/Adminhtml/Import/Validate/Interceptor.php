<?php
namespace Bss\ImportExportCore\Controller\Adminhtml\Import\Validate;

/**
 * Interceptor class for @see \Bss\ImportExportCore\Controller\Adminhtml\Import\Validate
 */
class Interceptor extends \Bss\ImportExportCore\Controller\Adminhtml\Import\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\ImportExport\Model\Report\ReportProcessorInterface $reportProcessor, \Magento\ImportExport\Model\History $historyModel, \Magento\ImportExport\Helper\Report $reportHelper, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Bss\ImportExportCore\Model\Import $importModel)
    {
        $this->___init();
        parent::__construct($context, $reportProcessor, $historyModel, $reportHelper, $uploaderFactory, $importModel);
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
