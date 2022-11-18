<?php
namespace WeltPixel\OwlCarouselSlider\Controller\Recentlyviewed\Index;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Controller\Recentlyviewed\Index
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Controller\Recentlyviewed\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, \Psr\Log\LoggerInterface $logger, \Magento\Reports\Block\Product\Widget\Viewed $viewProductsBlock, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $logger, $viewProductsBlock, $resultJsonFactory, $resultRawFactory, $resultPageFactory);
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
