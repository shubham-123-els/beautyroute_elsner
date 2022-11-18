<?php
namespace Magento\Framework\App\MutableScopeConfig;

/**
 * Interceptor class for @see \Magento\Framework\App\MutableScopeConfig
 */
class Interceptor extends \Magento\Framework\App\MutableScopeConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeCodeResolver $scopeCodeResolver, array $types = [])
    {
        $this->___init();
        parent::__construct($scopeCodeResolver, $types);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue($path = null, $scope = 'default', $scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue($path, $scope, $scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($path, $value, $scope = 'default', $scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValue');
        return $pluginInfo ? $this->___callPlugins('setValue', func_get_args(), $pluginInfo) : parent::setValue($path, $value, $scope, $scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function clean()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        return $pluginInfo ? $this->___callPlugins('clean', func_get_args(), $pluginInfo) : parent::clean();
    }

    /**
     * {@inheritdoc}
     */
    public function isSetFlag($path, $scope = 'default', $scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSetFlag');
        return $pluginInfo ? $this->___callPlugins('isSetFlag', func_get_args(), $pluginInfo) : parent::isSetFlag($path, $scope, $scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function get($configType, $path = '', $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($configType, $path, $default);
    }
}
