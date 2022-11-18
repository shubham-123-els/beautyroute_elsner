<?php
namespace Dotdigitalgroup\Email\Controller\Email\Accountcallback;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Controller\Email\Accountcallback
 */
class Interceptor extends \Dotdigitalgroup\Email\Controller\Email\Accountcallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Stdlib\DateTime\Timezone $timezone, \Dotdigitalgroup\Email\Model\Trial\TrialSetupFactory $trialSetupFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Module\Manager $moduleManager)
    {
        $this->___init();
        parent::__construct($context, $timezone, $trialSetupFactory, $helper, $moduleManager);
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
