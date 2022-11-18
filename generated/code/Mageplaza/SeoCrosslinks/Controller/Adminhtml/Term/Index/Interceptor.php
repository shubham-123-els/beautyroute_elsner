<?php
namespace Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Index;

/**
 * Interceptor class for @see \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Index
 */
class Interceptor extends \Mageplaza\SeoCrosslinks\Controller\Adminhtml\Term\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\Seo\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $helperData);
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
