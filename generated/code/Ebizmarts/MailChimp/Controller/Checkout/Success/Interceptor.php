<?php
namespace Ebizmarts\MailChimp\Controller\Checkout\Success;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Checkout\Success
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Checkout\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Ebizmarts\MailChimp\Helper\Data $helper, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Ebizmarts\MailChimp\Model\MailChimpInterestGroupFactory $interestGroupFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $helper, $checkoutSession, $subscriberFactory, $interestGroupFactory);
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
