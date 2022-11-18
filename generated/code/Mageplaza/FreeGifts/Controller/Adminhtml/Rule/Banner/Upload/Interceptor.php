<?php
namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Banner\Upload;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Banner\Upload
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Banner\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Mageplaza\FreeGifts\Helper\File $helperFile, \Mageplaza\FreeGifts\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $helperFile, $helperData);
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
