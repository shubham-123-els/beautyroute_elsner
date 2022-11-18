<?php
namespace Magento\Framework\App\Router\ActionList;

/**
 * Interceptor class for @see \Magento\Framework\App\Router\ActionList
 */
class Interceptor extends \Magento\Framework\App\Router\ActionList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\CacheInterface $cache, \Magento\Framework\Module\Dir\Reader $moduleReader, $actionInterface = 'Magento\\Framework\\App\\ActionInterface', $cacheKey = 'app_action_list', $reservedWords = [], ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($cache, $moduleReader, $actionInterface, $cacheKey, $reservedWords, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function get($module, $area, $namespace, $action)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($module, $area, $namespace, $action);
    }
}
