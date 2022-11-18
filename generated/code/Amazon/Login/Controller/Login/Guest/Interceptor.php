<?php
namespace Amazon\Login\Controller\Login\Guest;

/**
 * Interceptor class for @see \Amazon\Login\Controller\Login\Guest
 */
class Interceptor extends \Amazon\Login\Controller\Login\Guest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Amazon\Core\Helper\Data $amazonCoreHelper, \Magento\Customer\Model\Url $customerUrl, \Amazon\Login\Model\Validator\AccessTokenRequestValidator $accessTokenRequestValidator, \Magento\Checkout\Model\Session $session, \Amazon\Core\Client\ClientFactoryInterface $clientFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $amazonCoreHelper, $customerUrl, $accessTokenRequestValidator, $session, $clientFactory, $logger);
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
