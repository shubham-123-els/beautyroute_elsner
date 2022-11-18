<?php
namespace Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Save;

/**
 * Interceptor class for @see \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Save
 */
class Interceptor extends \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\SeoCrosslinks\Model\TermFactory $termFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($termFactory, $coreRegistry, $context);
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
