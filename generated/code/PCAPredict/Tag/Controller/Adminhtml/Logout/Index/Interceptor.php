<?php
namespace PCAPredict\Tag\Controller\Adminhtml\Logout\Index;

/**
 * Interceptor class for @see \PCAPredict\Tag\Controller\Adminhtml\Logout\Index
 */
class Interceptor extends \PCAPredict\Tag\Controller\Adminhtml\Logout\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \PCAPredict\Tag\Model\SettingsDataFactory $settingsDataFactory, \Magento\Framework\HTTP\ZendClientFactory $httpClientFactory)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $settingsDataFactory, $httpClientFactory);
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
