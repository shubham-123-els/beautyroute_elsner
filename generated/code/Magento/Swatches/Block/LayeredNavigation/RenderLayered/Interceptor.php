<?php
namespace Magento\Swatches\Block\LayeredNavigation\RenderLayered;

/**
 * Interceptor class for @see \Magento\Swatches\Block\LayeredNavigation\RenderLayered
 */
class Interceptor extends \Magento\Swatches\Block\LayeredNavigation\RenderLayered implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Eav\Model\Entity\Attribute $eavAttribute, \Magento\Catalog\Model\ResourceModel\Layer\Filter\AttributeFactory $layerAttribute, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Swatches\Helper\Media $mediaHelper, array $data = [], ?\Magento\Theme\Block\Html\Pager $htmlPagerBlock = null)
    {
        $this->___init();
        parent::__construct($context, $eavAttribute, $layerAttribute, $swatchHelper, $mediaHelper, $data, $htmlPagerBlock);
    }

    /**
     * {@inheritdoc}
     */
    public function buildUrl($attributeCode, $optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildUrl');
        return $pluginInfo ? $this->___callPlugins('buildUrl', func_get_args(), $pluginInfo) : parent::buildUrl($attributeCode, $optionId);
    }
}
