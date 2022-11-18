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

namespace Mageplaza\TableRateShipping\Model;

use Exception;
use Magento\Directory\Model\RegionFactory;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Exception\ValidatorException;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\ImportExport\Model\Import as ImportModel;
use Magento\ImportExport\Model\ResourceModel\Import\Data;
use Mageplaza\TableRateShipping\Block\Adminhtml\Import\Result;

/**
 * Class Import
 * @package Mageplaza\TableRateShipping\Model
 */
class Import extends AbstractModel
{
    const COL_NAME                    = 'name';
    const COL_COUNTRY_ID              = 'country_id';
    const COL_REGION                  = 'region';
    const COL_WEIGHT_FROM             = 'weight_from';
    const COL_WEIGHT_TO               = 'weight_to';
    const COL_SUBTOTAL_FROM           = 'subtotal_from';
    const COL_SUBTOTAL_TO             = 'subtotal_to';
    const COL_QTY_FROM                = 'qty_from';
    const COL_QTY_TO                  = 'qty_to';
    const COL_PRODUCT_FIXED_RATE      = 'product_fixed_rate';
    const COL_PRODUCT_PERCENTAGE_RATE = 'product_percentage_rate';
    const COL_WEIGHT_FIXED_RATE       = 'weight_fixed_rate';
    const COL_ORDER_FIXED_RATE        = 'order_fixed_rate';
    const COL_DELIVERY                = 'delivery';

    /**
     * Valid column names
     *
     * @var array
     */
    protected $_columnNames = [
        self::COL_NAME,
        self::COL_COUNTRY_ID,
        self::COL_REGION,
        self::COL_WEIGHT_FROM,
        self::COL_WEIGHT_TO,
        self::COL_SUBTOTAL_FROM,
        self::COL_SUBTOTAL_TO,
        self::COL_QTY_FROM,
        self::COL_QTY_TO,
        self::COL_PRODUCT_FIXED_RATE,
        self::COL_PRODUCT_PERCENTAGE_RATE,
        self::COL_WEIGHT_FIXED_RATE,
        self::COL_ORDER_FIXED_RATE,
        self::COL_DELIVERY,
    ];

    /**
     * @var bool
     */
    private $_isValid = true;

    /**
     * @var Data
     */
    private $importData;

    /**
     * @var ImportModel
     */
    private $importModel;

    /**
     * @var RateFactory
     */
    private $rateFactory;

    /**
     * @var RegionFactory
     */
    private $regionFactory;

    /**
     * @var \Mageplaza\TableRateShipping\Helper\Data
     */
    private $helper;

    /**
     * AbstractImport constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param Data $importData
     * @param ImportModel $importModel
     * @param RateFactory $rateFactory
     * @param RegionFactory $regionFactory
     * @param \Mageplaza\TableRateShipping\Helper\Data $helper
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Data $importData,
        ImportModel $importModel,
        RateFactory $rateFactory,
        RegionFactory $regionFactory,
        \Mageplaza\TableRateShipping\Helper\Data $helper,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->importData    = $importData;
        $this->importModel   = $importModel;
        $this->rateFactory   = $rateFactory;
        $this->regionFactory = $regionFactory;
        $this->helper        = $helper;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Data validate status
     *
     * @return bool
     */
    public function isValidate()
    {
        return $this->_isValid;
    }

    /**
     * @param array $rawData
     * @param Result $resultBlock
     *
     * @return array
     */
    public function processDataBunch($rawData, $resultBlock)
    {
        $bunch      = [];
        $colHeaders = $this->getColHeaders($rawData);

        if (!$this->validateColHeaders($colHeaders, $resultBlock)) {
            return $bunch;
        }

        /** @var array $rowData */
        foreach ($rawData as $rowIndex => $rowData) {
            if ($rowIndex === 0) {
                continue;
            }

            $temp = [];
            foreach ($rowData as $key => $value) {
                $temp[$colHeaders[$key]] = $value;
            }
            $bunch[] = $temp;
        }

        if (empty($bunch)) {
            $this->_isValid = false;
            $resultBlock->addError(__('Invalid entity'));
        }

        return $bunch;
    }

    /**
     * @param array $rawData
     *
     * @return array
     */
    private function getColHeaders($rawData)
    {
        $colHeaders = [];

        /** @var array $rowData */
        foreach ($rawData as $rowIndex => $rowData) {
            if ($rowIndex === 0) {
                foreach ($rowData as $rowHeader) {
                    $colHeaders[] = $rowHeader;
                }

                break;
            }
        }

        return $colHeaders;
    }

    /**
     * @param array $colHeaders
     * @param Result $resultBlock
     *
     * @return bool
     */
    private function validateColHeaders($colHeaders, $resultBlock)
    {
        $absentColumns = array_diff($this->_columnNames, $colHeaders);
        if ($absentColumns) {
            $absentColumns = implode(', ', $absentColumns);
            $resultBlock->addError(__('Column <strong>%1</strong> not found', $absentColumns));
            $this->_isValid = false;
        }

        return $this->_isValid;
    }

    /**
     * @param array $bunchData
     * @param Result $resultBlock
     * @param int $methodId
     *
     * @return array
     * @throws ValidatorException
     */
    public function processImport($bunchData, $resultBlock, $methodId)
    {
        $importDataSource = $this->importModel->getDataSourceModel();
        $importDataSource->cleanBunches();
        $importDataSource->saveBunch('mp_table_rate', ImportModel::BEHAVIOR_APPEND, $bunchData);

        $success = 0;
        $error   = 0;

        while ($rates = $this->importData->getNextBunch()) {
            foreach ($rates as $rate) {
                $rate['method_id'] = $methodId;
                $this->processRateData($rate);
                try {
                    $this->rateFactory->create()->setData($rate)->save();
                    $success++;
                } catch (Exception $e) {
                    $resultBlock->addError($e->getMessage());
                    $error++;
                }
            }
        }

        return compact('success', 'error');
    }

    /**
     * @param array $rate
     */
    private function processRateData(&$rate)
    {
        if (empty($rate['region'])) {
            $rate['region'] = '*';
        }

        if (empty($rate['country_id'])) {
            $rate['country_id'] = '*';
        }

        $region = $this->regionFactory->create()->loadByCode($rate['region'], $rate['country_id']);

        if ($regionId = $region->getId()) {
            $rate['region'] = $regionId;
        }

        $rate['postcode_range'] = false;
        foreach (['postcode_from', 'postcode_to'] as $key) {
            if (empty($rate[$key])) {
                continue;
            }

            $postcode = $this->helper->getPostcodeData($rate[$key]);

            $rate[$key . '_alpha']  = $postcode['alpha'];
            $rate[$key . '_num']    = $postcode['num'];
            $rate['postcode_range'] = true;
        }
    }
}
