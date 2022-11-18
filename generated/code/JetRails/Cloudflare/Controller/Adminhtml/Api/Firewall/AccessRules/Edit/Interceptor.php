<?php
namespace JetRails\Cloudflare\Controller\Adminhtml\Api\Firewall\AccessRules\Edit;

/**
 * Interceptor class for @see \JetRails\Cloudflare\Controller\Adminhtml\Api\Firewall\AccessRules\Edit
 */
class Interceptor extends \JetRails\Cloudflare\Controller\Adminhtml\Api\Firewall\AccessRules\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Json\Helper\Data $jsonData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $request, $jsonData, $data);
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
