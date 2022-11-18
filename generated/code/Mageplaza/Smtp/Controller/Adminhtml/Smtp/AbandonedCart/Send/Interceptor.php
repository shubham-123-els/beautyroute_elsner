<?php
namespace Mageplaza\Smtp\Controller\Adminhtml\Smtp\AbandonedCart\Send;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Controller\Adminhtml\Smtp\AbandonedCart\Send
 */
class Interceptor extends \Mageplaza\Smtp\Controller\Adminhtml\Smtp\AbandonedCart\Send implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Quote\Model\QuoteRepository $quoteRepository, \Magento\Framework\App\AreaList $areaList, \Magento\Email\Model\Template $emailTemplate, \Psr\Log\LoggerInterface $logger, \Magento\Email\Model\Template\SenderResolver $senderResolver, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Registry $registry, \Mageplaza\Smtp\Helper\EmailMarketing $helperEmailMarketing)
    {
        $this->___init();
        parent::__construct($context, $quoteRepository, $areaList, $emailTemplate, $logger, $senderResolver, $transportBuilder, $registry, $helperEmailMarketing);
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
