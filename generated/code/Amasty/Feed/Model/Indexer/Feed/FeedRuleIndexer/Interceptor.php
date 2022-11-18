<?php
namespace Amasty\Feed\Model\Indexer\Feed\FeedRuleIndexer;

/**
 * Interceptor class for @see \Amasty\Feed\Model\Indexer\Feed\FeedRuleIndexer
 */
class Interceptor extends \Amasty\Feed\Model\Indexer\Feed\FeedRuleIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Amasty\Feed\Model\Indexer\Feed\IndexBuilder $indexBuilder, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($indexBuilder, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
