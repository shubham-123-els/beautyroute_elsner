<?php
namespace Elsner\Email\Block\Order\Email\Items;

/**
 * Interceptor class for @see \Elsner\Email\Block\Order\Email\Items
 */
class Interceptor extends \Elsner\Email\Block\Order\Email\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Request\Http $request, \Magento\Catalog\Model\ProductFactory $productloader)
    {
        $this->___init();
        parent::__construct($context, $data, $checkoutSession, $orderFactory, $storeManager, $request, $productloader);
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
