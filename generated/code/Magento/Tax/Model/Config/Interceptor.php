<?php
namespace Magento\Tax\Model\Config;

/**
 * Interceptor class for @see \Magento\Tax\Model\Config
 */
class Interceptor extends \Magento\Tax\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getAlgorithm($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAlgorithm');
        return $pluginInfo ? $this->___callPlugins('getAlgorithm', func_get_args(), $pluginInfo) : parent::getAlgorithm($store);
    }
}
