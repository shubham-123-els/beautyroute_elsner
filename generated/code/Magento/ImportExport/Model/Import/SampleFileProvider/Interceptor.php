<?php
namespace Magento\ImportExport\Model\Import\SampleFileProvider;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\Import\SampleFileProvider
 */
class Interceptor extends \Magento\ImportExport\Model\Import\SampleFileProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\Component\ComponentRegistrar $componentRegistrar, array $samples = [])
    {
        $this->___init();
        parent::__construct($readFactory, $componentRegistrar, $samples);
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(string $entityName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSize');
        return $pluginInfo ? $this->___callPlugins('getSize', func_get_args(), $pluginInfo) : parent::getSize($entityName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileContents(string $entityName) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileContents');
        return $pluginInfo ? $this->___callPlugins('getFileContents', func_get_args(), $pluginInfo) : parent::getFileContents($entityName);
    }
}
