<?php
namespace Magento\Email\Block\Adminhtml\Template\Edit\Form;

/**
 * Interceptor class for @see \Magento\Email\Block\Adminhtml\Template\Edit\Form
 */
class Interceptor extends \Magento\Email\Block\Adminhtml\Template\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Variable\Model\VariableFactory $variableFactory, \Magento\Variable\Model\Source\Variables $variables, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $variableFactory, $variables, $data, $serializer, $secureRenderer);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormHtml');
        return $pluginInfo ? $this->___callPlugins('getFormHtml', func_get_args(), $pluginInfo) : parent::getFormHtml();
    }
}
