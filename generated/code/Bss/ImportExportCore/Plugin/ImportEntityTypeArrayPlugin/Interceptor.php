<?php
namespace Bss\ImportExportCore\Plugin\ImportEntityTypeArrayPlugin;

/**
 * Interceptor class for @see \Bss\ImportExportCore\Plugin\ImportEntityTypeArrayPlugin
 */
class Interceptor extends \Bss\ImportExportCore\Plugin\ImportEntityTypeArrayPlugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\Import\ConfigInterface $importConfig, \Magento\Framework\App\Request\Http $request)
    {
        $this->___init();
        parent::__construct($importConfig, $request);
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
