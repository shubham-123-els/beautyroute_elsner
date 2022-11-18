<?php
namespace Amasty\Base\Block\Adminhtml\Notification;

/**
 * Interceptor class for @see \Amasty\Base\Block\Adminhtml\Notification
 */
class Interceptor extends \Amasty\Base\Block\Adminhtml\Notification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Amasty\Base\Model\ModuleListProcessor $moduleListProcessor, \Amasty\Base\Model\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $moduleListProcessor, $config, $data);
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
