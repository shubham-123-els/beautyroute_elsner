<?php
namespace Magento\Framework\App\Config;

/**
 * Interceptor class for @see \Magento\Framework\App\Config
 */
class Interceptor extends \Magento\Framework\App\Config implements \Magento\Framework\Interception\InterceptorInterface
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
    public function isSetFlag($path, $scope = 'default', $scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSetFlag');
        return $pluginInfo ? $this->___callPlugins('isSetFlag', func_get_args(), $pluginInfo) : parent::isSetFlag($path, $scope, $scopeCode);
    }
}
