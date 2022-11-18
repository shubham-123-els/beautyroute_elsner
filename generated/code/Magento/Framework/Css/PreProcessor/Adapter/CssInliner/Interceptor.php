<?php
namespace Magento\Framework\Css\PreProcessor\Adapter\CssInliner;

/**
 * Interceptor class for @see \Magento\Framework\Css\PreProcessor\Adapter\CssInliner
 */
class Interceptor extends \Magento\Framework\Css\PreProcessor\Adapter\CssInliner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState)
    {
        $this->___init();
        parent::__construct($appState);
    }

    /**
     * {@inheritdoc}
     */
    public function setCss($css)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCss');
        return $pluginInfo ? $this->___callPlugins('setCss', func_get_args(), $pluginInfo) : parent::setCss($css);
    }
}
