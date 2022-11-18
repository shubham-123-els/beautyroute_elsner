<?php
namespace WeltPixel\NavigationLinks\Block\Html\Topmenu;

/**
 * Interceptor class for @see \WeltPixel\NavigationLinks\Block\Html\Topmenu
 */
class Interceptor extends \WeltPixel\NavigationLinks\Block\Html\Topmenu implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Tree\NodeFactory $nodeFactory, \Magento\Framework\Data\TreeFactory $treeFactory, \Magento\Cms\Model\BlockRepository $staticBlockRepository, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \WeltPixel\NavigationLinks\Helper\Data $wpHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $nodeFactory, $treeFactory, $staticBlockRepository, $filterProvider, $wpHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml($outermostClass = '', $childrenWrapClass = '', $limit = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtml');
        return $pluginInfo ? $this->___callPlugins('getHtml', func_get_args(), $pluginInfo) : parent::getHtml($outermostClass, $childrenWrapClass, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        return $pluginInfo ? $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo) : parent::getCacheKeyInfo();
    }
}
