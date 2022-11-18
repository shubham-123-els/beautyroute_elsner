<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Model\Synchronization;

use Magenest\QuickBooksOnline\Model\Client;
use Magenest\QuickBooksOnline\Model\Config\Source\NameRule;
use Magenest\QuickBooksOnline\Model\Config\Source\SyncNew;
use Magenest\QuickBooksOnline\Model\Log;
use Magenest\QuickBooksOnline\Model\Config;
use Magenest\QuickBooksOnline\Model\Synchronization;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Model\ResourceModel\Product as ProductResource;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Framework\App\Action\Context;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\Module\Manager as ModuleManager;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

/**
 * Class Item
 * @package Magenest\QuickBooksOnline\Model\Sync
 * @method Product getModel()
 */
class Item extends Synchronization
{
    /**
     * @var ProductFactory
     */
    protected $_productFactory;

    /**
     * @var ProductResource
     */
    protected $_productResource;

    /**
     * @var Account
     */
    protected $_account;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var StockRegistryInterface
     */
    protected $stockInterface;

    /**
     * @var ProductMetadataInterface
     */
    protected $productMetadata;

    /**
     * @var ModuleManager
     */
    protected $moduleManager;

    /**
     * @var TimezoneInterface
     */
    protected $timezone;

    /**
     * @var Config
     */
    protected $config;

    /**
     * Item constructor.
     *
     * @param Client $client
     * @param Log $log
     * @param Config $config
     * @param \Psr\Log\LoggerInterface $logger
     * @param ProductFactory $productFactory
     * @param ProductResource $productResource
     * @param Account $account
     * @param Registry $registry
     * @param Context $context
     * @param StockRegistryInterface $stockInterface
     * @param ProductMetadataInterface $productMetadata
     * @param ModuleManager $moduleManager
     * @param TimezoneInterface $timezone
     */
    public function __construct(
        Client $client,
        Log $log,
        Config $config,
        \Psr\Log\LoggerInterface $logger,
        ProductFactory $productFactory,
        ProductResource $productResource,
        Account $account,
        Registry $registry,
        Context $context,
        StockRegistryInterface $stockInterface,
        ProductMetadataInterface $productMetadata,
        ModuleManager $moduleManager,
        TimezoneInterface $timezone
    ) {
        parent::__construct($client, $log, $context);
        $this->config           = $config;
        $this->_productFactory  = $productFactory;
        $this->_productResource = $productResource;
        $this->_account         = $account;
        $this->type             = 'item';
        $this->logger           = $logger;
        $this->registry         = $registry;
        $this->stockInterface   = $stockInterface;
        $this->productMetadata  = $productMetadata;
        $this->moduleManager    = $moduleManager;
        $this->timezone         = $timezone;
    }

    /**
     * @param $productId
     * @param bool $update
     * @param null $sku
     * @param null $orderedQty
     *
     * @return mixed
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function sync($productId, $update = false, $sku = null, $orderedQty = null)
    {
        $model = $this->_productFactory->create();
        $this->_productResource->load($model, $productId);
        $type = (string)$model->getTypeId();
        if ($type == "configurable") {
            if (empty($sku)) {
                $parentId     = $productId;
                $arrayId      = [];
                $id           = $this->sendItems($parentId, $update);
                $arrId        = [];
                $arrId[]      = $id;
                $usedProducts = $model->getTypeInstance()->getUsedProducts($model);
                foreach ($usedProducts as $child) {
                    $childId[] = $child->getId();
                    $arrayId   = array_merge($childId);
                }
                foreach ($arrayId as $productId) {
                    $id = $this->sendItems($productId, $update);
                    if ($id) {
                        $arrId[] = $id;
                    }
                }
                $this->registry->unregister('arr_id' . $productId);
                $this->registry->register('arr_id' . $productId, $arrId);
            } else {
                $productId = $model->getIdBySku($sku);
                $id        = $this->sendItems($productId, $update);
            }
        } else {
            $id = $this->sendItems($productId, $update, null, $orderedQty);
        }

        return $id;
    }

    /**
     * @param $sku
     * @param bool $update
     * @param null $orderedQty
     *
     * @return mixed
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     */
    public function syncBySku($sku, $update = false, $orderedQty = null)
    {
        $model     = $this->_productFactory->create();
        $productId = $model->getIdBySku($sku);
        $this->_productResource->load($model, $productId);
        $type = (string)$model->getTypeId();
        if ($type == "configurable") {
            if (empty($sku)) {
                $parentId     = $productId;
                $arrayId      = [];
                $id           = $this->sendItems($parentId, $update, null, null, $sku);
                $arrId        = [];
                $arrId[]      = $id;
                $usedProducts = $model->getTypeInstance()->getUsedProducts($model);
                foreach ($usedProducts as $child) {
                    $childId[] = $child->getId();
                    $arrayId   = array_merge($childId);
                }
                foreach ($arrayId as $productId) {
                    $id = $this->sendItems($productId, $update, null, null, $sku);
                    if ($id) {
                        $arrId[] = $id;
                    }
                }
                $this->registry->unregister('arr_id' . $productId);
                $this->registry->register('arr_id' . $productId, $arrId);
            } else {
                $productId = $model->getIdBySku($sku);
                $id        = $this->sendItems($productId, $update);
            }
        } else {
            $id = $this->sendItems($productId, $update, null, $orderedQty, $sku);
        }

        return $id;
    }

