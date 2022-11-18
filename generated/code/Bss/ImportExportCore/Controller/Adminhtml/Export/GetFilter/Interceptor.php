<?php
namespace Bss\ImportExportCore\Controller\Adminhtml\Export\GetFilter;

/**
 * Interceptor class for @see \Bss\ImportExportCore\Controller\Adminhtml\Export\GetFilter
 */
class Interceptor extends \Bss\ImportExportCore\Controller\Adminhtml\Export\GetFilter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Bss\ImportExportCore\Model\ExportFactory $exportModelFactory)
    {
        $this->___init();
        parent::__construct($context, $exportModelFactory);
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
