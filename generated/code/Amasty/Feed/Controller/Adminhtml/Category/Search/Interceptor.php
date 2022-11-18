<?php
namespace Amasty\Feed\Controller\Adminhtml\Category\Search;

/**
 * Interceptor class for @see \Amasty\Feed\Controller\Adminhtml\Category\Search
 */
class Interceptor extends \Amasty\Feed\Controller\Adminhtml\Category\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Feed\Model\Category\ResourceModel\TaxonomyCollectionFactory $taxonomyCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $taxonomyCollectionFactory);
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
