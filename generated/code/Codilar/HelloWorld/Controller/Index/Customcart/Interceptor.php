<?php
namespace Codilar\HelloWorld\Controller\Index\Customcart;

/**
 * Interceptor class for @see \Codilar\HelloWorld\Controller\Index\Customcart
 */
class Interceptor extends \Codilar\HelloWorld\Controller\Index\Customcart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Checkout\Model\Cart $cart, \Magento\Catalog\Model\ProductRepository $productRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $formKey, $cart, $productRepository, $data);
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
