<?php
namespace Dotdigitalgroup\Email\Block\Recommended\Mostviewed;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Recommended\Mostviewed
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Recommended\Mostviewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Dotdigitalgroup\Email\Block\Helper\Font $font, \Dotdigitalgroup\Email\Model\Catalog\UrlFinder $urlFinder, \Dotdigitalgroup\Email\Model\Product\ImageType\Context\DynamicContent $imageType, \Dotdigitalgroup\Email\Model\Product\ImageFinder $imageFinder, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Dotdigitalgroup\Email\Model\ResourceModel\Catalog $catalog, \Dotdigitalgroup\Email\Helper\Recommended $recommended, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $font, $urlFinder, $imageType, $imageFinder, $helper, $priceHelper, $catalog, $recommended, $data);
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
