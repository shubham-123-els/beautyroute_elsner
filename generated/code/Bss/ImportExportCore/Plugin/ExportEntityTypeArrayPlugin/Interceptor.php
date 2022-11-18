<?php
namespace Bss\ImportExportCore\Plugin\ExportEntityTypeArrayPlugin;

/**
 * Interceptor class for @see \Bss\ImportExportCore\Plugin\ExportEntityTypeArrayPlugin
 */
class Interceptor extends \Bss\ImportExportCore\Plugin\ExportEntityTypeArrayPlugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\Export\ConfigInterface $exportConfig, \Magento\Framework\App\Request\Http $request)
    {
        $this->___init();
        parent::__construct($exportConfig, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
