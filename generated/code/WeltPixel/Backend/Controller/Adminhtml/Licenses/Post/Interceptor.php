<?php
namespace WeltPixel\Backend\Controller\Adminhtml\Licenses\Post;

/**
 * Interceptor class for @see \WeltPixel\Backend\Controller\Adminhtml\Licenses\Post
 */
class Interceptor extends \WeltPixel\Backend\Controller\Adminhtml\Licenses\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \WeltPixel\Backend\Helper\License $wpHelper, \WeltPixel\Backend\Model\LicenseFactory $licenseFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $resultJsonFactory, $wpHelper, $licenseFactory);
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