    /**
     * @param $id
     * @param bool $update
     * @param null $qty
     * @param null $orderedQty
     * @param null $sku
     *
     * @return mixed
     * @throws \Zend_Http_Client_Exception
     * @throws \Exception
     */
    public function sendItems($id, $update = false, $qty = null, $orderedQty = null, $sku = null)
    {
        /** @var \Magento\Framework\Registry $registryObject */
        $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');

        //only start syncing if product not already synced in this process
        if ($registryObject->registry('check_to_syn' . $id) != true || empty($id)) {
            $model = $this->_productFactory->create();
            if (!empty($sku) && $id == null) {
                $id = $model->getIdBySku($sku);
            }

            $this->_productResource->load($model, $id);
            $qboId = $this->getQboId($model);

            $model = $this->setModel($model);

            if ($model->getName() == 'DeletedItem') {
                if (empty($sku)) {
                    $sku = time();
                }
                $model->setName('DeletedItem-' . $sku);
                $model->setSku('DeletedItem-' . $sku);
                $model->setShortDescription('DeletedItem-' . $sku);
                $model->setCreatedAt('1970-01-01');
                $model->setPrice(0);
                /* if syncing deleted product, check if deleteditem already exits on QBO, match params with deleteditem on QBO */
                $deletedProduct = $this->checkDeletedItem('DeletedItem-' . $sku);
                if (isset($deletedProduct['Id'])) {
                    $qboId = $deletedProduct['Id'];
                }
            }

            if (!empty($deletedProduct['Id']) && !empty($qboId) && (strpos($model->getName(), 'DeletedItem') === 0)) {
                $product = $deletedProduct;
            } elseif (!empty($qboId)) {
//            $needSave = false;
                $product = $this->checkProductByQboId($qboId);
                $qboName = $this->setName($model->getName(), $model->getSku());

                //handle changing product name configuration (i.e. from Name to SKU+name)
                if (isset($product['Name']) && $product['Name'] != $qboName) {
                    $product = $this->checkProductBySku($model->getSku());
                    //if a product on M2 change both name and sku then mapping will also be lost
                    if (empty($product['Id']) && $model->getName() != 'DeletedItem') {
                        $model->unsetData('qbo_id');
                        if (!empty($model->getId())) {
                            $this->_productResource->saveAttribute($model, 'qbo_id');
                        }
                        $product = $this->checkProduct($qboName);
                    }

                } elseif (empty($product['Id']) && $model->getName() != 'DeletedItem') {
                    $model->unsetData('qbo_id');
                    if (!empty($model->getId())) {
                        $this->_productResource->saveAttribute($model, 'qbo_id');
                    }
                    $product = $this->checkProduct($qboName);

                    if (isset($product['Id']) && $this->config->getNewItemName() != SyncNew::SYNC_NEW_OVERRIDE) {
                        $registryObject->unregister('skip_log');
                        $this->addLog(
                            $id,
                            null,
                            'A product with the same name already exists on QuickBooks Online.
                        Please correct the product name before syncing, or allow Magento to override QBO data from QuickBooks Online > Configuration > Synchronization Settings > Products.'
                        );

                        return null;
                    }
                }
                //to allow changing product name when syncing
                unset($product['Name']);
            } else {
//            $needSave = true;
                $name    = $model->getName();
                $sku     = $model->getSku();
                $qboName = $this->setName($name, $sku);
                //QuickBooks might fail to query by names with special characters. Use search by SKU as a fall back if search by name failed
                $product = $this->checkProduct($qboName);
                if (!isset($product['Id'])) {
                    $product = $this->checkProductBySku($model->getSku());
                }
                /**
                 * For new product with duplicate name, throw error
                 */
                if (isset($product['Id']) && $this->config->getNewItemName() != SyncNew::SYNC_NEW_OVERRIDE) {
                    $registryObject->unregister('skip_log');
                    $this->addLog(
                        $id,
                        null,
                        'A product with the same name already exists on QuickBooks Online.
                        Please correct the product name before syncing, or allow Magento to override QBO data from QuickBooks Online > Configuration > Synchronization Settings > Products.'
                    );

                    return null;
                }
            }

            if (isset($product['Id']) && !$update) {
                return $product['Id'];
            }

            $registryObject = ObjectManager::getInstance()->get('Magento\Framework\Registry');

            $this->prepareParams();
            $params = $this->getParameter();

            //InvStartDate is treated as inventory adjustment date in update operations
            if (isset($product['InvStartDate']) && $this->config->getTrackQty() == 1) {
                $params['InvStartDate'] = date('Y-m-d');
            }

            $params = array_replace_recursive($params, $product);
            if (!empty($qty)) {
                $params['QtyOnHand'] = $qty;
            }
            /*update qty on hand in case of order create, for Magento 2.3 MSI*/
            $magentoVer = $this->productMetadata->getVersion();
            $MSIEnabled = $this->moduleManager->isEnabled('Magento_InventorySalesApi');
            if (version_compare($magentoVer, '2.3', '>=') && $MSIEnabled && !empty($orderedQty)) {
                $params['QtyOnHand'] -= $orderedQty;
            }

            try {
                $response = $this->sendRequest(\Zend_Http_Client::POST, 'item?minorversion=6', $params);
                /**
                 * For new product with duplicate name, override data on QBO with product data on Magento
                 */
                if ($this->config->getNewItemName() == SyncNew::SYNC_NEW_OVERRIDE && empty($qboId) && $model->getTypeId() !== 'configurable') {
                    $today = strtotime(date('Y-m-d'));
                    if (isset($response['Item']['InvStartDate'])) {
                        $invStartDate = strtotime($response['Item']['InvStartDate']);
                        if ($today > $invStartDate && ($response['Item']['Name'] != 'DeletedItem')) {
                            $params['Id']        = $response['Item']['Id'];
                            $params['SyncToken'] = $response['Item']['SyncToken'];
                            $this->sendRequest(\Zend_Http_Client::POST, 'item?minorversion=6', $params);
                        }
                    }
                }
                if (isset($response['Item']['Id'])) {
                    $qboId     = (string)$response['Item']['Id'];
                    $qboIdTemp = $response['Item']['Id'];
                    $this->addLog($id, $qboId);
                }

                /*Avoid saving qbo_id for deleted items */
                if (!empty($model->getId())) {
                    /**
                     * save qbo_id attribute in product
                     */
                    $companyId = (string)$this->config->getCompanyId();
                    $qboId     = $companyId . $qboId;
                    $model->setQboId($qboId);
                    $this->_productResource->saveAttribute($model, 'qbo_id');
                }

                /**
                 * registry variable used in Magenest\QuickBooksOnline\Observer\Item\Update
                 */
                if (!empty($id)) {
                    $registryObject->unregister('check_to_syn' . $id);
                    $registryObject->register('check_to_syn' . $id, true);
                }

                $this->parameter = [];

                return $qboIdTemp ?? null;
            } catch (LocalizedException $e) {
                $registryObject->unregister('skip_log');
                $this->addLog($id, null, $e->getMessage());
            }
            $this->parameter = [];
        } else {
            $registryObject->unregister('check_to_syn' . $id);
        }
    }

