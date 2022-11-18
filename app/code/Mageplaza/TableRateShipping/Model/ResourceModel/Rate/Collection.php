<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Model\ResourceModel\Rate;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Quote\Model\Quote\Item;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Rate;
use Psr\Log\LoggerInterface;

/**
 * Class Collection
 * @package Mageplaza\TableRateShipping\Model\ResourceModel\Rate
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'rate_id';

    /**
     * @var Data
     */
    private $helper;

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(Rate::class, \Mageplaza\TableRateShipping\Model\ResourceModel\Rate::class);
    }

    /**
     * Collection constructor.
     *
     * @param EntityFactoryInterface $entityFactory
     * @param LoggerInterface $logger
     * @param FetchStrategyInterface $fetchStrategy
     * @param ManagerInterface $eventManager
     * @param Data $helper
     * @param AdapterInterface|null $connection
     * @param AbstractDb|null $resource
     */
    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        Data $helper,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
    ) {
        $this->helper = $helper;

        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
    }

    /**
     * Retrieve option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray('rate_id');
    }

    /**
     * @param RateRequest $request
     * @param array $cartData
     *
     * @return $this
     */
    public function filterByRequest($request, $cartData)
    {
        $postRange = $this->helper->getPostcodeData($request->getDestPostcode());

        $this->filter('country_id', $request->getDestCountryId())
            ->filter('region', $request->getDestRegionId())
            ->filter('postcode_from_alpha', $postRange['alpha'])
            ->filter('postcode_to_alpha', $postRange['alpha'])
            ->filter('postcode_from_num', ['lteq' => (int) $postRange['num']])
            ->filter('postcode_to_num', ['gteq' => (int) $postRange['num']]);

        $this->getSelect()->where(
            "? LIKE postcode OR postcode IS NULL OR postcode = '' OR postcode = '*'",
            $request->getDestPostcode()
        );

        foreach ($this->getShippingGroup($request) as $shippingGroup) {
            $this->addFieldToFilter('shipping_group', [['null' => true], ['finset' => $shippingGroup]]);
        }

        $conditions = [
            'weight'   => $cartData['weight'],
            'subtotal' => $cartData['subtotal'],
            'qty'      => $cartData['qty'],
        ];

        foreach ($conditions as $key => $value) {
            $this->filter($key . '_from', ['lteq' => $value])
                ->filter($key . '_to', ['gteq' => $value]);
        }

        return $this;
    }

    /**
     * @param string|array $field
     * @param null|string|array $cond
     *
     * @return Collection
     */
    private function filter($field, $cond = null)
    {
        return $this->addFieldToFilter($field, [['null' => true], [''], ['*'], [$cond]]);
    }

    /**
     * @param RateRequest $request
     *
     * @return array
     */
    private function getShippingGroup($request)
    {
        $types = [];

        /** @var Item $item */
        foreach ($request->getAllItems() as $item) {
            if (in_array($item->getProductType(), ['bundle', 'configurable'], true)) {
                continue;
            }

            $type = $this->helper->getProdAttrVal($item->getProduct(), Data::SHIP_TYPE_ATTR);

            if ($type && !in_array($type, $types, true)) {
                $types[] = $type;
            }
        }

        return $types;
    }
}
