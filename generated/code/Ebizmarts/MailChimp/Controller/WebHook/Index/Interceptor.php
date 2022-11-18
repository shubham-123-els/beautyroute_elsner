<?php
namespace Ebizmarts\MailChimp\Controller\WebHook\Index;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\WebHook\Index
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\WebHook\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Model\MailChimpWebhookRequestFactory $chimpWebhookRequestFactory, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress)
    {
        $this->___init();
        parent::__construct($context, $helper, $chimpWebhookRequestFactory, $remoteAddress);
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
