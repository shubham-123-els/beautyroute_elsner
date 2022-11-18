<?php
namespace Magento\Sales\Block\Order\Items;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Items
 */
class Interceptor extends \Magento\Sales\Block\Order\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory $itemCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $itemCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemHtml');
        return $pluginInfo ? $this->___callPlugins('getItemHtml', func_get_args(), $pluginInfo) : parent::getItemHtml($item);
    }
}
