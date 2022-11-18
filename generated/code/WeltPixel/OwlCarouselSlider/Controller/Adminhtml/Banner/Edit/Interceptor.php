<?php
namespace WeltPixel\OwlCarouselSlider\Controller\Adminhtml\Banner\Edit;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Controller\Adminhtml\Banner\Edit
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Controller\Adminhtml\Banner\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Backend\Helper\Js $jsHelper, \WeltPixel\OwlCarouselSlider\Model\BannerFactory $bannerFactory, \WeltPixel\OwlCarouselSlider\Model\SliderFactory $sliderFactory, \WeltPixel\OwlCarouselSlider\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory, \WeltPixel\OwlCarouselSlider\Model\ResourceModel\Slider\CollectionFactory $sliderCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $resultPageFactory, $resultLayoutFactory, $resultForwardFactory, $jsHelper, $bannerFactory, $sliderFactory, $bannerCollectionFactory, $sliderCollectionFactory);
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
