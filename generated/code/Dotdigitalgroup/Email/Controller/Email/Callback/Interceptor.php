<?php
namespace Dotdigitalgroup\Email\Controller\Email\Callback;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Email\Callback
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Email\Callback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\User\Model\ResourceModel\User $userResource, \Magento\Backend\Helper\Data $backendData, \Dotdigitalgroup\Email\Helper\Config $config, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\User\Api\Data\UserInterfaceFactory $adminUser, \Magento\Framework\App\Action\Context $context, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Encryption\EncryptorInterface $encryptor)
    {
        $this->___init();
        parent::__construct($userResource, $backendData, $config, $scopeConfigInterface, $storeManager, $adminUser, $context, $helper, $resultPageFactory, $encryptor);
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
