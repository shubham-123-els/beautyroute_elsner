<?php
namespace Magefan\GeoIp\Controller\Adminhtml\Maxmind\Update;

/**
 * Interceptor class for @see \Magefan\GeoIp\Controller\Adminhtml\Maxmind\Update
 */
class Interceptor extends \Magefan\GeoIp\Controller\Adminhtml\Maxmind\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magefan\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind)
    {
        $this->___init();
        parent::__construct($context, $maxMind);
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
