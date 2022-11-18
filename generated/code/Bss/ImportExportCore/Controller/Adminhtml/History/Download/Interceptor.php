<?php
namespace Bss\ImportExportCore\Controller\Adminhtml\History\Download;

/**
 * Interceptor class for @see \Bss\ImportExportCore\Controller\Adminhtml\History\Download
 */
class Interceptor extends \Bss\ImportExportCore\Controller\Adminhtml\History\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\ImportExport\Helper\Report $reportHelper)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $resultRawFactory, $reportHelper);
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
