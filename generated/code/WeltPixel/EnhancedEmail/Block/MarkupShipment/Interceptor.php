<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupShipment;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupShipment
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupShipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Model\Region $region, \Magento\Shipping\Model\Order\TrackFactory $trackFactory, \Magento\Catalog\Helper\Image $imageHelper, \WeltPixel\EnhancedEmail\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $region, $trackFactory, $imageHelper, $helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemHtml');
        return $pluginInfo ? $this->___callPlugins('getItemHtml', func_get_args(), $pluginInfo) : parent::getItemHtml($item);
    }
}
