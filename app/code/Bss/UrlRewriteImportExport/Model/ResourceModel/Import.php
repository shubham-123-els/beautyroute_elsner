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

/**
 * Class Import
 *
 * @package Bss\UrlRewriteImportExport\Model\ResourceModel
 */
class Import
{
    /**
     * @var \Magento\Framework\App\ResourceConnection
     */
    protected $resource;

    /**
     * @var array
     */
    protected $tableNames = [];

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $readAdapter;

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $writeAdapter;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * @var \Magento\UrlRewrite\Model\UrlRewriteFactory
     */
    protected $urlRewriteFactory;

    /**
     * @var array
     */
    protected $existProductIds = [];

    /**
     * @var array
     */
    protected $existCategoryIds = [];

    /**
     * @var array
     */
    protected $existCmsPageIds = [];

    /**
     * @var \Magento\UrlRewrite\Model\ResourceModel\UrlRewriteCollection
     */
    protected $urlRewriteCollectionFactory;

    /**
     * Import constructor.
     * @param \Magento\Framework\App\ResourceConnection $resource
     * @param \Magento\Framework\App\Request\Http $request
     * @param \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewriteFactory
     * @param \Magento\UrlRewrite\Model\ResourceModel\UrlRewriteCollection $collectionFactory
     */
    public function __construct(
        \Magento\Framework\App\ResourceConnection $resource,
        \Magento\Framework\App\Request\Http $request,
        \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewriteFactory,
        \Magento\UrlRewrite\Model\ResourceModel\UrlRewriteCollectionFactory $collectionFactory
    ) {
        $this->resource = $resource;
        $this->readAdapter = $this->resource->getConnection('core_read');
        $this->writeAdapter = $this->resource->getConnection('core_write');
        $this->request = $request;
        $this->urlRewriteFactory = $urlRewriteFactory;
        $this->urlRewriteCollectionFactory = $collectionFactory;
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
                $this->tableNames[$entity] = $this->resource->getTableName($entity);
            } catch (\Exception $e) {
                return false;
            }
        }
        return $this->tableNames[$entity];
    }

    /**
     * Get array of exist request path
     *
     * @return array|bool
     */
    public function getExistRequestPath()
    {
        $existRequestPath = [];
        try {
            $select = $this->readAdapter->select()
                ->from(
                    [$this->getTableName('url_rewrite')],
                    ['request_path']
                );

            $result = $this->readAdapter->query($select);
            foreach ($result as $value) {
                $existRequestPath[] = strtolower($value['request_path']);
            }
        } catch (\Exception $e) {
            return false;
        }
        return $existRequestPath;
    }

    /**
     * Get array of exist product ids
     *
     * @return array|bool
     */
    public function getExistProductIds()
    {
        if (empty($this->existProductIds)) {
            try {
                $select = $this->readAdapter->select()
                    ->from(
                        [$this->getTableName('catalog_product_entity')],
                        ['entity_id']
                    );

                $result = $this->readAdapter->query($select);
                foreach ($result as $value) {
                    $this->existProductIds[] = $value['entity_id'];
                }
            } catch (\Exception $e) {
                return false;
            }
        }
        return $this->existProductIds;
    }

    /**
     * Get array of exist category ids
     *
     * @return array|bool
     */
    public function getExistCategoryIds()
    {
        if (empty($this->existCategoryIds)) {
            try {
                $select = $this->readAdapter->select()
                    ->from(
                        [$this->getTableName('catalog_category_entity')],
                        ['entity_id']
                    );

                $result = $this->readAdapter->query($select);
                foreach ($result as $value) {
                    $this->existCategoryIds[] = $value['entity_id'];
                }
            } catch (\Exception $e) {
                return false;
            }
        }
        return $this->existCategoryIds;
    }

    /**
     * Get array of exist Cms page ids
     *
     * @return array|bool
     */
    public function getExistCmsPageIds()
    {
        if (empty($this->existCmsPageIds)) {
            try {
                $select = $this->readAdapter->select()
                    ->from(
                        [$this->getTableName('cms_page')],
                        ['page_id']
                    );

                $result = $this->readAdapter->query($select);
                foreach ($result as $value) {
                    $this->existCmsPageIds[] = $value['page_id'];
                }
            } catch (\Exception $e) {
                return false;
            }
        }
        return $this->existCmsPageIds;
    }

    /**
     * Check exist url rewrite id
     *
     * @param string $requestPath
     * @param string $storeId
     * @return int
     */
    public function getExistUrlRewriteId($requestPath, $storeId)
    {
        $select = $this->readAdapter->select()
            ->from(
                $this->getTableName('url_rewrite'),
                [
                    'url_rewrite_id'
                ]
            )->where('request_path = :request_path')
            ->where('store_id = :store_id')
            ->limit(1);
        $bind = [
            ':request_path' => strtolower($requestPath),
            ':store_id' => $storeId
        ];
        $urlRewriteId = (int)$this->readAdapter->fetchOne($select, $bind);
        return $urlRewriteId;
    }

    /**
     * Check exist target path
     *
     * @param string $targetPath
     * @param int $storeId
     * @return bool
     */
    public function checkExistTargetPath($targetPath, $storeId)
    {
        $select = $this->readAdapter->select()
            ->from(
                $this->getTableName('url_rewrite'),
                [
                    'url_rewrite_id'
                ]
            )->where('target_path = :target_path')
            ->where('store_id = :store_id')
            ->limit(1);
        $bind = [
            ':target_path' => $targetPath,
            ':store_id' => $storeId
        ];
        $idByTargetPath = $this->readAdapter->fetchOne($select, $bind);

        $select = $this->readAdapter->select()
            ->from(
                $this->getTableName('url_rewrite'),
                [
                    'url_rewrite_id'
                ]
            )->where('request_path = :request_path')
            ->where('store_id = :store_id')
            ->limit(1);
        $bind = [
            ':request_path' => $targetPath,
            ':store_id' => $storeId
        ];
        $idByRequestPath = $this->readAdapter->fetchOne($select, $bind);

        if ($idByTargetPath !== false || $idByRequestPath !== false) {
            return true;
        }
        return false;
    }

    /**
     * Get exist request path from target path
     *
     * @param string $targetPath
     * @param int $storeId
     * @return string
     */
    public function getPathByExistTargetPath($targetPath, $storeId)
    {
        $select = $this->readAdapter->select()
            ->from(
                $this->getTableName('url_rewrite'),
                [
                    'request_path'
                ]
            )->where('target_path = :target_path')
            ->where('store_id = :store_id')
            ->limit(1);
        $bind = [
            ':target_path' => $targetPath,
            ':store_id' => $storeId
        ];
        $requestPath = $this->readAdapter->fetchOne($select, $bind);
        return $requestPath;
    }

    /**
     * Delete url rewrites by array of request path
     *
     * @param array $listRequestPath
     */
    public function deleteUrlRewrites($listRequestPath)
    {
        $select = $this->readAdapter->select()
            ->from(
                $this->getTableName('url_rewrite'),
                [
                    'url_rewrite_id'
                ]
            );

        $allCheck = false;
        if (!empty($listRequestPath['all'])) {
            $allCheck = true;
            $select->where('request_path IN (?)', $listRequestPath['all']);
        }
        if (!empty($listRequestPath['store'])) {
            $i = 0;
            foreach ($listRequestPath['store'] as $row) {
                $i++;
                if ($i == 1 && !$allCheck) {
                    $select->where(
                        "request_path ='" . $row['current_request_path'] . "' AND store_id = '" . $row['storeId'] . "'"
                    );
                } else {
                    $select->orWhere(
                        "request_path ='" . $row['current_request_path'] . "' AND store_id = '" . $row['storeId'] . "'"
                    );
                }
            }
        }
        $listUrlRewriteDelete = $this->readAdapter->fetchCol($select);
        $collection = $this->urlRewriteCollectionFactory->create();
        $collection->addFieldToFilter(
            'url_rewrite_id',
            ['in' => $listUrlRewriteDelete]
        )->load();
        $collection->walk('delete');
    }
}
