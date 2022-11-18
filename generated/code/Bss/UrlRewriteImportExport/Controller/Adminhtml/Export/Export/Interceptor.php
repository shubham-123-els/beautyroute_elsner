<?php
namespace Bss\UrlRewriteImportExport\Controller\Adminhtml\Export\Export;

/**
 * Interceptor class for @see \Bss\UrlRewriteImportExport\Controller\Adminhtml\Export\Export
 */
class Interceptor extends \Bss\UrlRewriteImportExport\Controller\Adminhtml\Export\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Bss\UrlRewriteImportExport\Model\ResourceModel\Export $export, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Stdlib\DateTime\DateTime $datetime, \Magento\Framework\Filesystem\Io\File $io, \Magento\Framework\File\Csv $csv, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $export, $filesystem, $datetime, $io, $csv, $resultPageFactory, $resultJsonFactory, $storeManager);
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
