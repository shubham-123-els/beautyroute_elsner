<?php
namespace Magiccart\Shopbrand\Controller\Adminhtml\Brand\ExportCsv;

/**
 * Interceptor class for @see \Magiccart\Shopbrand\Controller\Adminhtml\Brand\ExportCsv
 */
class Interceptor extends \Magiccart\Shopbrand\Controller\Adminhtml\Brand\ExportCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magiccart\Shopbrand\Model\ShopbrandFactory $shopbrandFactory, \Magiccart\Shopbrand\Model\ResourceModel\Shopbrand\CollectionFactory $shopbrandCollectionFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Backend\Helper\Js $jsHelper)
    {
        $this->___init();
        parent::__construct($context, $shopbrandFactory, $shopbrandCollectionFactory, $coreRegistry, $fileFactory, $resultPageFactory, $resultLayoutFactory, $resultForwardFactory, $jsHelper);
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
