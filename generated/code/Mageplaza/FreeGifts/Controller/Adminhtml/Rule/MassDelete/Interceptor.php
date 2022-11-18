<?php
namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\MassDelete;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\MassDelete
 */
class Interceptor extends \Mageplaza\FreeGifts\Controller\Adminhtml\Rule\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Mageplaza\FreeGifts\Model\ResourceModel\Rule\CollectionFactory $ruleCollectionFactory, \Mageplaza\FreeGifts\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $ruleCollectionFactory, $bannerCollectionFactory);
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
