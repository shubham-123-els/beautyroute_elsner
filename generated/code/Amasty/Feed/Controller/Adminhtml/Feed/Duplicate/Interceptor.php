<?php
namespace Amasty\Feed\Controller\Adminhtml\Feed\Duplicate;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Feed\Duplicate
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Feed\Duplicate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Amasty\Feed\Model\Feed\Copier $feedCopier, \Magento\Ui\Component\MassAction\Filter $filter, \Amasty\Feed\Model\ResourceModel\Feed\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $logger, $feedCopier, $filter, $collectionFactory);
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
