<?php
namespace Mageplaza\FreeGifts\Model\ResourceModel\Rule\Grid\Collection;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Model\ResourceModel\Rule\Grid\Collection
 */
class Interceptor extends \Mageplaza\FreeGifts\Model\ResourceModel\Rule\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\FreeGifts\Helper\Data $helperData, \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, $mainTable = 'mageplaza_freegifts_rules', $resourceModel = 'Mageplaza\\FreeGifts\\Model\\ResourceModel\\Rule')
    {
        $this->___init();
        parent::__construct($helperData, $entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
