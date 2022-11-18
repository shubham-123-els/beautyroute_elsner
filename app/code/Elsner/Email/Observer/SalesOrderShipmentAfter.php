<?php

namespace Elsner\Email\Observer;
use Magento\Framework\Event\ObserverInterface;

class SalesOrderShipmentAfter implements ObserverInterface
{
    public function __construct(
        \Elsner\Email\Model\OrderEmail $orderemail
    ) {
        $this->_orderemail = $orderemail;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $shipment = $observer->getEvent()->getShipment();
        $tracksCollection = $shipment->getTracksCollection();
        foreach ($tracksCollection->getItems() as $track) {
            $trackNumber[] = $track->getTrackNumber();
        }
        if (!empty($trackNumber[0])) {
            $this->_orderemail->ShipmentOrderEmail($trackNumber[0],$shipment->getorderId());
        }
    }
}