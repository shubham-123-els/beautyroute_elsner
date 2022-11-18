<?php
namespace FishPig\WordPress\Controller\Post\Invalidate;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Post\Invalidate
 */
class Interceptor extends \FishPig\WordPress\Controller\Post\Invalidate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \FishPig\WordPress\Model\OptionManager $optionManager, \FishPig\WordPress\Model\Factory $factory, \Magento\Framework\App\CacheInterface $cacheManager)
    {
        $this->___init();
        parent::__construct($context, $optionManager, $factory, $cacheManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
