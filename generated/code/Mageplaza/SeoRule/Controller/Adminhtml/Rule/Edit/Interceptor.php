<?php
namespace Mageplaza\SeoRule\Controller\Adminhtml\Rule\Edit;

/**
 * Interceptor class for @see \Mageplaza\SeoRule\Controller\Adminhtml\Rule\Edit
 */
class Interceptor extends \Mageplaza\SeoRule\Controller\Adminhtml\Rule\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Mageplaza\SeoRule\Model\RuleFactory $seoRuleFactory, \Mageplaza\SeoRule\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $seoRuleFactory, $helperData);
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
