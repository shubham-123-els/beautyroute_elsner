<?php
namespace Magento\QuoteGraphQl\Model\Cart\SetPaymentMethodOnCart;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Cart\SetPaymentMethodOnCart
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Cart\SetPaymentMethodOnCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement, \Magento\Quote\Api\Data\PaymentInterfaceFactory $paymentFactory, \Magento\QuoteGraphQl\Model\Cart\Payment\AdditionalDataProviderPool $additionalDataProviderPool, ?\Magento\Checkout\Api\PaymentProcessingRateLimiterInterface $paymentRateLimiter = null, ?\Magento\Checkout\Api\PaymentSavingRateLimiterInterface $savingRateLimiter = null)
    {
        $this->___init();
        parent::__construct($paymentMethodManagement, $paymentFactory, $additionalDataProviderPool, $paymentRateLimiter, $savingRateLimiter);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Quote\Model\Quote $cart, array $paymentData) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($cart, $paymentData);
    }
}
