<?php
namespace Elsner\Email\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Framework\Escaper;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Sales\Model\OrderFactory;
use Magento\Framework\Message\ManagerInterface;

class OrderEmail extends \Magento\Framework\Model\AbstractModel
{
    protected $orderFactory;

    public function __construct(
        StateInterface $inlineTranslation,
        Escaper $escaper,
        TransportBuilder $transportBuilder,
        ManagerInterface $messageManager,
        OrderFactory $orderFactory,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->inlineTranslation = $inlineTranslation;
        $this->escaper = $escaper;
        $this->transportBuilder = $transportBuilder;
        $this->messageManager = $messageManager;
        $this->orderFactory = $orderFactory;
        $this->scopeConfig = $scopeConfig;
    }

    public function getConfigValue($field, $storeId = null) {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function isEnable() {
        return $this->scopeConfig->getValue('elsneremail/general/enable', ScopeInterface::SCOPE_STORE);
    }

    public function CreditMemoAfter($order_id) {
        $order = $this->orderFactory->create()->load($order_id);
        $this->CancleOrderEmail($order->getCustomerEmail(),$order->getincrementId());
    }

    public function ShipmentOrderEmail($order,$order_id) {
        $is_enable = $this->isEnable();
        $sender_email = $this->scopeConfig->getValue('elsneremail/general/sender_email', ScopeInterface::SCOPE_STORE);
        $bcc_email = $this->scopeConfig->getValue('sales_email/shipment/copy_to', ScopeInterface::SCOPE_STORE);
        if ($is_enable==TRUE) {
            $orderinfo = $this->orderFactory->create()->load($order_id);
            $this->inlineTranslation->suspend();
            $sender = [
                'name' => $this->escaper->escapeHtml('Shipping Conformation Email'),
                'email' => $this->escaper->escapeHtml($sender_email),
            ];
            $transport = $this->transportBuilder
                ->setTemplateIdentifier('shipping_conform')
                ->setTemplateOptions(
                    [
                        'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
                        'store' => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
                    ]
                )
                ->setTemplateVars([
                    'traking_id' => $order
                ])
                ->setFrom($sender)
                ->addTo($orderinfo->getCustomerEmail())
                ->addBcc($bcc_email)
                ->getTransport();
            $transport->sendMessage();
            $this->inlineTranslation->resume();
        }
    }

    public function CancleOrderEmail($email,$incrementId) {
        $is_enable = $this->isEnable();
        $sender_email = $this->scopeConfig->getValue('elsneremail/general/sender_email', ScopeInterface::SCOPE_STORE);
        $bcc_email = $this->scopeConfig->getValue('sales_email/creditmemo/copy_to', ScopeInterface::SCOPE_STORE);
        if ($is_enable==TRUE) {
            $this->inlineTranslation->suspend();
            $sender = [
                'name' => $this->escaper->escapeHtml('Order Cancle Email'),
                'email' => $this->escaper->escapeHtml($sender_email),
            ];
            $transport = $this->transportBuilder
                ->setTemplateIdentifier('cancle_order')
                ->setTemplateOptions(
                    [
                        'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
                        'store' => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
                    ]
                )
                ->setTemplateVars([
                    'incrementid' => $incrementId
                ])
                ->setFrom($sender)
                ->addTo($email)
                ->addBcc($bcc_email)
                ->getTransport();
            $transport->sendMessage();
            $this->inlineTranslation->resume();
        }
    }
}
