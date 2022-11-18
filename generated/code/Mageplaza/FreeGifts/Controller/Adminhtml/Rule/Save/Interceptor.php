<?php
namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Save;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Save
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Registry $registry, \Magento\Framework\Stdlib\DateTime\DateTime $datetime, \Mageplaza\FreeGifts\Model\RuleFactory $ruleFactory, \Mageplaza\FreeGifts\Model\Source\Apply $applyType, \Magento\Catalog\Model\Session $catalogSession, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\FreeGifts\Model\BannerFactory $bannerFactory, \Magento\Framework\Stdlib\DateTime\DateTime $date)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $registry, $datetime, $ruleFactory, $applyType, $catalogSession, $resultPageFactory, $bannerFactory, $date);
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
