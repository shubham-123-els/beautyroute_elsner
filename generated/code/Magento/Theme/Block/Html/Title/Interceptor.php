<?php
namespace Magento\Theme\Block\Html\Title;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Title
 */
class Interceptor extends \Magento\Theme\Block\Html\Title implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageTitle');
        return $pluginInfo ? $this->___callPlugins('getPageTitle', func_get_args(), $pluginInfo) : parent::getPageTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHeading()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHeading');
        return $pluginInfo ? $this->___callPlugins('getPageHeading', func_get_args(), $pluginInfo) : parent::getPageHeading();
    }
}
