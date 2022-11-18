<?php
namespace Magento\Sales\Model\Order\Creditmemo\Item;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Creditmemo\Item
 */
class Interceptor extends \Magento\Sales\Model\Order\Creditmemo\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Sales\Model\Order\ItemFactory $orderItemFactory, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $orderItemFactory, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }
}
