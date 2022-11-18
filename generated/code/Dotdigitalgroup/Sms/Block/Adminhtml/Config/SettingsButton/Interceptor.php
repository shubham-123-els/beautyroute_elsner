<?php
namespace Dotdigitalgroup\Sms\Block\Adminhtml\Config\SettingsButton;

/**
 * Interceptor class for @see \Dotdigitalgroup\Sms\Block\Adminhtml\Config\SettingsButton
 */
class Interceptor extends \Dotdigitalgroup\Sms\Block\Adminhtml\Config\SettingsButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Helper\OauthValidator $oauthValidator, \Dotdigitalgroup\Email\Helper\Config $emailConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $oauthValidator, $emailConfig, $data);
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
