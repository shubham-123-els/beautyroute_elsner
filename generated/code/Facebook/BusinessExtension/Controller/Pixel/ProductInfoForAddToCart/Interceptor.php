<?php
namespace Facebook\BusinessExtension\Controller\Pixel\ProductInfoForAddToCart;

/**
 * Interceptor class for @see \Facebook\BusinessExtension\Controller\Pixel\ProductInfoForAddToCart
 */
class Interceptor extends \Facebook\BusinessExtension\Controller\Pixel\ProductInfoForAddToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Facebook\BusinessExtension\Helper\FBEHelper $helper, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $productFactory, $helper, $eventManager, $formKeyValidator);
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
