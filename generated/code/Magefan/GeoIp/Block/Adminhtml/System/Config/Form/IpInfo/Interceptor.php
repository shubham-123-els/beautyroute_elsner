<?php
namespace Magefan\GeoIp\Block\Adminhtml\System\Config\Form\IpInfo;

/**
 * Interceptor class for @see \Magefan\GeoIp\Block\Adminhtml\System\Config\Form\IpInfo
 */
class Interceptor extends \Magefan\GeoIp\Block\Adminhtml\System\Config\Form\IpInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magefan\GeoIp\Model\IpToCountryRepository $ipRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ipRepository, $data);
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
