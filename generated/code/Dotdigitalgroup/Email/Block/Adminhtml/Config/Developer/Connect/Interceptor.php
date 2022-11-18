<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\Developer\Connect;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Config\Developer\Connect
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Config\Developer\Connect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Dotdigitalgroup\Email\Helper\Config $configHelper, \Magento\Backend\Model\Auth $auth, $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $configHelper, $auth, $data);
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