    /**
     * @param $name
     * @param $sku
     *
     * @return string
     */
    public function setName($name, $sku)
    {
        $nameRule  = $this->config->getNameRule();
        $charCount = $this->config->getCharacterCount();
        switch ($nameRule) {
            case NameRule::USE_SKU:
            {
                $name = mb_substr($sku, 0, $charCount);
                break;
            }
            case NameRule::USE_BOTH:
            {
                $name = trim($sku . '-' . $name);
                $name = mb_substr($name, 0, $charCount);
                break;
            }
            case NameRule::USE_NAME:
            default:
            {
                $name = mb_substr($name, 0, $charCount);
                break;
            }
        }

        return $name;
    }

    /**
     * Set Model
     *
     * @param Product $model
     *
     * @return Product
     * @throws \Exception
     */
    public function setModel($model)
    {
        if (empty($model->getId())) {
            $model->setName('DeletedItem');
            $this->_model = $model;

            return $model;
        }
        $charCount = $this->config->getCharacterCount();

        $sku = str_replace($this->unSupportedChar, " ", $model->getSku());
        $sku = mb_substr(trim($sku), 0, 100);
        $model->setSku($sku);

        $name = str_replace($this->unSupportedChar, " ", $model->getName());

        $name = trim($name);
        $name = $this->setName($name, $sku);

        $model->setName($name);

        $isDuplicate = ObjectManager::getInstance()->get(Registry::class)->registry('is_duplicate');
        if ($isDuplicate) {
            $model->unsetData('qbo_id');
            $this->_productResource->saveAttribute($model, 'qbo_id');
            $name = trim($sku . '-' . $name);
            $name = mb_substr($name, 0, $charCount);
            $model->setName($name);
        }
        $this->_model = $model;

        return $model;
    }

