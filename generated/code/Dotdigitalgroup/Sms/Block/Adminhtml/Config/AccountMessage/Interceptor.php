<?php
namespace Dotdigitalgroup\Sms\Block\Adminhtml\Config\AccountMessage;

/**
 * Interceptor class for @see \Dotdigitalgroup\Sms\Block\Adminhtml\Config\AccountMessage
 */
class Interceptor extends \Dotdigitalgroup\Sms\Block\Adminhtml\Config\AccountMessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Sms\Model\Account $account, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $account, $data);
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
