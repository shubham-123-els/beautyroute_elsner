<?php
namespace Yireo\Webp2\Controller\Test\Mail;

/**
 * Interceptor class for @see \Yireo\Webp2\Controller\Test\Mail
 */
class Interceptor extends \Yireo\Webp2\Controller\Test\Mail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\LayoutFactory $layoutFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\DeploymentConfig $config, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($transportBuilder, $storeManager, $layoutFactory, $request, $jsonFactory, $scopeConfig, $config, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
