<?php
namespace WeltPixel\EnhancedEmail\Block\Order\Creditmemo\Totals;

/**
 * Interceptor class for @see \WeltPixel\EnhancedEmail\Block\Order\Creditmemo\Totals
 */
class Interceptor extends \WeltPixel\EnhancedEmail\Block\Order\Creditmemo\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\EnhancedEmail\Helper\Data $wpHelper, \Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($wpHelper, $context, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        return $pluginInfo ? $this->___callPlugins('getOrder', func_get_args(), $pluginInfo) : parent::getOrder();
    }
}
