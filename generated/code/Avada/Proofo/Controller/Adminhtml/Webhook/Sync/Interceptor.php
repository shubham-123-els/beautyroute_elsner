<?php
namespace Avada\Proofo\Controller\Adminhtml\Webhook\Sync;

/**
 * Interceptor class for @see \Avada\Proofo\Controller\Adminhtml\Webhook\Sync
 */
class Interceptor extends \Avada\Proofo\Controller\Adminhtml\Webhook\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, \Avada\Proofo\Helper\WebHookSync $webHookSync, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderFactory, \Avada\Proofo\Helper\Data $helper, \Magento\Directory\Model\CountryFactory $countryFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $webHookSync, $orderFactory, $helper, $countryFactory);
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
