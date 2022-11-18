<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Sales Order Email order items
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace Elsner\Email\Block\Order\Email;

use Magento\Framework\View\Element\Template\Context;

class Items extends \Magento\Sales\Block\Items\AbstractItems
{
    private $orderRepository;

    protected $request;

    public function __construct(
        Context $context,
        array $data = [],
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Catalog\Model\ProductFactory $productloader
    ) { 
        $this->orderFactory = $orderFactory;
        $this->_checkoutSession = $checkoutSession;
        $this->productloader = $productloader;
        $this->storeManager = $storeManager;
        $this->request = $request;
        parent::__construct($context, $data);
    }


    public function getOrder()
    {
        $order = $this->_checkoutSession->getLastRealOrder();
        $orderId = $order->getEntityId();
        $orderinfo = $this->orderFactory->create()->loadByIncrementId($order->getIncrementId());
        return $orderinfo->getAllItems();
    }

    public function getProductImage($id) {
        $product = $this->productloader->create()->load($id);
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA)."catalog/product".$product->getThumbnail();
    }

    public function getCancleOrder() {
       $order_id = $this->request->getParam('order_id');
       $orderinfo = $this->orderFactory->create()->load($order_id);
       return $orderinfo->getAllItems();
    }
}
