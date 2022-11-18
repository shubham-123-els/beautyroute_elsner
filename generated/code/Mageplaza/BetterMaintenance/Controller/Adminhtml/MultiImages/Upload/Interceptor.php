<?php
namespace Mageplaza\BetterMaintenance\Controller\Adminhtml\MultiImages\Upload;

/**
 * Interceptor class for @see \Mageplaza\BetterMaintenance\Controller\Adminhtml\MultiImages\Upload
 */
class Interceptor extends \Mageplaza\BetterMaintenance\Controller\Adminhtml\MultiImages\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Mageplaza\BetterMaintenance\Helper\Image $imageHelper)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $uploaderFactory, $filesystem, $imageHelper);
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
