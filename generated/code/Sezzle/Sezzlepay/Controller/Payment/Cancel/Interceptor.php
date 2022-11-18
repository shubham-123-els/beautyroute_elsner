<?php
namespace Sezzle\Sezzlepay\Controller\Payment\Cancel;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Controller\Payment\Cancel
 */
class Interceptor extends \Sezzle\Sezzlepay\Controller\Payment\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Sezzle\Sezzlepay\Model\Sezzle $sezzleModel, \Sezzle\Sezzlepay\Helper\Data $sezzleHelper, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Quote\Model\QuoteManagement $quoteManagement, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, \Sezzle\Sezzlepay\Model\Tokenize $tokenize, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Api\CartManagementInterface $cartManagement)
    {
        $this->___init();
        parent::__construct($context, $customerRepository, $customerSession, $checkoutSession, $orderFactory, $sezzleModel, $sezzleHelper, $resultJsonFactory, $jsonHelper, $quoteManagement, $orderSender, $tokenize, $cartRepository, $cartManagement);
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
