<?php
namespace Dotdigitalgroup\Email\Controller\Email\Getbasket;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Email\Getbasket
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Email\Getbasket implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Checkout\Model\SessionFactory $checkoutSessionFactory, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\SessionFactory $customerSessionFactory)
    {
        $this->___init();
        parent::__construct($quoteResource, $checkoutSessionFactory, $quoteFactory, $context, $customerSessionFactory);
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
