<?php
namespace Magento\LayeredNavigation\Block\Navigation;

/**
 * Interceptor class for @see \Magento\LayeredNavigation\Block\Navigation
 */
class Interceptor extends \Magento\LayeredNavigation\Block\Navigation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Model\Layer\FilterList $filterList, \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canShowBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowBlock');
        return $pluginInfo ? $this->___callPlugins('canShowBlock', func_get_args(), $pluginInfo) : parent::canShowBlock();
    }
}
