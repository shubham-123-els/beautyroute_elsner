<?php
namespace JetRails\Cloudflare\Controller\Adminhtml\Dashboard\Save;

/**
 * Interceptor class for @see \JetRails\Cloudflare\Controller\Adminhtml\Dashboard\Save
 */
class Interceptor extends \JetRails\Cloudflare\Controller\Adminhtml\Dashboard\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \JetRails\Cloudflare\Helper\Adminhtml\Data $dataHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $dataHelper, $data);
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
