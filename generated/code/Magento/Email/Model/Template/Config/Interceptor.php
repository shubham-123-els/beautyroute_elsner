<?php
namespace Magento\Email\Model\Template\Config;

/**
 * Interceptor class for @see \Magento\Email\Model\Template\Config
 */
class Interceptor extends \Magento\Email\Model\Template\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Email\Model\Template\Config\Data $dataStorage, \Magento\Framework\Module\Dir\Reader $moduleReader, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Framework\View\Design\Theme\ThemePackageList $themePackages, \Magento\Framework\Filesystem\Directory\ReadFactory $readDirFactory)
    {
        $this->___init();
        parent::__construct($dataStorage, $moduleReader, $viewFileSystem, $themePackages, $readDirFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFilename($templateId, $designParams = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFilename');
        return $pluginInfo ? $this->___callPlugins('getTemplateFilename', func_get_args(), $pluginInfo) : parent::getTemplateFilename($templateId, $designParams);
    }
}
