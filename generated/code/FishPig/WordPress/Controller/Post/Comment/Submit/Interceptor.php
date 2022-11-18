<?php
namespace FishPig\WordPress\Controller\Post\Comment\Submit;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Post\Comment\Submit
 */
class Interceptor extends \FishPig\WordPress\Controller\Post\Comment\Submit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \FishPig\WordPress\Model\PostFactory $postFactory, \FishPig\WordPress\Model\Url $wpUrlBuilder)
    {
        $this->___init();
        parent::__construct($context, $postFactory, $wpUrlBuilder);
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
