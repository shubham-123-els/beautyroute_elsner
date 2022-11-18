<?php
namespace WeltPixel\ProductLabels\Model\ProductLabels;

/**
 * Interceptor class for @see \WeltPixel\ProductLabels\Model\ProductLabels
 */
class Interceptor extends \WeltPixel\ProductLabels\Model\ProductLabels implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogRule\Model\Rule\Condition\CombineFactory $combineFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Framework\Model\ResourceModel\Iterator $resourceIterator, \Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($combineFactory, $productCollectionFactory, $storeManager, $storeRepository, $productFactory, $resourceIterator, $context, $registry, $formFactory, $localeDate, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }
}
