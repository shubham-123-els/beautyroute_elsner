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
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Model\ResourceModel\Rule\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Mageplaza\FreeGifts\Model\ResourceModel\Rule;
use Mageplaza\FreeGifts\Helper\Data as HelperData;
use Mageplaza\FreeGifts\Model\Source\State;
use Psr\Log\LoggerInterface as Logger;

/**
 * Class Collection
 * @package Mageplaza\FreeGifts\Model\ResourceModel\Rule\Grid
 */
class Collection extends SearchResult
{
    /**
     * @var HelperData
     */
    private $helperData;

    /**
     * Collection constructor.
     *
     * @param HelperData $helperData
     * @param EntityFactory $entityFactory
     * @param Logger $logger
     * @param FetchStrategy $fetchStrategy
     * @param EventManager $eventManager
     * @param string $mainTable
     * @param string $resourceModel
     *
     * @throws LocalizedException
     */
    public function __construct(
        HelperData $helperData,
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'mageplaza_freegifts_rules',
        $resourceModel = Rule::class
    ) {
        $this->helperData = $helperData;

        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel
        );
    }

    /**
     * @param array|string $field
     * @param null $condition
     *
     * @return mixed
     */
    public function addFieldToFilter($field, $condition = null)
    {
        if ($field === 'rule_id') {
            $field = 'main_table.' . $field;
        }

        if ($field === 'state') {
            $date = $this->helperData->getCurrentDate();
            switch ($condition['eq']) {
                case State::STATE_RUNNING:
                    $this->getSelect()->where(
                        "(`to_date` >= '{$date}' AND `from_date` <= '{$date}') OR (`to_date` IS NULL"
                        . " AND `from_date` <= '{$date}')"
                    );
                    break;
                case State::STATE_FINISHED:
                    $this->getSelect()->where("(`to_date` < '{$date}')");
                    break;
                case State::STATE_SCHEDULE:
                    $this->getSelect()->where("(`from_date` > '{$date}')");
                    break;
            }

            return $this;
        }
        if ($field === 'website_filter') {
            return parent::addFieldToFilter('website_id', ['finset' => $condition['eq']]);
        }
        if ($field === 'customer_group_filter') {
            return parent::addFieldToFilter('customer_group_ids', ['finset' => $condition['eq']]);
        }

        return parent::addFieldToFilter($field, $condition);
    }

    /**
     * @return $this|SearchResult
     */
    protected function _beforeLoad()
    {
        parent::_beforeLoad();

        $this->getSelect()->joinLeft(
            ['totalRevenues' => 'mageplaza_freegifts_totals'],
            'totalRevenues.mpfreegifts_rule_id = main_table.rule_id',
            [
                'order_item_count',
                'revenue'
            ]
        )->joinLeft(
            ['free_gifts' => 'mageplaza_freegifts_totals_free_gifts'],
            'free_gifts.mpfreegifts_rule_id = main_table.rule_id',
            [
                'total_item_count_free_gifts',
                'revenue_free_gifts',
                'order_count'
            ]
        );

        return $this;
    }
}
