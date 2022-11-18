<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Stores\Index;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Stores\Index
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Stores\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ebizmarts\MailChimp\Model\MailChimpStoresFactory $storesFactory, \Ebizmarts\MailChimp\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $registry, $resultPageFactory, $storesFactory, $helper);
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
