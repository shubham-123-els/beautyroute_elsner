<?php
namespace Ebizmarts\MailChimp\Controller\Cart\Loadquote;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Cart\Loadquote
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Cart\Loadquote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Quote\Model\QuoteFactory $quote, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Ebizmarts\MailChimp\Helper\Data $helper, \Magento\Framework\Url $urlHelper, \Magento\Customer\Model\Url $customerUrl)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $quote, $customerSession, $checkoutSession, $helper, $urlHelper, $customerUrl);
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
