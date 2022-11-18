<?php
namespace Mageplaza\FreeGifts\Block\Product\View\Type\Grouped;

/**
 * Interceptor class for @see \Mageplaza\FreeGifts\Block\Product\View\Type\Grouped
 */
class Interceptor extends \Mageplaza\FreeGifts\Block\Product\View\Type\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Mageplaza\FreeGifts\Helper\Data $helperData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $helperData, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
