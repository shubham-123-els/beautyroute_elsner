<?php
namespace Elsnertech\Professional\Controller\Index\Post;

/**
 * Interceptor class for @see \Elsnertech\Professional\Controller\Index\Post
 */
class Interceptor extends \Elsnertech\Professional\Controller\Index\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Elsnertech\Professional\Model\FileUploadValidatorInterface $fileUploadValidator, \Magento\Store\Model\StoreManagerInterface $storeManager, \Elsnertech\Professional\Model\Emailsender $emailsender)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $fileUploadValidator, $storeManager, $emailsender);
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
