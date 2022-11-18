<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Cache\TypeListInterface;

/**
 * Class Config
 * @package Magenest\QuickBooksOnline\Model
 */
class Config
{
    /**@#+
     * Constants Path for check
     */
    const XML_PATH_QBONLINE_IS_CONNECTED = 'qbonline/connection/is_connected';
    const XML_PATH_QBONLINE_APP_MODE     = 'qbonline/connection/app_mode';
    const XML_PATH_QBONLINE_COMPANY_ID   = 'qbonline/connection/company_id';
    /**@#+
     * Production Mode Application
     */
    const XML_PATH_PRODUCTION_APPLICATION_TOKEN = 'qbonline/production_mode/application_token';
    const XML_PATH_PRODUCTION_CONSUMER_KEY      = 'qbonline/production_mode/consumer_key';
    const XML_PATH_PRODUCTION_CONSUMER_SECRET   = 'qbonline/production_mode/consumer_secret';
    /**@#+
     * Sandbox Mode Application
     */
    const XML_PATH_SANDBOX_APPLICATION_TOKEN = 'qbonline/sandbox_mode/application_token';
    const XML_PATH_SANDBOX_CONSUMER_KEY      = 'qbonline/sandbox_mode/consumer_key';
    const XML_PATH_SANDBOX_CONSUMER_SECRET   = 'qbonline/sandbox_mode/consumer_secret';
    const XML_PATH_SANDBOX_CLIENT_SECRET     = 'qbonline/connection/test_client_secret';
    const XML_PATH_SANDBOX_CLIENT_ID         = 'qbonline/connection/test_client_id';
    const XML_PATH_PRODUCTION_CLIENT_SECRET  = 'qbonline/connection/live_client_secret';
    const XML_PATH_PRODUCTION_CLIENT_ID      = 'qbonline/connection/live_client_id';
    /**
     * Credit memo adjustment product
     */
    const XML_PATH_ADJUSTMENT_ID   = 'qbonline/creditmemo/adjustment_id';
    const XML_PATH_ADJUSTMENT_NAME = 'qbonline/creditmemo/adjustment';
    /**
     * Tax and country settings
     */
    const XML_PATH_TAX_COUNTRY  = 'qbonline/tax_shipping/country';
    const XML_PATH_TAX_FREE     = 'qbonline/tax_shipping/free_tax';
    const XML_PATH_TAX_SHIPPING = 'qbonline/tax_shipping/tax_shipping';
    /**
     * Product sync settings
     */
    const XML_PATH_PRODUCT_TRACK_QTY       = 'qbonline/item/track_qty';
    const XML_PATH_PRODUCT_DESCRIPTION     = 'qbonline/item/description';
    const XML_PATH_PRODUCT_NAME_RULE       = 'qbonline/item/name_rule';
    const XML_PATH_PRODUCT_SYNC_NEW        = 'qbonline/item/sync_new';
    const XML_PATH_PRODUCT_STRIP_HTML      = 'qbonline/item/strip_html';
    const XML_PATH_PRODUCT_CHARACTER_COUNT = 'qbonline/item/character_number';
    /**
     * Transaction sync settings
     */
    const XML_PATH_SYNC_FROM = 'qbonline/order/sync_from';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var WriterInterface
     */
    protected $writer;

    /**
     * @var TaxFactory
     */
    protected $tax;

