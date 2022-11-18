<?php
namespace Dotdigitalgroup\Email\Controller\Ajax\Emailcapture;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Ajax\Emailcapture
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Ajax\Emailcapture implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $data, \Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Checkout\Model\Session $session, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($data, $quoteResource, $session, $context);
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
