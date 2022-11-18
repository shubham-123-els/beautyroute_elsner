<?php
namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\GridEdit;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\GridEdit
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\GridEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\FreeGifts\Model\RuleFactory $ruleFactory, \Magento\Framework\Controller\Result\Json $json)
    {
        $this->___init();
        parent::__construct($context, $ruleFactory, $json);
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
