<?php
namespace StripeIntegration\Payments\Controller\Payment\Cancel;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Payment\Cancel
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Payment\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Checkout\Helper\Data $checkoutHelper, \Magento\Sales\Model\OrderFactory $orderFactory, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Model\Config $config, \Magento\Sales\Model\Service\InvoiceService $invoiceService, \Magento\Framework\DB\Transaction $dbTransaction)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $checkoutHelper, $orderFactory, $helper, $config, $invoiceService, $dbTransaction);
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
