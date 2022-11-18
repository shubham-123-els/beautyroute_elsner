<?php
namespace Klarna\Kp\Block\Adminhtml\System\Config\Form\Field\Onboarding;

/**
 * Interceptor class for @see \Klarna\Kp\Block\Adminhtml\System\Config\Form\Field\Onboarding
 */
class Interceptor extends \Klarna\Kp\Block\Adminhtml\System\Config\Form\Field\Onboarding implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klarna\Core\Model\System\Onboarding $onboarding, \Klarna\Core\Helper\VersionInfo $versionInfo, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $onboarding, $versionInfo, $data);
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