    /**
     * @return $this
     * @throws \Exception
     */
    protected function prepareParams()
    {
        $account = $this->_account;
        $model   = $this->getModel();
        $name    = $model->getName();
        $qty     = $this->stockInterface->getStockItem($model->getId())->getqty();

        if ($this->config->getItemDescription() == SyncNew::SYNC_NEW_OVERRIDE) {
            $description = $name;
            //name include SKU
            if (strpos($name, $model->getSku()) === 0) {
                $description = substr($name, strlen($model->getSku()));
                //name is only SKU
                if (empty($description)) {
                    $productModel = $this->_productFactory->create();
                    $this->_productResource->load($productModel, $model->getId());
                    $description = $productModel->getName();
                }
            }
        } else {
            if ($this->config->isStripHTML() == 1) {
                $description = mb_substr(Strip_tags($model->getShortDescription()), 0, 4000);
            } else {
                $description = mb_substr($model->getShortDescription(), 0, 4000);
            }
        }

        $description = str_replace($this->unSupportedChar, " ", $description);

        $params = [
            'Name'               => $name,
            'Description'        => $description,
            'Active'             => true,
            'UnitPrice'          => $model->getSpecialPrice() ?? $model->getPrice(),
            'PurchaseCost'       => $model->getCost() ?? 0,
            'Taxable'            => $model->getTaxClassId() == 0 ? false : true,
            'Sku'                => $model->getSku(),
            'FullyQualifiedName' => $name,
            'Type'               => 'NonInventory',
            'ExpenseAccountRef'  => ['value' => $account->sync('expense')],
            'IncomeAccountRef'   => ['value' => $account->sync()], /*required to make product salable*/
        ];

        $productType = $model->getTypeId();
        $isTrackQty  = $this->config->getTrackQty();

        if ($productType !== "configurable" && $productType !== "bundle" && $productType !== "grouped" && $isTrackQty == 1) {
            $paramSub = [
                'AssetAccountRef' => ['value' => $account->sync('asset')], /*required for inventory product*/
                'QtyOnHand'       => empty($qty) ? 0 : $qty,
                'Type'            => 'Inventory',
                'InvStartDate'    => $this->timezone->date(new \DateTime($model->getCreatedAt()))->format('Y-m-d'),
                'TrackQtyOnHand'  => true,
            ];
            $params   = array_replace_recursive($params, $paramSub);
            if (!strstr($name, 'DeletedItem')) {
                $params['QtyOnHand'] = $this->getSalableQty($model->getSku(), $params['QtyOnHand']);
            }
        }
        $this->setParameter($params);

        return $this;
    }

