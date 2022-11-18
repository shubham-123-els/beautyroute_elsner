<?php
namespace Dotdigitalgroup\Email\Block\Wishlist;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Wishlist
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Dotdigitalgroup\Email\Block\Helper\Font $font, \Dotdigitalgroup\Email\Model\Catalog\UrlFinder $urlFinder, \Dotdigitalgroup\Email\Model\Product\ImageType\Context\DynamicContent $imageType, \Dotdigitalgroup\Email\Model\Product\ImageFinder $imageFinder, \Magento\Customer\Model\ResourceModel\Customer $customerResource, \Dotdigitalgroup\Email\Model\ResourceModel\Wishlist $wishlist, \Magento\Customer\Model\CustomerFactory $customerFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $font, $urlFinder, $imageType, $imageFinder, $customerResource, $wishlist, $customerFactory, $helper, $priceHelper, $data);
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
