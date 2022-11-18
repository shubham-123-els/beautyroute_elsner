<?php
namespace Magento\Catalog\Model\Design;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Design
 */
class Interceptor extends \Magento\Catalog\Model\Design implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Framework\View\DesignInterface $design, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\TranslateInterface $translator = null, ?\Magento\Catalog\Model\Category\Attribute\LayoutUpdateManager $categoryLayoutManager = null, ?\Magento\Catalog\Model\Product\Attribute\LayoutUpdateManager $productLayoutManager = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $localeDate, $design, $resource, $resourceCollection, $data, $translator, $categoryLayoutManager, $productLayoutManager);
    }

    /**
     * {@inheritdoc}
     */
    public function getDesignSettings($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDesignSettings');
        return $pluginInfo ? $this->___callPlugins('getDesignSettings', func_get_args(), $pluginInfo) : parent::getDesignSettings($object);
    }
}