    /**
     * Get Salable Qty for Magento 2.3 MSI
     *
     * @param $sku
     * @param $defaultQty
     *
     * @return int
     */
    public function getSalableQty($sku, $defaultQty = 0)
    {
        $magentoVer = $this->productMetadata->getVersion();
        $MSIEnabled = $this->moduleManager->isEnabled('Magento_InventorySalesApi');
        if (version_compare($magentoVer, '2.3', '>=') && $MSIEnabled && ($sku !== 'DeletedItem')) {

            $getProductSalableQty         = ObjectManager::getInstance()
                ->create('Magento\InventorySalesApi\Api\GetProductSalableQtyInterface');
            $getStockItemConfiguration    = ObjectManager::getInstance()
                ->create('Magento\InventoryConfigurationApi\Api\GetStockItemConfigurationInterface');
            $storeManager                 = ObjectManager::getInstance()
                ->create('Magento\Store\Model\StoreManagerInterface');
            $websiteCode                  = $storeManager->getWebsite(1)->getCode();
            $getAssignedStockIdForWebsite = ObjectManager::getInstance()
                ->create('Magento\InventorySales\Model\ResourceModel\GetAssignedStockIdForWebsite');

            $websiteStockId         = $getAssignedStockIdForWebsite->execute($websiteCode); /*get default website's stock Id*/
            $stockItemConfiguration = $getStockItemConfiguration->execute($sku, $websiteStockId);
            $isManageStock          = $stockItemConfiguration->isManageStock(); /*check if stock is in use*/

            /*get salable qty of product's valid stock*/

            return $isManageStock ? $getProductSalableQty->execute($sku, $websiteStockId) : 0;
        } else {
            return $defaultQty;
        }
    }

    /**
     * @return int
     * @throws LocalizedException
     * @throws \Zend_Http_Client_Exception
     * @throws \Exception
     */
    public function getAdjustmentItem()
    {
        $adjustmentId   = $this->config->getAdjustmentId();
        $adjustmentName = $this->config->getAdjustmentName();
        if ($adjustmentId) {
            $checkProduct = $this->checkAdjustmentItem($adjustmentId);
            if (!empty($checkProduct)) {
                if ($checkProduct['Name'] == $adjustmentName) {
                    return $adjustmentId;
                } else {
                    $params = [
                        'Name'              => $adjustmentName,
                        'Id'                => $adjustmentId,
                        'SyncToken'         => $checkProduct['SyncToken'],
                        'Type'              => 'Service',
                        'ExpenseAccountRef' => ['value' => $this->_account->sync('expense')],
                        'IncomeAccountRef'  => ['value' => $this->_account->sync()],
                    ];

                    if ($this->config->getCountry() == 'FR') {
                        $params['ItemCategoryType'] = 'Service';
                    }

                    $this->sendRequest(\Zend_Http_Client::POST, 'item?minorversion=6', $params);

                    return $adjustmentId;
                }
            }
        }

        $params = [
            'Name'              => $adjustmentName,
            'Type'              => 'Service',
            'Sku'               => 'refund-adjustment',
            'ExpenseAccountRef' => ['value' => $this->_account->sync('expense')],
            'IncomeAccountRef'  => ['value' => $this->_account->sync()],
        ];

        if ($this->config->getCountry() == 'FR') {
            $params['ItemCategoryType'] = 'Service';
        }

        $checkExisting = $this->checkProduct($adjustmentName);
        if (isset($checkExisting['Id'])) {
            $params = array_replace_recursive($params, $checkExisting);
        }

        $response = $this->sendRequest(\Zend_Http_Client::POST, 'item?minorversion=6', $params);
        if (isset($response['Item']['Id'])) {
            $adjustmentId = $response['Item']['Id'];
            $this->config->saveAdjustmentId($adjustmentId);

            return $adjustmentId;
        } else {
            throw new \Exception(__('Cannot sync adjustment product to QuickBooks'));
        }
    }

    /**
     * @param $qboId
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkAdjustmentItem($qboId)
    {
        $query = "SELECT Name, SyncToken FROM Item WHERE Id ='{$qboId}' AND Type ='Service'";

        return $this->query($query);
    }

    /**
     * @param $name
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkDeletedItem($name)
    {
        $name  = str_replace("'", "\'", $name);
        $query = "SELECT Id, SyncToken, InvStartDate FROM Item WHERE Name ='{$name}'";

        return $this->query($query);
    }

    /**
     * @param int $qboId
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkProductByQboId($qboId)
    {
        $query = "SELECT Name, SyncToken, InvStartDate, level, ParentRef FROM Item WHERE Id ='{$qboId}'";

        return $this->query($query);
    }

    /**
     * @param string $sku
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkProductBySku($sku)
    {
        $query = "SELECT Id, SyncToken, InvStartDate, level, ParentRef FROM Item WHERE sku ='{$sku}'";

        return $this->query($query);
    }

    /**
     * Check item on QBO by Name
     *
     * @param $name
     *
     * @return array
     * @throws LocalizedException
     */
    public function checkProduct($name)
    {
        $name  = str_replace("'", "\'", $name);
        $query = "SELECT Id, SyncToken, InvStartDate, level, ParentRef FROM Item WHERE name ='{$name}'";

        return $this->query($query);
    }
}
