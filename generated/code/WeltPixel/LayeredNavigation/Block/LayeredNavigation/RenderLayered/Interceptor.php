<?php
namespace WeltPixel\LayeredNavigation\Block\LayeredNavigation\RenderLayered;

/**
 * Interceptor class for @see \WeltPixel\LayeredNavigation\Block\LayeredNavigation\RenderLayered
 */
class Interceptor extends \WeltPixel\LayeredNavigation\Block\LayeredNavigation\RenderLayered implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Eav\Model\Entity\Attribute $eavAttribute, \Magento\Catalog\Model\ResourceModel\Layer\Filter\AttributeFactory $layerAttribute, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Swatches\Helper\Media $mediaHelper, \WeltPixel\LayeredNavigation\Model\AttributeOptions $attributeOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $eavAttribute, $layerAttribute, $swatchHelper, $mediaHelper, $attributeOptions, $data);
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
