<?php
namespace Yireo\NextGenImages\Block\Adminhtml\System\Config\ModuleVersion;

/**
 * Interceptor class for @see \Yireo\NextGenImages\Block\Adminhtml\System\Config\ModuleVersion
 */
class Interceptor extends \Yireo\NextGenImages\Block\Adminhtml\System\Config\ModuleVersion implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Component\ComponentRegistrar $componentRegistrar, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\Filesystem\File\ReadFactory $fileReadFactory, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\Framework\Filesystem\Directory\ReadFactory $directoryReadFactory, \Magento\Backend\Block\Template\Context $context, array $data = [], string $moduleName = 'Yireo_NextGenImages')
    {
        $this->___init();
        parent::__construct($componentRegistrar, $moduleList, $fileReadFactory, $serializer, $directoryReadFactory, $context, $data, $moduleName);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