    /**
     * @var TypeListInterface
     */
    protected $typeList;

    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param WriterInterface $writer
     * @param TaxFactory $tax
     * @param TypeListInterface $typeList
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        WriterInterface $writer,
        TaxFactory $tax,
        TypeListInterface $typeList
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->writer      = $writer;
        $this->tax         = $tax;
        $this->typeList    = $typeList;
    }

    /**
     * @param $path
     * @param $value
     */
    protected function saveConfig($path, $value)
    {
        $this->writer->save($path, $value);
    }

    /**
     * @param $id
     */
    public function saveAdjustmentId($id)
    {
        $this->saveConfig(self::XML_PATH_ADJUSTMENT_ID, $id);

        $this->typeList->invalidate('config');
    }

    /**
     * @param $type
     *
     * @return mixed
     */
    public function isEnableByType($type)
    {
        //Products and customers resync/sync from queue must not depend on 'sync after edit' status
        if ($type == 'customer' || $type == 'item') {
            return true;
        } else {
            $path = 'qbonline/' . strtolower($type) . '/enabled';

            return $this->isEnabled($path);
        }
    }

    /**
     * Get Sync Mode Config
     *
     * @param $type
     *
     * @return mixed
     */
    public function getSyncModeByType($type)
    {
        $path = 'qbonline/' . strtolower($type) . '/sync_mode';

        return $this->getConfig($path);
    }

    /**
     * Get Cron Time
     *
     * @param $type
     *
     * @return mixed
     */
    public function getCronTimeByType($type)
    {
        $path = 'qbonline/' . strtolower($type) . '/cron_time';

        return $this->getConfig($path);
    }

    /**
     * Get Prefix
     *
     * @param $type
     *
     * @return mixed
     */
    public function getPrefix($type)
    {
        $path = 'qbonline/prefix_sale/' . strtolower($type);

        return $this->getConfig($path);
    }

    /**
     * @param $path
     *
     * @return mixed
     */
    protected function getConfig($path)
    {
        return $this->scopeConfig->getValue($path);
    }

    /**
     * Check is enable
     *
     * @param $path
     *
     * @return bool
     */
    protected function isEnabled($path)
    {
        return $this->scopeConfig->isSetFlag($path);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getConfig(self::XML_PATH_TAX_COUNTRY);
    }

    /**
     * @return mixed
     */
    public function getTaxShipping()
    {
        $localId = $this->getConfig(self::XML_PATH_TAX_SHIPPING);

        return $this->tax->create()->loadbyTaxId($localId)->getQboId();
    }

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->getConfig(self::XML_PATH_QBONLINE_IS_CONNECTED);
    }

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->getConfig(self::XML_PATH_QBONLINE_COMPANY_ID);
    }

    /**
     * @return int
     */
    public function getTaxFree()
    {
        return $this->getConfig(self::XML_PATH_TAX_FREE);
    }

    /**
     * @return mixed
     */
    public function getTrackQty()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_TRACK_QTY);
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_DESCRIPTION);
    }

    /**
     * @return mixed
     */
    public function getNameRule()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_NAME_RULE);
    }

    /**
     * @return mixed
     */
    public function getNewItemName()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_SYNC_NEW);
    }

    /**
     * Strip HTML tags from product description
     * @return mixed
     */
    public function isStripHTML()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_STRIP_HTML);
    }

    /**
     * @return int
     */
    public function getCharacterCount()
    {
        return $this->getConfig(self::XML_PATH_PRODUCT_CHARACTER_COUNT);
    }

    public function getSyncFrom()
    {
        $stores = $this->getConfig(self::XML_PATH_SYNC_FROM);

        return $stores ? explode(',', $stores) : false;
    }

    /**
     * @return int
     */
    public function getAdjustmentId()
    {
        return $this->getConfig(self::XML_PATH_ADJUSTMENT_ID);
    }

    /**
     * @return mixed
     */
    public function getAdjustmentName()
    {
        return $this->getConfig(self::XML_PATH_ADJUSTMENT_NAME);
    }

    //France QBO support

    /**
     * @return array
     */
    public function getFranceTerritories()
    {
        return ['RE', 'WF', 'YT', 'PM', 'TF', 'BL', 'GF', 'GP', 'MF', 'MQ', 'NC', 'PF', 'PM'];
    }

    /**
     * @return array
     */
    public function getEUCountries()
    {
        return ['AT', 'BE', 'BG', 'HR', 'CY', 'CZ', 'DE', 'DK', 'EE', 'EL', 'ES', 'FI', 'FR',
            'GB', 'HU', 'IE', 'IT', 'LT', 'LU', 'LV', 'MT', 'NL', 'PL', 'PT', 'RO', 'SE', 'SI', 'SK'];
    }
}
