<?php
namespace Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\InlineEdit;

/**
 * Interceptor class for @see \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\InlineEdit
 */
class Interceptor extends \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Mageplaza\SeoCrosslinks\Model\TermFactory $termFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $termFactory);
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
