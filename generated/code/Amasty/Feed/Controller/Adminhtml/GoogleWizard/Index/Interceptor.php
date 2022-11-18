<?php
namespace Amasty\Feed\Controller\Adminhtml\GoogleWizard\Index;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\GoogleWizard\Index
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\GoogleWizard\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Feed\Model\RegistryContainer $registryContainer)
    {
        $this->___init();
        parent::__construct($context, $registryContainer);
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
