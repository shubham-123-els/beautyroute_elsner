<?php
namespace WeltPixel\EnhancedEmail\Block\MarkupInvoice;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\MarkupInvoice
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\MarkupInvoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \WeltPixel\EnhancedEmail\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productRepository, $imageHelper, $priceHelper, $helper, $data);
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
