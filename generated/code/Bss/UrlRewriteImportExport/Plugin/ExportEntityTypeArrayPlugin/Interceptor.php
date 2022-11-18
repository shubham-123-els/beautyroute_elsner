<?php
namespace Bss\UrlRewriteImportExport\Plugin\ExportEntityTypeArrayPlugin;

/**
 * Interceptor class for @see \Bss\UrlRewriteImportExport\Plugin\ExportEntityTypeArrayPlugin
 */
class Interceptor extends \Bss\UrlRewriteImportExport\Plugin\ExportEntityTypeArrayPlugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\Export\ConfigInterface $exportConfig, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Module\Manager $moduleManager)
    {
        $this->___init();
        parent::__construct($exportConfig, $request, $moduleManager);
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
