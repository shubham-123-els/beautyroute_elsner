<?php
namespace Dotdigitalgroup\Email\Block\Adminhtml\Config\Automation\Feefo\Score;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Adminhtml\Config\Automation\Feefo\Score
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Adminhtml\Config\Automation\Feefo\Score implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Dotdigitalgroup\Email\Helper\Data $data)
    {
        $this->___init();
        parent::__construct($context, $data);
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
