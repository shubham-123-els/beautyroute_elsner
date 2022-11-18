<?php
namespace WeltPixel\EnhancedEmail\Block\Order\Email\Items;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Order\Email\Items
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Order\Email\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($wpHelper, $context, $data);
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
