<?php
namespace Mageplaza\SeoDashboard\Controller\Adminhtml\Checklist\Index;

/**
 * Interceptor class for @see \Mageplaza\SeoDashboard\Controller\Adminhtml\Checklist\Index
 */
class Interceptor extends \Mageplaza\SeoDashboard\Controller\Adminhtml\Checklist\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\GoogleAnalytics\Helper\Data $googleAnalyticsHelper, \Mageplaza\SeoDashboard\Helper\Checklist\Homepage $homepage, \Mageplaza\SeoDashboard\Helper\Checklist\SiteMap $siteMap, \Mageplaza\SeoDashboard\Helper\Checklist\Robot $robot, \Mageplaza\SeoDashboard\Helper\Data $config, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\SeoDashboard\Helper\Checklist\Content $content)
    {
        $this->___init();
        parent::__construct($context, $googleAnalyticsHelper, $homepage, $siteMap, $robot, $config, $resultPageFactory, $content);
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
