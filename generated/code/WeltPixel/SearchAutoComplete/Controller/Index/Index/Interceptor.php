<?php
namespace WeltPixel\SearchAutoComplete\Controller\Index\Index;

/**
 * Interceptor class for @see \WeltPixel\SearchAutoComplete\Controller\Index\Index
 */
class Interceptor extends \WeltPixel\SearchAutoComplete\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Search\Model\QueryFactory $queryFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \WeltPixel\SearchAutoComplete\Helper\Data $configHelper)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $resultPageFactory, $resultRawFactory, $jsonHelper, $queryFactory, $layoutFactory, $configHelper);
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
