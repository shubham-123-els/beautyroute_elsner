<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_UrlRewriteImportExport
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\UrlRewriteImportExport\Model\Import;

use Bss\UrlRewriteImportExport\Model\Import\UrlRewrite\RowValidatorInterface as ValidatorInterface;
use Magento\ImportExport\Model\Import;
use Magento\ImportExport\Model\Import\Entity\AbstractEntity;
use Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingError;
use Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface;

/**
 * Class UrlRewrite
 *
 * @package Bss\UrlRewriteImportExport\Model\Import
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class UrlRewrite extends AbstractEntity
{
    const COL_ENTITY_TYPE = 'entity_type';
    const VALIDATOR_MAIN = 'validator';
    const DEFAULT_OPTION_VALUE_SEPARATOR = ';';

    /**
     * @var array
     */
    protected $_messageTemplates = [
        ValidatorInterface::ERROR_INVALID_ENTITY_TYPE => 'Invalid Entity Type',
        ValidatorInterface::ERROR_REQUEST_PATH_NOT_EXIST => 'Request path does not exist',
        ValidatorInterface::ERROR_INVALID_REDIRECT_TYPE => 'Invalid Redirect Type',
        ValidatorInterface::ERROR_EMPTY_ENTITY_TYPE => 'Empty Entity Type',
        ValidatorInterface::ERROR_PRODUCT_ID_NOT_EXIST => 'Product Id does not exist',
        ValidatorInterface::ERROR_CATEGORY_ID_NOT_EXIST => 'Category Id does not exist',
        ValidatorInterface::ERROR_CMS_PAGE_ID_NOT_EXIST=> 'CMS Page Id not does exist',
        ValidatorInterface::ERROR_EMPTY_PRODUCT_ID => 'Empty Product Id',
        ValidatorInterface::ERROR_EMPTY_CATEGORY_ID => 'Empty Category Id',
        ValidatorInterface::ERROR_EMPTY_CMS_PAGE_ID => 'Empty CMS Page Id',
        ValidatorInterface::ERROR_EMPTY_TARGET_PATH => 'Entity type is custom, target_path must not be empty',
        ValidatorInterface::ERROR_EMPTY_REQUEST_PATH => 'Empty Request Path',
        ValidatorInterface::ERROR_EXISTED_REQUEST_PATH => 'Existed request_path and the system cannot update new request path',
        ValidatorInterface::ERROR_INVALID_STORE_ID => 'Invalid store id',
        ValidatorInterface::ERROR_TARGET_PATH_NOT_EXIST => 'Target Path does not exist'
    ];

    /**
     * @var bool
     */
    protected $needColumnCheck = true;

    /**
     * @var array
     */
    protected $validColumnNames = [
        self::COL_ENTITY_TYPE,
        'product_id',
        'category_id',
        'cms_page_id',
        'store_id',
        'current_request_path',
        'new_request_path',
        'target_path',
        'redirect_type',
        'description',
        'ignore_nonexist_target_path_error'
    ];

    /**
     * @var bool
     */
    protected $logInHistory = true;

    /**
     * @var array
     */
    protected $_validators = [];

    /**
     * @var array
     */
    protected $_permanentAttributes = [self::COL_ENTITY_TYPE];

    /**
     * @var \Magento\UrlRewrite\Model\UrlRewriteFactory
     */
    protected $urlRewrite;

    /**
     * @var \Bss\UrlRewriteImportExport\Model\ResourceModel\Import
     */
    protected $import;

    /**
     * @var \Bss\UrlRewriteImportExport\Model\Import\UrlRewrite\Validator\UrlRewrite
     */
    protected $validator;

    /**
     * @var \Bss\UrlRewriteImportExport\Helper\Data
     */
    protected $bssHelper;

    /**
     * @var array
     */
    protected $existRequestPath = [];

    /**
     * @var \Magento\Framework\Module\ModuleListInterface
     */
    protected $moduleList;

    /**
     * UrlRewrite constructor.
     * @param \Magento\Framework\Json\Helper\Data $jsonHelper
     * @param \Magento\ImportExport\Helper\Data $importExportData
     * @param \Magento\Eav\Model\Config $config
     * @param \Magento\ImportExport\Model\ResourceModel\Import\Data $importData
     * @param \Magento\Framework\App\ResourceConnection $resource
     * @param \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper
     * @param \Magento\Framework\Stdlib\StringUtils $string
     * @param ProcessingErrorAggregatorInterface $errorAggregator
     * @param \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewrite
     * @param \Bss\UrlRewriteImportExport\Model\ResourceModel\Import $import
     * @param UrlRewrite\Validator\UrlRewrite $validator
     * @param \Bss\UrlRewriteImportExport\Helper\Data $bssHelper
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Framework\Json\Helper\Data $jsonHelper,
        \Magento\ImportExport\Helper\Data $importExportData,
        \Magento\ImportExport\Model\ResourceModel\Import\Data $importData,
        \Magento\Framework\App\ResourceConnection $resource,
        \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper,
        ProcessingErrorAggregatorInterface $errorAggregator,
        \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewrite,
        \Bss\UrlRewriteImportExport\Model\ResourceModel\Import $import,
        UrlRewrite\Validator\UrlRewrite $validator,
        \Bss\UrlRewriteImportExport\Helper\Data $bssHelper,
        \Magento\Framework\Module\ModuleListInterface $moduleList
    ) {
        $this->jsonHelper = $jsonHelper;
        $this->_importExportData = $importExportData;
        $this->_resourceHelper = $resourceHelper;
        $this->_dataSourceModel = $importData;
        $this->_connection = $resource;
        $this->errorAggregator = $errorAggregator;
        $this->urlRewrite = $urlRewrite;
        $this->import = $import;
        $this->validator = $validator;
        $this->bssHelper = $bssHelper;
        $this->moduleList = $moduleList;
    }

    /**
     * Get validator
     *
     * @param string $type
     * @return mixed
     */
    protected function _getValidator($type)
    {
        return $this->_validators[$type];
    }

    /**
     * Get entity type code
     *
     * @return string
     */
    public function getEntityTypeCode()
    {
        return 'bss_url_rewrite';
    }

    /**
     * Validate row data
     *
     * @param array $rowData
     * @param int $rowNum
     * @return bool
     */
    public function validateRow(array $rowData, $rowNum)
    {
        foreach (array_merge($this->errorMessageTemplates, $this->_messageTemplates) as $errorCode => $message) {
            $this->getErrorAggregator()->addErrorMessageTemplate($errorCode, $message);
        }
        if (!$this->validator->validateEntityType($rowData['entity_type'])) {
            $this->addRowError(ValidatorInterface::ERROR_INVALID_ENTITY_TYPE, $rowNum);
            return false;
        }

        if ($rowData['current_request_path']=="") {
            $this->addRowError(ValidatorInterface::ERROR_EMPTY_REQUEST_PATH, $rowNum);
            return false;
        }

        if (Import::BEHAVIOR_DELETE == $this->getBehavior()) {
            if (!$this->validator->validateForDelete(
                $rowData['current_request_path'],
                $this->import->getExistRequestPath()
            )
            ) {
                $this->addRowError(ValidatorInterface::ERROR_REQUEST_PATH_NOT_EXIST, $rowNum);
                return false;
            }
        }
        return true;
    }

    /**
     * Import Data
     *
     * @return bool
     * @throws \Exception
     */
    protected function _importData()
    {
        foreach (array_merge($this->errorMessageTemplates, $this->_messageTemplates) as $errorCode => $message) {
            $this->getErrorAggregator()->addErrorMessageTemplate($errorCode, $message);
        }
        if (Import::BEHAVIOR_DELETE == $this->getBehavior()) {
            $this->deleteUrlRewrite();
        } elseif (Import::BEHAVIOR_REPLACE == $this->getBehavior()) {
            $this->replaceUrlRewrite();
        } elseif (Import::BEHAVIOR_APPEND == $this->getBehavior()) {
            $this->saveUrlRewrite();
        }

        return true;
    }

    /**
     * Validate data rows and save bunches to DB.
     *
     * @return $this|AbstractEntity
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\ValidatorException
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    protected function _saveValidatedBunches()
    {
        $source = $this->_getSource();
        $currentDataSize = 0;
        $bunchRows = [];
        $startNewBunch = false;
        $nextRowBackup = [];
        $maxDataSize = $this->_resourceHelper->getMaxDataSize();
        $bunchSize = $this->_importExportData->getBunchSize();

        $source->rewind();
        $this->_dataSourceModel->cleanBunches();

        while ($source->valid() || $bunchRows) {
            if ($startNewBunch || !$source->valid()) {
                $this->_dataSourceModel->saveBunch($this->getEntityTypeCode(), $this->getBehavior(), $bunchRows);

                $bunchRows = $nextRowBackup;
                $currentDataSize = strlen(json_encode($bunchRows));
                $startNewBunch = false;
                $nextRowBackup = [];
            }
            if ($source->valid()) {
                try {
                    $rowData = $source->current();
                } catch (\InvalidArgumentException $e) {
                    $this->addRowError($e->getMessage(), $this->_processedRowsCount);
                    $this->_processedRowsCount++;
                    $source->next();
                    continue;
                }

                $this->_processedRowsCount++;

                if ($this->validateRow($rowData, $source->key())) {
                    // add row to bunch for save
                    $rowData = $this->_prepareRowForDb($rowData);
                    $rowSize = strlen($this->jsonHelper->jsonEncode($rowData));

                    $isBunchSizeExceeded = $bunchSize > 0 && $this->getBunchRowsCount($bunchRows) >= $bunchSize;

                    if ($currentDataSize + $rowSize >= $maxDataSize || $isBunchSizeExceeded) {
                        $startNewBunch = true;
                        $nextRowBackup = [$source->key() => $rowData];
                    } else {
                        $bunchRows[$source->key()] = $rowData;
                        $currentDataSize += $rowSize;
                    }
                }
                $source->next();
            }
        }
        return $this;
    }

    /**
     * Count bunch rows
     *
     * @param array $bunchRows
     * @return int
     */
    protected function getBunchRowsCount($bunchRows)
    {
        return count($bunchRows);
    }

    /**
     * Save url rewrite
     *
     * @throws \Exception
     */
    protected function saveUrlRewrite()
    {
        if (empty($this->existRequestPath)) {
            $this->existRequestPath = $this->import->getExistRequestPath();
        }
        while ($bunch = $this->_dataSourceModel->getNextBunch()) {
            foreach ($bunch as $rowNum => $rowData) {
                $isRedirectType = $this->validator->validateRedirectType($rowData['redirect_type']);
                $redirectType = $isRedirectType ? $rowData['redirect_type'] : 0;
                $storeIds = $this->bssHelper->getAllStoreIds();
                if ($this->validator->validateStoreId($storeIds, $rowData['store_id']) === false) {
                    $this->addRowError(
                        ValidatorInterface::ERROR_INVALID_STORE_ID,
                        $rowNum,
                        null,
                        null,
                        ProcessingError::ERROR_LEVEL_NOT_CRITICAL
                    );
                    continue;
                }
                if ($this->getTargetPath($rowData, $rowNum, $redirectType) === false) {
                    continue;
                }
                $this->processData($rowData, $rowNum);
            }
        }
    }

    /**
     * @param $model
     */
    public function countItem($model)
    {
        if ($model->geturlRewriteId()) {
            $this->countItemsUpdated++;
        } else {
            $this->countItemsCreated++;
        }
    }

    /**
     * Process Import Data
     *
     * @param array $rowData
     * @param int $rowNum
     * @return bool
     * @throws \Exception
     */
    protected function processData($rowData, $rowNum)
    {
        $redirectType = $this->validator->validateRedirectType($rowData['redirect_type'])
            ? $rowData['redirect_type'] : 0;
        $model = $this->urlRewrite->create();
        $requestPath = $rowData['current_request_path'];

        $existUrlId = $this->getExistedUrlRewriteId($rowData);
        if ($existUrlId > 0) {
            $model->load($existUrlId);
            if ($rowData['new_request_path'] != "") {
                if ($this->import->getExistUrlRewriteId($rowData['new_request_path'], $rowData['store_id'])>0) {
                    $this->addRowError(
                        ValidatorInterface::ERROR_EXISTED_REQUEST_PATH,
                        $rowNum,
                        null,
                        null,
                        ProcessingError::ERROR_LEVEL_NOT_CRITICAL
                    );
                    return false;
                } else {
                    $requestPath = $rowData['new_request_path'];
                }
            }
        }

        $rowData['entity_type'] = $this->getEntityType($rowData['entity_type']);

        if ($this->isInvalidTargetPath($rowData)) {
            $this->addRowError(
                ValidatorInterface::ERROR_EMPTY_TARGET_PATH,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        $importData = [
            'entity_type' => $rowData['entity_type'],
            'entity_id' => $this->getEntityId($rowData),
            'request_path' => $requestPath,
            'target_path' => $this->getTargetPath($rowData, $rowNum, $redirectType),
            'redirect_type' => $redirectType,
            'description' => $rowData['description'],
            'store_id' => $rowData['store_id']
        ];

        if (empty($rowData['ignore_nonexist_target_path_error'])) {
            $checkExisTargetPath = $this->import->checkExistTargetPath(
                $importData['target_path'],
                $importData['store_id']
            );

            if ($importData['entity_type'] == 'custom' && $checkExisTargetPath === false) {
                $this->addRowError(
                    ValidatorInterface::ERROR_TARGET_PATH_NOT_EXIST,
                    $rowNum,
                    null,
                    null,
                    ProcessingError::ERROR_LEVEL_NOT_CRITICAL
                );
                return false;
            }
        }
        $this->countItem($model);
        $model->setEntityType($importData['entity_type'])
            ->setEntityId($importData['entity_id'])
            ->setRequestPath($importData['request_path'])
            ->setTargetPath($importData['target_path'])
            ->setRedirectType($redirectType)
            ->setStoreId($importData['store_id'])
            ->setDescription($importData['description']);
        $model->save();
        if (!empty($this->existRequestPath) && !in_array(strtolower($requestPath), $this->existRequestPath)) {
            array_push($this->existRequestPath, strtolower($requestPath));
        }
    }

    /**
     * Check Valid target_path
     *
     * @param array $rowData
     * @return bool
     */
    protected function isInvalidTargetPath($rowData)
    {
        return $rowData['entity_type'] == 'custom' && empty($rowData['target_path']);
    }

    /**
     * Get url rewrite entity type
     *
     * @param string $entityType
     * @return string
     */
    protected function getEntityType($entityType)
    {
        if (empty($entityType)) {
            return 'custom';
        }
        return $entityType;
    }

    /**
     * Check exist url rewrite and get id if exist
     *
     * @param array $rowData
     * @return bool|int
     */
    protected function getExistedUrlRewriteId($rowData)
    {
        if (in_array(strtolower($rowData['current_request_path']), $this->existRequestPath)) {
            $existUrlId = $this->import->getExistUrlRewriteId($rowData['current_request_path'], $rowData['store_id']);
            if ($existUrlId > 0) {
                return $existUrlId;
            }
        }
        return false;
    }

    /**
     * Auto get target path for url rewrite
     *
     * @param array $rowData
     * @param int $rowNum
     * @param int $redirectType
     * @return bool|string
     */
    protected function getTargetPath($rowData, $rowNum, $redirectType)
    {
        if ($rowData['entity_type']=='cms-page') {
            if ($this->isRedirect($redirectType)) {
                return $this->import->getPathByExistTargetPath(
                    $this->getCmsPath($rowData, $rowNum),
                    $rowData['store_id']
                );
            }
            return $this->getCmsPath($rowData, $rowNum);
        }

        if ($rowData['entity_type']=='product') {
            if ($this->isRedirect($redirectType)) {
                return $this->import->getPathByExistTargetPath(
                    $this->getProductPath($rowData, $rowNum),
                    $rowData['store_id']
                );
            }
            return $this->getProductPath($rowData, $rowNum);
        }

        if ($rowData['entity_type']=='category') {
            if ($this->isRedirect($redirectType)) {
                return $this->import->getPathByExistTargetPath(
                    $this->getCategoryPath($rowData, $rowNum),
                    $rowData['store_id']
                );
            }
            return $this->getCategoryPath($rowData, $rowNum);
        }

        return $rowData['target_path'];
    }

    /**
     * Check redirect type
     *
     * @param int $redirectType
     * @return bool
     */
    protected function isRedirect($redirectType)
    {
        return ($redirectType == 301) || ($redirectType == 302);
    }

    /**
     * Get path for cms page url rewrite
     *
     * @param array $rowData
     * @param int $rowNum
     * @return bool|string
     */
    protected function getCmsPath($rowData, $rowNum)
    {
        $entityId = $rowData['cms_page_id'];
        if ($entityId=="") {
            $this->addRowError(
                ValidatorInterface::ERROR_EMPTY_CMS_PAGE_ID,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        if (!in_array($entityId, $this->import->getExistCmsPageIds())) {
            $this->addRowError(
                ValidatorInterface::ERROR_CMS_PAGE_ID_NOT_EXIST,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        return "cms/page/view/page_id/" . $entityId;
    }

    /**
     * Get path for product url rewrite
     *
     * @param array $rowData
     * @param int $rowNum
     * @return bool|string
     */
    protected function getProductPath($rowData, $rowNum)
    {
        $entityId = $rowData['product_id'];
        if ($entityId=="") {
            $this->addRowError(
                ValidatorInterface::ERROR_EMPTY_PRODUCT_ID,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        if (!in_array($entityId, $this->import->getExistProductIds())) {
            $this->addRowError(
                ValidatorInterface::ERROR_PRODUCT_ID_NOT_EXIST,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        if (!in_array($rowData['category_id'], $this->import->getExistCategoryIds()) &&
            $rowData['category_id']!=""
        ) {
            $this->addRowError(
                ValidatorInterface::ERROR_CATEGORY_ID_NOT_EXIST,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        if ($rowData['category_id']=="") {
            return "catalog/product/view/id/" . $entityId;
        }

        return "catalog/product/view/id/" . $entityId . "/category/" . $rowData['category_id'];
    }

    /**
     * Get path for category url rewrite
     *
     * @param array $rowData
     * @param int $rowNum
     * @return bool|string
     */
    protected function getCategoryPath($rowData, $rowNum)
    {
        $entityId = $rowData['category_id'];
        if ($entityId=="") {
            $this->addRowError(
                ValidatorInterface::ERROR_EMPTY_CATEGORY_ID,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        if (!in_array($entityId, $this->import->getExistCategoryIds())) {
            $this->addRowError(
                ValidatorInterface::ERROR_CATEGORY_ID_NOT_EXIST,
                $rowNum,
                null,
                null,
                ProcessingError::ERROR_LEVEL_NOT_CRITICAL
            );
            return false;
        }

        return "catalog/category/view/id/" . $entityId;
    }

    /**
     * Get entity id for url rewrite by entity type
     *
     * @param array $rowData
     * @return int|null
     */
    protected function getEntityId($rowData)
    {
        $entityId = null;
        switch ($rowData['entity_type']) {
            case 'product':
                $entityId = $rowData['product_id'];
                break;
            case 'category':
                $entityId = $rowData['category_id'];
                break;
            case 'cms-page':
                $entityId = $rowData['cms_page_id'];
                break;
            case 'custom':
                $entityId = 0;
                break;
        }
        return $entityId;
    }

    /**
     * Action Replace url rewrites
     *
     * @throws \Exception
     */
    protected function replaceUrlRewrite()
    {
        $this->deleteForReplace();
        $this->saveUrlRewrite();
    }

    /**
     * Action Delete url rewrites
     *
     * @return $this
     * @throws \Exception
     */
    protected function deleteUrlRewrite()
    {
        $listRequestPath = $this->getListDeleteRequestPath();
        if (!empty($listRequestPath)) {
            $this->import->deleteUrlRewrites($listRequestPath);
        }
        return $this;
    }

    /**
     * Get list request path to delete url rewrites
     *
     * @return array
     */
    protected function getListDeleteRequestPath()
    {
        while ($bunch = $this->_dataSourceModel->getNextBunch()) {
            $listRequestPathAllStore = [];
            $listRequestPathSpecialStore = [];
            foreach ($bunch as $rowNum => $rowData) {
                $this->validateRow($rowData, $rowNum);
                if ($this->getErrorAggregator()->hasToBeTerminated()) {
                    $this->getErrorAggregator()->addRowToSkip($rowNum);
                }
                if (isset($rowData['store_id']) && $rowData['store_id'] != 0) {
                    $listRequestPathSpecialStore[] = [
                        'current_request_path' => $rowData['current_request_path'],
                        'storeId' => $rowData['store_id']
                    ];
                } else {
                    $listRequestPathAllStore[] = $rowData['current_request_path'];
                }
                $this->countItemsDeleted++;
            }
            if (empty($listRequestPathAllStore) && empty($listRequestPathSpecialStore)) {
                return [];
            }
            return ['store' => $listRequestPathSpecialStore, 'all' => $listRequestPathAllStore];
        }
        return [];
    }

    /**
     * Delete url rewrites before replace
     *
     * @return $this
     * @throws \Exception
     */
    protected function deleteForReplace()
    {
        while ($bunch = $this->_dataSourceModel->getNextBunch()) {
            foreach ($bunch as $rowNum => $rowData) {
                $this->validateRow($rowData, $rowNum);
                if (!$this->validator->validateForDelete(
                    $rowData['current_request_path'],
                    $this->import->getExistRequestPath()
                )
                ) {
                    $this->addRowError(
                        ValidatorInterface::ERROR_REQUEST_PATH_NOT_EXIST,
                        $rowNum,
                        null,
                        null,
                        ProcessingError::ERROR_LEVEL_NOT_CRITICAL
                    );
                    continue;
                }
            }
        }

        $listRequestPath = $this->getListDeleteRequestPath();

        if (!empty($listRequestPath)) {
            $this->import->deleteUrlRewrites($listRequestPath);
            $this->countItemsDeleted = count($listRequestPath);
        }

        while ($bunch = $this->_dataSourceModel->getNextBunch()) {
            foreach ($bunch as $rowNum => $rowData) {
                $this->processData($rowData, $rowNum);
            }
        }

        return $this;
    }

    /**
     * Get multiple value separator
     *
     * @return string
     */
    public function getMultipleValueSeparator()
    {
        if (!empty($this->_parameters[Import::FIELD_FIELD_MULTIPLE_VALUE_SEPARATOR])) {
            return $this->_parameters[Import::FIELD_FIELD_MULTIPLE_VALUE_SEPARATOR];
        }
        return Import::DEFAULT_GLOBAL_MULTI_VALUE_SEPARATOR;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        $moduleInfo = $this->moduleList->getOne("Bss_UrlRewriteImportExport");
        return $moduleInfo['setup_version'];
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return [
            "image_import" => false
        ];
    }
}
