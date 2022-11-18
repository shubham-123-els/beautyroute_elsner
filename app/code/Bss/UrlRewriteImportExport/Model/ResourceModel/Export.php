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
namespace Bss\UrlRewriteImportExport\Model\ResourceModel;

use Magento\Framework\App\ResourceConnection;

/**
 * Class Export
 *
 * @package Bss\UrlRewriteImportExport\Model\ResourceModel
 */
class Export
{
    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $readAdapter;

    /**
     * @var \Magento\Framework\App\ResourceConnection
     */
    protected $resourceConnection;

    /**
     * @var array
     */
    protected $tableNames = [];

    /**
     * @var \Magento\Framework\Stdlib\DateTime\TimezoneInterface
     */
    protected $timezone;

    /**
     * Export constructor.
     * @param ResourceConnection $resourceConnection
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone
     */
    public function __construct(
        ResourceConnection $resourceConnection,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone
    ) {
        $this->resourceConnection = $resourceConnection;
        $this->timezone = $timezone;
        $this->readAdapter = $this->resourceConnection->getConnection('core_read');
    }

    /**
     * Get url rewrites for import
     *
     * @param $requestData
     * @return \Zend_Db_Statement_Interface
     */
    public function getUrlRewrites($requestData)
    {
        $select = $this->readAdapter->select()
            ->from(
                ['main_table' => $this->getTableName('url_rewrite')],
                ['*']
            );
        switch ($requestData['export-by']) {
            case 'entity-type':
                $urlRewrite = $this->filterByEntityType($select, $requestData);
                break;
            case 'store-id':
                $urlRewrite = $this->filterByStoreId($select, $requestData);
                break;
            case 'redirect-type':
                $urlRewrite = $this->filterByRedirectType($select, $requestData);
                break;
            default:
                $urlRewrite = $this->readAdapter->query($select);
        }

        return $urlRewrite;
    }

    /**
     * Filter url rewwrite by store id
     *
     * @param \Zend_Db_Statement_Interface $select
     * @param array $requestData
     * @return \Zend_Db_Statement_Interface
     */
    protected function filterByStoreId($select, $requestData)
    {
        if ($requestData['store-id']=='all') {
            return $this->readAdapter->query($select);
        } else {
            $select->where(
                "main_table.store_id = :store_id"
            );
            $bind = [
                ':store_id' => $requestData['store-id']
            ];
            return $this->readAdapter->query($select, $bind);
        }
    }

    /**
     * Filter url rewwrite by entity type
     *
     * @param \Zend_Db_Statement_Interface $select
     * @param array $requestData
     * @return \Zend_Db_Statement_Interface
     */
    protected function filterByEntityType($select, $requestData)
    {
        if ($requestData['entity-type']=='all') {
            return $this->readAdapter->query($select);
        } else {
            $select->where(
                "main_table.entity_type = :entity_type"
            );
            $bind = [
                ':entity_type' => $requestData['entity-type']
            ];
            return $this->readAdapter->query($select, $bind);
        }
    }

    /**
     * Filter url rewwrite by redirect type
     *
     * @param \Zend_Db_Statement_Interface $select
     * @param array $requestData
     * @return \Zend_Db_Statement_Interface
     */
    protected function filterByRedirectType($select, $requestData)
    {
        if ($requestData['redirect-type']=='all') {
            return $this->readAdapter->query($select);
        } else {
            $select->where(
                "main_table.redirect_type = :redirect_type"
            );
            $bind = [
                ':redirect_type' => $requestData['redirect-type']
            ];
            return $this->readAdapter->query($select, $bind);
        }
    }

    /**
     * Get table name from database
     *
     * @param string $entity
     * @return bool|string
     */
    protected function getTableName($entity)
    {
        if (!isset($this->tableNames[$entity])) {
            try {
                $this->tableNames[$entity] = $this->resourceConnection->getTableName($entity);
            } catch (\Exception $e) {
                return false;
            }
        }
        return $this->tableNames[$entity];
    }

    /**
     * Format date
     *
     * @param string $dateTime
     * @return string
     */
    public function formatDate($dateTime)
    {
        $dateTimeAsTimeZone = $this->timezone
            ->date($dateTime)
            ->format('YmdHis');
        return $dateTimeAsTimeZone;
    }

    /**
     * Get export data to fetch csv file
     *
     * @param object $urlRewrites
     * @param int $from
     * @param int $to
     * @return array
     */
    public function getExportData($urlRewrites, $from, $to)
    {
        $data = [];
        $data[0] = [
            'entity_type',
            'product_id',
            'category_id',
            'cms_page_id',
            'store_id',
            'current_request_path',
            'new_request_path',
            'target_path',
            'redirect_type',
            'description'
        ];
        foreach ($urlRewrites as $key => $urlRewrite) {
            if ($key>=$from && $key < $to) {
                $row = null;
                $row[0] = $urlRewrite['entity_type'];

                switch ($urlRewrite['entity_type']) {
                    case 'product':
                        $row[1] = $urlRewrite['entity_id'];
                        $row[2] = $this->getCategoryId($urlRewrite['target_path']);
                        $row[3] = "";
                        break;
                    case 'category':
                        $row[1] = "";
                        $row[2] = $urlRewrite['entity_id'];
                        $row[3] = "";
                        break;
                    case 'cms-page':
                        $row[1] = "";
                        $row[2] = "";
                        $row[3] = $urlRewrite['entity_id'];
                        break;
                    case 'custom':
                        $row[1] = "";
                        $row[2] = "";
                        $row[3] = "";
                        break;
                }
                $row[4] = $urlRewrite['store_id'];
                $row[5] = $urlRewrite['request_path'];
                $row[6] = "";
                $row[7] = $urlRewrite['target_path'];
                $row[8] = $urlRewrite['redirect_type'];
                $row[9] = $urlRewrite['description'];
                $data[] = $row;
            }
        }
        return $data;
    }

    /**
     * Get category id from target path
     *
     * @param string $targetPath
     * @return string
     */
    protected function getCategoryId($targetPath)
    {
        if (strpos($targetPath, 'category') !== false) {
            $arr = explode('/', $targetPath);

            if (isset($arr[6])) {
                return $arr[6];
            }
        }
        return "";
    }
}
