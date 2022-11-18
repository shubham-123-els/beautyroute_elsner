<?php
namespace Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Team;

/**
 * Interceptor class for @see \Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Team
 */
class Interceptor extends \Dotdigitalgroup\Chat\Controller\Adminhtml\Studio\Team implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Dotdigitalgroup\Chat\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $config);
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
