<?php
namespace Magento\InventoryCatalog\Model\UpdateInventory;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\UpdateInventory
 */
class Interceptor extends \Magento\InventoryCatalog\Model\UpdateInventory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Indexer\Stock\Processor $stockIndexerProcessor, \Magento\InventoryCatalog\Model\ResourceModel\UpdateLegacyStockItems $updateLegacyStockItems, \Magento\InventoryCatalogApi\Model\GetProductIdsBySkusInterface $getProductIdsBySkus, \Magento\InventoryCatalog\Model\GetDefaultSourceItemBySku $getDefaultSourceItemBySku, \Magento\InventoryApi\Api\SourceItemsSaveInterface $sourceItemsSave, \Magento\InventoryApi\Api\GetSourceItemsBySkuInterface $getSourceItemsBySku, \Magento\InventoryIndexer\Indexer\SourceItem\GetSourceItemIds $getSourceItemIds, \Magento\InventoryIndexer\Indexer\SourceItem\SourceItemIndexer $sourceItemIndexer, \Magento\Framework\Serialize\SerializerInterface $serializer, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($stockIndexerProcessor, $updateLegacyStockItems, $getProductIdsBySkus, $getDefaultSourceItemBySku, $sourceItemsSave, $getSourceItemsBySku, $getSourceItemIds, $sourceItemIndexer, $serializer, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\InventoryCatalog\Model\UpdateInventory\InventoryData $data) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($data);
    }
}
