<?php
namespace PayPal\Braintree\Controller\Kount\Ens;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Kount\Ens
 */
class Interceptor extends \PayPal\Braintree\Controller\Kount\Ens implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \PayPal\Braintree\Model\Kount\EnsConfig $ensConfig, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Xml\Security $xmlSecurity)
    {
        $this->___init();
        parent::__construct($context, $ensConfig, $remoteAddress, $xmlSecurity);
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
