<?php
namespace Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\SyncAndSave;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\SyncAndSave
 */
class Interceptor extends \Sezzle\Sezzlepay\Controller\Adminhtml\SettlementReports\SyncAndSave implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Sezzle\Sezzlepay\Api\SettlementReportsManagementInterface $settlementReportsManagement)
    {
        $this->___init();
        parent::__construct($context, $dateTime, $settlementReportsManagement);
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
