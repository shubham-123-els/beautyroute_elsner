<?php
namespace PCAPredict\Tag\Controller\Adminhtml\Login\Index;

/**
 * Interceptor class for @see \PCAPredict\Tag\Controller\Adminhtml\Login\Index
 */
class Interceptor extends \PCAPredict\Tag\Controller\Adminhtml\Login\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \PCAPredict\Tag\Model\SettingsDataFactory $settingsDataFactory)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $settingsDataFactory);
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
