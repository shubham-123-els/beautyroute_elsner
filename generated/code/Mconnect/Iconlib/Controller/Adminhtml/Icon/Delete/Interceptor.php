<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon\Delete;

/**
 * Interceptor class for @see \Mconnect\Iconlib\Controller\Adminhtml\Icon\Delete
 */
class Interceptor extends \Mconnect\Iconlib\Controller\Adminhtml\Icon\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mconnect\Iconlib\Model\Icon $model)
    {
        $this->___init();
        parent::__construct($context, $model);
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
