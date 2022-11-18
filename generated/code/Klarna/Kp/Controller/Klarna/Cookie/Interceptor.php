<?php
namespace Klarna\Kp\Controller\Klarna\Cookie;

/**
 * Interceptor class for @see \Klarna\Kp\Controller\Klarna\Cookie
 */
class Interceptor extends \Klarna\Kp\Controller\Klarna\Cookie implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Session $session, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Checkout\Model\DefaultConfigProvider $defaultConfigProvider)
    {
        $this->___init();
        parent::__construct($context, $session, $urlBuilder, $defaultConfigProvider);
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
