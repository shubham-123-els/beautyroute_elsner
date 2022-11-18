<?php
namespace Magefan\GeoIp\Block\Adminhtml\System\Config\Form\MaxMindInfo;

/**
 * Interceptor class for @see \Magefan\GeoIp\Block\Adminhtml\System\Config\Form\MaxMindInfo
 */
class Interceptor extends \Magefan\GeoIp\Block\Adminhtml\System\Config\Form\MaxMindInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Filesystem\DirectoryList $dir, \Magefan\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $dir, $maxMind, $data);
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
