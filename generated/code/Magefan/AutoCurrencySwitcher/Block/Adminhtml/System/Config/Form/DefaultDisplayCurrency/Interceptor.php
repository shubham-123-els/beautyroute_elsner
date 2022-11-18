<?php
namespace Magefan\AutoCurrencySwitcher\Block\Adminhtml\System\Config\Form\DefaultDisplayCurrency;

/**
 * Interceptor class for @see \Magefan\AutoCurrencySwitcher\Block\Adminhtml\System\Config\Form\DefaultDisplayCurrency
 */
class Interceptor extends \Magefan\AutoCurrencySwitcher\Block\Adminhtml\System\Config\Form\DefaultDisplayCurrency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($moduleList, $context, $data);
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
