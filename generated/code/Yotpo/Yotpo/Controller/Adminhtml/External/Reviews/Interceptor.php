<?php
namespace Yotpo\Yotpo\Controller\Adminhtml\External\Reviews;

/**
 * Interceptor class for @see \Yotpo\Yotpo\Controller\Adminhtml\External\Reviews
 */
class Interceptor extends \Yotpo\Yotpo\Controller\Adminhtml\External\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Yotpo\Yotpo\Model\Config $yotpoConfig)
    {
        $this->___init();
        parent::__construct($context, $yotpoConfig);
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
