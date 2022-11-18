<?php
namespace Magento\OfflineShipping\Model\SalesRule\Calculator;

/**
 * Interceptor class for @see \Magento\OfflineShipping\Model\SalesRule\Calculator
 */
class Interceptor extends \Magento\OfflineShipping\Model\SalesRule\Calculator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $collectionFactory, \Magento\Catalog\Helper\Data $catalogData, \Magento\SalesRule\Model\Utility $utility, \Magento\SalesRule\Model\RulesApplier $rulesApplier, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\SalesRule\Model\Validator\Pool $validators, \Magento\Framework\Message\ManagerInterface $messageManager, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\SalesRule\Helper\CartFixedDiscount $cartFixedDiscount = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $collectionFactory, $catalogData, $utility, $rulesApplier, $priceCurrency, $validators, $messageManager, $resource, $resourceCollection, $data, $cartFixedDiscount);
    }

    /**
     * {@inheritdoc}
     */
    public function processFreeShipping(\Magento\Quote\Model\Quote\Item\AbstractItem $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFreeShipping');
        return $pluginInfo ? $this->___callPlugins('processFreeShipping', func_get_args(), $pluginInfo) : parent::processFreeShipping($item);
    }
}
