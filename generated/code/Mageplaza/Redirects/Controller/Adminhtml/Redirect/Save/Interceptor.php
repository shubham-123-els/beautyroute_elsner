<?php
namespace Mageplaza\Redirects\Controller\Adminhtml\Redirect\Save;

/**
 * Interceptor class for @see \Mageplaza\Redirects\Controller\Adminhtml\Redirect\Save
 */
class Interceptor extends \Mageplaza\Redirects\Controller\Adminhtml\Redirect\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\UrlRewrite\Model\UrlRewrite $urlRewrite, \Mageplaza\Redirects\Helper\Data $helperConfig)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $urlRewrite, $helperConfig);
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
