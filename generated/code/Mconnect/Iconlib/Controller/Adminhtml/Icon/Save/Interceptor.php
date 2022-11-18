<?php
namespace Mconnect\Iconlib\Controller\Adminhtml\Icon\Save;

/**
 * Interceptor class for @see \Mconnect\Iconlib\Controller\Adminhtml\Icon\Save
 */
class Interceptor extends \Mconnect\Iconlib\Controller\Adminhtml\Icon\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mconnect\Iconlib\Model\ResourceModel\Icon\CollectionFactory $piCollection, \Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $piiCollection, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploader, \Magento\Framework\Filesystem $fileSystem, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Filesystem\Driver\File $file, \Magento\Backend\Helper\Js $jsHelper, \Magento\Framework\App\ResourceConnection $resource)
    {
        $this->___init();
        parent::__construct($context, $piCollection, $piiCollection, $fileUploader, $fileSystem, $messageManager, $file, $jsHelper, $resource);
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
