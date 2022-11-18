<?php
namespace Elsner\Email\Block\Order\Email;

class EmailItems extends \Magento\Sales\Block\Order\Email\Items
{
    public function getOrder()
    {
        $order = $this->getData('order');

        if ($order !== null) {
            return $order;
        }
        $orderId = (int)$this->getData('order_id');
        return $orderId;
    }
}
