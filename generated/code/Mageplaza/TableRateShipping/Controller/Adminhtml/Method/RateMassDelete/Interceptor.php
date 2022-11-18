<?php
namespace Mageplaza\TableRateShipping\Controller\Adminhtml\Method\RateMassDelete;

/**
 * Interceptor class for @see \Mageplaza\TableRateShipping\Controller\Adminhtml\Method\RateMassDelete
 */
class Interceptor extends \Mageplaza\TableRateShipping\Controller\Adminhtml\Method\RateMassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \Magento\Ui\Component\MassAction\Filter $filter, \Mageplaza\TableRateShipping\Helper\Data $helper, \Mageplaza\TableRateShipping\Helper\Media $media, \Mageplaza\TableRateShipping\Model\MethodFactory $methodFactory, \Mageplaza\TableRateShipping\Model\ResourceModel\Method $methodResource, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Mageplaza\TableRateShipping\Model\RateFactory $rateFactory, \Mageplaza\TableRateShipping\Model\ResourceModel\Rate $rateResource, \Mageplaza\TableRateShipping\Model\ResourceModel\Rate\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $registry, $filter, $helper, $media, $methodFactory, $methodResource, $logger, $resultRawFactory, $layoutFactory, $rateFactory, $rateResource, $collectionFactory);
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
