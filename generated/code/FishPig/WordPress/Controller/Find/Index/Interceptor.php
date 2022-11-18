<?php
namespace FishPig\WordPress\Controller\Find\Index;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Find\Index
 */
class Interceptor extends \FishPig\WordPress\Controller\Find\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \FishPig\WordPress\Model\IntegrationManager $integrationManager, \FishPig\WordPress\Model\Homepage $wpHomepage, \FishPig\WordPress\Model\Url $wpUrl)
    {
        $this->___init();
        parent::__construct($context, $integrationManager, $wpHomepage, $wpUrl);
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
