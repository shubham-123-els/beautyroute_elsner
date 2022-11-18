<?php
namespace Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\View;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\View
 */
class Interceptor extends \Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Sezzle\Sezzlepay\Api\SettlementReportsManagementInterface $settlementReportsManagement, \Magento\Framework\Registry $coreRegistry, \Sezzle\Sezzlepay\Helper\Data $sezzleHelper, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $settlementReportsManagement, $coreRegistry, $sezzleHelper, $resultPageFactory);
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
