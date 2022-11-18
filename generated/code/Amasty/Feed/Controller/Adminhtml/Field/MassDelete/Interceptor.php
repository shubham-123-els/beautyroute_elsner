<?php
namespace Amasty\Feed\Controller\Adminhtml\Field\MassDelete;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Field\MassDelete
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Field\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Amasty\Feed\Api\CustomFieldsRepositoryInterface $repository, \Amasty\Feed\Model\Field\ResourceModel\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $repository, $collectionFactory);
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
