<?php
namespace Klarna\Ordermanagement\Controller\Api\Notification;

/**
 * Interceptor class for @see \Klarna\Ordermanagement\Controller\Api\Notification
 */
class Interceptor extends \Klarna\Ordermanagement\Controller\Api\Notification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Klarna\Core\Model\OrderRepository $orderRepository, \Magento\Sales\Model\OrderRepository $mageOrderRepository, \Klarna\Core\Helper\ConfigHelper $configHelper, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Klarna\Ordermanagement\Model\Api\Ordermanagement $orderManagement)
    {
        $this->___init();
        parent::__construct($context, $logger, $resultJsonFactory, $orderRepository, $mageOrderRepository, $configHelper, $dataObjectFactory, $orderManagement);
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
    public function setOrderStatus($order, $method, $status = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderStatus');
        return $pluginInfo ? $this->___callPlugins('setOrderStatus', func_get_args(), $pluginInfo) : parent::setOrderStatus($order, $method, $status);
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
