<?php
namespace FishPig\WordPress\Controller\Forwarder\View;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Forwarder\View
 */
class Interceptor extends \FishPig\WordPress\Controller\Forwarder\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \FishPig\WordPress\Model\Url $url, \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory)
    {
        $this->___init();
        parent::__construct($context, $url, $resultRedirectFactory);
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
