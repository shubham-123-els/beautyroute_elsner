<?php
namespace Mageplaza\ImageOptimizer\Controller\Adminhtml\ManageImages\Requeue;

/**
 * Interceptor class for @see \Mageplaza\ImageOptimizer\Controller\Adminhtml\ManageImages\Requeue
 */
class Interceptor extends \Mageplaza\ImageOptimizer\Controller\Adminhtml\ManageImages\Requeue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\ImageOptimizer\Model\ImageFactory $imageFactory, \Mageplaza\ImageOptimizer\Model\ResourceModel\Image $resourceModel, \Mageplaza\ImageOptimizer\Model\ResourceModel\Image\CollectionFactory $collectionFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Mageplaza\ImageOptimizer\Helper\Data $helperData, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $imageFactory, $resourceModel, $collectionFactory, $filter, $helperData, $logger);
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
