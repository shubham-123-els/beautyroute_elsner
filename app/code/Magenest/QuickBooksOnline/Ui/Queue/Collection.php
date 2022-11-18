<?php

namespace Magenest\QuickBooksOnline\Ui\Queue;

use Magenest\QuickBooksOnline\Model\Queue;
use Magenest\QuickBooksOnline\Model\ResourceModel\Queue\CollectionFactory;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Sales\Model\Order;
use Magento\Ui\DataProvider\AbstractDataProvider;

/**
 * Class Collection
 * @package Magenest\QuickBooksOnline\Ui\Queue
 */
class Collection extends AbstractDataProvider
{
    const URL            = "<a href ='%1'>%2</a>";
    const ITEM_URL       = "catalog/product/edit/id/";
    const CUSTOMER_URL   = "customer/index/edit/id/";
    const ORDER_URL      = "sales/order/view/order_id/";
    const INVOICE_URL    = "sales/invoice/view/invoice_id/";
    const CREDITMEMO_URL = "sales/creditmemo/view/creditmemo_id/";

    /**
     * @var RequestInterface
     */
    protected $request;

    protected $queueFactory;

    /**
     * Collection constructor.
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param RequestInterface $request
     * @param CollectionFactory $queueFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        RequestInterface $request,
        CollectionFactory $queueFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $queueFactory->create();
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        /** @var \Magento\Framework\UrlInterface $url */
        $url = ObjectManager::getInstance()->get(\Magento\Framework\UrlInterface::class);

        /** @var Order $order */
        $order = ObjectManager::getInstance()->get(Order::class);

        /** @var Order\Invoice $invoice */
        $invoice = ObjectManager::getInstance()->get(Order\Invoice::class);

        /** @var Order\Creditmemo $creditmemo */
        $creditmemo = ObjectManager::getInstance()->get(Order\Creditmemo::class);
        $items      = [];
        /** @var Queue $queue */
        foreach ($this->getCollection() as $queue) {
            switch ($queue->getType()) {
                case 'item':
                    $queue->setTypeId(__(self::URL, $url->getUrl(self::ITEM_URL . $queue->getTypeId()), $queue->getTypeId()));
                    break;
                case 'customer':
                    $queue->setTypeId(__(self::URL, $url->getUrl(self::CUSTOMER_URL . $queue->getTypeId()), $queue->getTypeId()));
                    break;
                case 'order':
                case 'ordervoid':
                    $id = $order->loadByIncrementId($queue->getTypeId())->getId();
                    $queue->setTypeId(__(self::URL, $url->getUrl(self::ORDER_URL . $id), $queue->getTypeId()));
                    $order->unsetData();
                    break;
                case 'invoice':
                    $id = $invoice->loadByIncrementId($queue->getTypeId())->getId();
                    $queue->setTypeId(__(self::URL, $url->getUrl(self::INVOICE_URL . $id), $queue->getTypeId()));
                    $order->unsetData();
                    break;
                case 'creditmemo':
                    $id = $creditmemo->load($queue->getTypeId(), Order\Creditmemo::INCREMENT_ID)->getId();
                    $queue->setTypeId(__(self::URL, $url->getUrl(self::CREDITMEMO_URL . $id), $queue->getTypeId()));
                    $order->unsetData();
                    break;
            }
            $items[] = $queue->toArray();
        }

        return [
            'totalRecords' => $this->collection->getSize(),
            'items'        => $items
        ];
    }
}
