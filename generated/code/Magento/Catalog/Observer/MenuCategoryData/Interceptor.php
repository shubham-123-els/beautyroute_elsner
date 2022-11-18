<?php
namespace Magento\Catalog\Observer\MenuCategoryData;

/**
 * Interceptor class for @see \Magento\Catalog\Observer\MenuCategoryData
 */
class Interceptor extends \Magento\Catalog\Observer\MenuCategoryData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Category $catalogCategory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($catalogCategory, $layerResolver, $registry);
    }

    /**
     * {@inheritdoc}
     */
    public function getMenuCategoryData($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMenuCategoryData');
        return $pluginInfo ? $this->___callPlugins('getMenuCategoryData', func_get_args(), $pluginInfo) : parent::getMenuCategoryData($category);
    }
}
