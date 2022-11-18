<?php
namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Actions\AddGift;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Actions\AddGift
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Actions\AddGift implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Helper\Js $jsHelper, \Mageplaza\FreeGifts\Helper\Rule $helperRule, \Magento\Framework\Controller\Result\Json $json, \Magento\Catalog\Model\Session $catalogSession)
    {
        $this->___init();
        parent::__construct($context, $jsHelper, $helperRule, $json, $catalogSession);
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
