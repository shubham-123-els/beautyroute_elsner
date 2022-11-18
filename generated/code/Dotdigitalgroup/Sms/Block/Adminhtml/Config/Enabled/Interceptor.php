<?php
namespace Dotdigitalgroup\Sms\Block\Adminhtml\Config\Enabled;

/**
 * Interceptor class for @see \Dotdigitalgroup\Sms\Block\Adminhtml\Config\Enabled
 */
class Interceptor extends \Dotdigitalgroup\Sms\Block\Adminhtml\Config\Enabled implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Sms\Model\Account $account, \Dotdigitalgroup\Sms\Model\Config\TransactionalSms $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $account, $config, $data);
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
