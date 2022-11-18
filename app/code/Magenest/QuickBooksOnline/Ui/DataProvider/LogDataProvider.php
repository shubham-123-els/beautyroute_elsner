<?php

namespace Magenest\QuickBooksOnline\Ui\DataProvider;

use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\ResourceModel\Log\CollectionFactory;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Sales\Model\Order;
use Magento\Ui\DataProvider\AbstractDataProvider;

/**
 * Class LogDataProvider
 * @package Magenest\QuickBooksOnline\Ui\DataProvider
 */
class LogDataProvider extends AbstractDataProvider
{
    const URL            = "<a href ='%1'>%2</a>";
    const ITEM_URL       = "catalog/product/edit/id/";
    const CUSTOMER_URL   = "customer/index/edit/id/";
    const ORDER_URL      = "sales/order/view/order_id/";
    const INVOICE_URL    = "sales/invoice/view/invoice_id/";
    const CREDITMEMO_URL = "sales/creditmemo/view/creditmemo_id/";

    /**
     * LogDataProvider constructor.
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param RequestInterface $request
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        RequestInterface $request,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
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

        $items = [];
        /** @var Log $log */
        foreach ($this->getCollection() as $log) {
            switch ($log->getType()) {
                case 'item':
                    $log->setTypeId(__(self::URL, $url->getUrl(self::ITEM_URL . $log->getTypeId()), $log->getTypeId()));
                    break;
                case 'customer':
                    $log->setTypeId(__(self::URL, $url->getUrl(self::CUSTOMER_URL . $log->getTypeId()), $log->getTypeId()));
                    break;
                case 'order':
                case 'ordervoid':
                    $id = $order->loadByIncrementId($log->getTypeId())->getId();
                    $log->setTypeId(__(self::URL, $url->getUrl(self::ORDER_URL . $id), $log->getTypeId()));
                    $order->unsetData();
                    break;
                case 'invoice':
                    $id = $invoice->loadByIncrementId($log->getTypeId())->getId();
                    $log->setTypeId(__(self::URL, $url->getUrl(self::INVOICE_URL . $id), $log->getTypeId()));
                    $order->unsetData();
                    break;
                case 'creditmemo':
                    $id = $creditmemo->load($log->getTypeId(), Order\Creditmemo::INCREMENT_ID)->getId();
                    $log->setTypeId(__(self::URL, $url->getUrl(self::CREDITMEMO_URL . $id), $log->getTypeId()));
                    $order->unsetData();
                    break;
            }
            $items[] = $log->toArray();
        }

        return [
            'totalRecords' => $this->collection->getSize(),
            'items'        => $items
        ];
    }
}
