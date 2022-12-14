<?php
namespace Ibnab\CloudZoomy\Block\Product\View\Gallery;

/**
 * Interceptor class for @see \Ibnab\CloudZoomy\Block\Product\View\Gallery
 */
class Interceptor extends \Ibnab\CloudZoomy\Block\Product\View\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ibnab\CloudZoomy\Helper\Data $dataHelper, \Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], ?\Magento\Catalog\Model\Product\Gallery\ImagesConfigFactoryInterface $imagesConfigFactory = null, array $galleryImagesConfig = [], ?\Magento\Catalog\Model\Product\Image\UrlBuilder $urlBuilder = null)
    {
        $this->___init();
        parent::__construct($dataHelper, $context, $arrayUtils, $jsonEncoder, $data, $imagesConfigFactory, $galleryImagesConfig, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getGalleryImagesJson()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGalleryImagesJson');
        return $pluginInfo ? $this->___callPlugins('getGalleryImagesJson', func_get_args(), $pluginInfo) : parent::getGalleryImagesJson();
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
