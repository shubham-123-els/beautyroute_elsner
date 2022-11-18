<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Magenest_QuickBooksOnline extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package  Magenest_QuickBooksOnline
 * @author   Magenest JSC
 */
namespace Magenest\QuickBooksOnline\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        if (!$installer->tableExists('magenest_qbonline_oauth')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('magenest_qbonline_oauth')
            )->addColumn(
                'oauth_id',
                Table::TYPE_INTEGER,
                null,
                [
                 'identity' => true,
                 'nullable' => false,
                 'primary'  => true,
                ],
                'Oauth ID'
            )->addColumn(
                'app_username',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'App Username'
            )->addColumn(
                'app_tenant',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'App tenant'
            )->addColumn(
                'oauth_request_token',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Oauth Request Token'
            )->addColumn(
                'oauth_request_token_secret',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Oauth Request Token Secret'
            )->addColumn(
                'oauth_access_token',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Oauth Access Token'
            )->addColumn(
                'oauth_access_token_secret',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Oauth Access Token Secret'
            )->addColumn(
                'qb_realm',
                Table::TYPE_TEXT,
                32,
                ['nullable' => true],
                'QB Realm'
            )->addColumn(
                'qb_flavor',
                Table::TYPE_TEXT,
                12,
                ['nullable' => true],
                'QB flavor'
            )->addColumn(
                'qb_user',
                Table::TYPE_TEXT,
                64,
                ['nullable' => true],
                'QB User'
            )->addColumn(
                'request_datetime',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => true],
                'Request Datetime'
            )->addColumn(
                'access_datetime',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => true],
                'Request Datetime'
            )->addColumn(
                'touch_datetime',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => true],
                'Request Datetime'
            )->setComment(
                'Oauth Table'
            );
            $installer->getConnection()->createTable($table);
        }


//        if (!$installer->tableExists('magenest_qbonline_category')) {
//            $table = $installer->getConnection()->newTable(
//                $installer->getTable('magenest_qbonline_category')
//            )->addColumn(
//                'entity_id',
//                Table::TYPE_INTEGER,
//                null,
//                [
//                    'identity' => true,
//                    'nullable' => false,
//                    'primary'  => true,
//                ],
//                'Entity ID'
//            )->addColumn(
//                'cat_id',
//                Table::TYPE_INTEGER,
//                null,
//                ['nullable' => false],
//                'Magento record ID'
//            )->addColumn(
//                'category_name',
//                Table::TYPE_TEXT,
//                null,
//                ['nullable' => false],
//                'Type'
//            )->addColumn(
//                'qbo_id',
//                Table::TYPE_INTEGER,
//                null,
//                ['nullable' => false],
//                'QBO Id Item'
//            )->addColumn(
//                'sync_token',
//                Table::TYPE_INTEGER,
//                null,
//                ['nullable' => false , 'default' => 0],
//                'Sync Token'
//            )->addColumn(
//                'created_at',
//                Table::TYPE_DATETIME,
//                null,
//                ['nullable' => true],
//                'Created At'
//            )->addColumn(
//                'updated_at',
//                Table::TYPE_DATETIME,
//                null,
//                ['nullable' => true],
//                'Updated At'
//            );
//            $installer->getConnection()->createTable($table);
//        }

        if (!$installer->tableExists('magenest_qbonline_payment_methods')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('magenest_qbonline_payment_methods')
            )->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                ],
                'Entity ID'
            )->addColumn(
                'payment_code',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Magento record ID'
            )->addColumn(
                'title',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Type'
            )->addColumn(
                'qbo_id',
                Table::TYPE_INTEGER,
                null,
                ['nullable' => false],
                'QBO Id Item'
            )->addColumn(
                'sync_token',
                Table::TYPE_INTEGER,
                null,
                ['nullable' => false , 'default' => 0],
                'Sync Token'
            );
            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
