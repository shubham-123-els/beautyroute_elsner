<?php
namespace Amasty\Base\Controller\Adminhtml\Notification\Frequency;

/**
 * Interceptor class for @see \Amasty\Base\Controller\Adminhtml\Notification\Frequency
 */
class Interceptor extends \Amasty\Base\Controller\Adminhtml\Notification\Frequency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Base\Model\Config $config, \Amasty\Base\Model\Source\Frequency $frequency)
    {
        $this->___init();
        parent::__construct($context, $config, $frequency);
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
