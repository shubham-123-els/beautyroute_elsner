<?php
namespace Codilar\HelloWorld\Controller\Cart\Index;

/**
 * Interceptor class for @see \Codilar\HelloWorld\Controller\Cart\Index
 */
class Interceptor extends \Codilar\HelloWorld\Controller\Cart\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Customer\Model\Session $customerSessionFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Checkout\Model\Cart $cart, \Magento\Catalog\Model\Product $product)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $resultJsonFactory, $customerSessionFactory, $cacheTypeList, $cacheFrontendPool, $categoryFactory, $productCollectionFactory, $formKey, $cart, $product);
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
