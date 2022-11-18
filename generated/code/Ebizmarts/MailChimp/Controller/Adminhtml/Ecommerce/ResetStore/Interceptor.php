<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\ResetStore;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\ResetStore
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\ResetStore implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, \Ebizmarts\MailChimp\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $storeManagerInterface, $helper);
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
