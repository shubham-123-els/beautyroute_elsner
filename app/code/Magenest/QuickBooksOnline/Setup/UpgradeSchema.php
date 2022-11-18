<?php
/**
 * Copyright © 2017 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\QuickBooksOnline\Setup;

use Magento\Framework\Setup\SetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * Class UpgradeSchema
 *
 * @package Magenest\QuickBooksOnline\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{

    /**@#+
     * @constant
     */
    const TABLE_PREFIX = 'magenest_qbonline_';

    /**
     * Upgrade database when run bin/magento setup:upgrade from command line
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (version_compare($context->getVersion(), '2.1.1') < 0) {
            $setup->getConnection()->addColumn(
                $setup->getTable('magenest_qbonline_oauth'),
                'website_id',
                [
                    'type' => Table::TYPE_INTEGER,
                    'length' => 11,
                    'nullable' => true,
                    'comment' => 'Website Id'
                ]
            );
            $this->createQbQueueTable($installer);
            $this->createQboLogTable($installer);
        }

        if (version_compare($context->getVersion(), '2.1.2') < 0) {
            $this->createMappingTaxTable($installer);
        }

        if (version_compare($context->getVersion(), '2.2.2') < 0) {
            $this->modifyOauthTable($installer);
        }

        if (version_compare($context->getVersion(), '2.3.0') < 0) {
            $this->addRefreshTokenOauthTable($installer);
        }

        if (version_compare($context->getVersion(), '2.4.0') < 0) {
            $this->addAccountTable($installer);
        }

        if (version_compare($context->getVersion(), '2.4.1') < 0) {
            $this->addColAccountTable($installer);
        }

        if (version_compare($context->getVersion(), '2.4.2') < 0) {
            $this->addMappingMethodTable($installer);
        }

        $installer->endSetup();
    }

    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $installer
     */
    private function addMappingMethodTable($installer)
    {
        if (!$installer->tableExists('magenest_qbonline_account')) {
            return;
        }
        $table = $installer->getTable('magenest_qbonline_payment_methods');
        $installer->getConnection()->addColumn(
            $table,
            'deposit_account',
            [
                'type'     => Table::TYPE_INTEGER,
                'nullable' => true,
                'comment'  => 'DepositToAccountRef'
            ]
        );
    }

    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $installer
     */
    private function addColAccountTable($installer)
    {
        if (!$installer->tableExists('magenest_qbonline_account')) {
            return;
        }
        $table = $installer->getTable('magenest_qbonline_account');
        $installer->getConnection()->addColumn(
            $table,
            'detail_type',
            [
                'type' => Table::TYPE_TEXT,
                'comment' => 'AccountSubType'
            ]
        );
    }

    /**
     * @param $installer
     */
    private function addAccountTable($installer)
    {
        $installer->startSetup();
        if (!$installer->tableExists('magenest_qbonline_account')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('magenest_qbonline_account')
            )->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                ],
                'Account ID'
            )->addColumn(
                'qbo_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'nullable' => false,
                ],
                'QBO ID'
            )->addColumn(
                'type',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Account type'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Account name'
            )->setComment(
                'Account Table'
            );
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
    private function addRefreshTokenOauthTable($installer)
    {
        $table = $installer->getTable('magenest_qbonline_oauth');
        $installer->getConnection()->addColumn(
            $table,
            'refresh_token',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null,
                'nullable' => true,
                'comment' => 'Refresh Token'
            ]
        );
    }

    private function modifyOauthTable($installer)
    {
        $table = $installer->getTable('magenest_qbonline_oauth');
        $installer->getConnection()->modifyColumn(
            $table,
            'app_username',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'app_tenant',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'oauth_request_token',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'oauth_request_token_secret',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'oauth_access_token',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'oauth_access_token_secret',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'qb_realm',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'qb_flavor',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
        $installer->getConnection()->modifyColumn(
            $table,
            'qb_user',
            [
                'type' => Table::TYPE_TEXT,
                'length' => null
            ]
        );
    }

    /**
     * Create the table magenest_qbonline_queue
     *
     * @param SetupInterface $installer
     * @return void
     */
    private function createQbQueueTable($installer)
    {
        $tableName = self::TABLE_PREFIX . 'queue';
        if ($installer->tableExists($tableName)) {
            return;
        }
        $table = $installer->getConnection()->newTable(
            $installer->getTable($tableName)
        )->addColumn(
            'queue_id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Queue Id'
        )->addColumn(
            'type',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Type'
        )->addColumn(
            'operation',
            Table::TYPE_SMALLINT,
            2,
            ['nullable' => false],
            'Operation'
        )->addColumn(
            'type_id',
            Table::TYPE_TEXT,
            20,
            ['nullable' => true],
            'Entity Id'
        )->addColumn(
            'website_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Website Id'
        )->addColumn(
            'company_id',
            Table::TYPE_TEXT,
            20,
            ['nullable' => true],
            'Company Id'
        )->addColumn(
            'enqueue_time',
            Table::TYPE_DATETIME,
            null,
            ['nullable' => true],
            'Enqueue Id'
        )->addColumn(
            'priority',
            Table::TYPE_SMALLINT,
            6,
            ['nullable' => true],
            'Priority'
        )->addColumn(
            'status',
            Table::TYPE_SMALLINT,
            2,
            ['nullable' => false],
            'Status'
        )->addColumn(
            'msg',
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Msg'
        )->setComment(
            'Qb Queue Table'
        );

        $installer->getConnection()->createTable($table);
    }

    /**
     * Create the table `magenest_qbonline_log
     *
     * @param SetupInterface $installer
     */
    private function createQboLogTable($installer)
    {
        $tableName = self::TABLE_PREFIX . 'log';
        if ($installer->tableExists($tableName)) {
            $installer->getConnection()->dropTable($tableName);
        }
        $table = $installer->getConnection()->newTable(
            $installer->getTable($tableName)
        )->addColumn(
            'log_id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Log Id'
        )->addColumn(
            'type',
            Table::TYPE_TEXT,
            50,
            ['nullable' => false],
            'Type'
        )->addColumn(
            'type_id',
            Table::TYPE_TEXT,
            20,
            ['nullable' => false],
            'Type'
        )->addColumn(
            'qbo_id',
            Table::TYPE_INTEGER,
            11,
            ['nullable' => true],
            'Entity Id'
        )->addColumn(
            'website_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Website Id'
        )->addColumn(
            'company_id',
            Table::TYPE_TEXT,
            20,
            ['nullable' => true],
            'Company Id'
        )->addColumn(
            'dequeue_time',
            Table::TYPE_DATETIME,
            null,
            ['nullable' => true],
            'Enqueue Id'
        )->addColumn(
            'status',
            Table::TYPE_SMALLINT,
            2,
            ['nullable' => false],
            'Status'
        )->addColumn(
            'msg',
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Msg'
        )->setComment(
            'Qb Log Table'
        );

        $installer->getConnection()->createTable($table);
    }

    /**
     * Create the table `magenest_qbonline_log
     *
     * @param SetupInterface $installer
     */
    private function createMappingTaxTable($installer)
    {
        $tableName = self::TABLE_PREFIX . 'tax';
        if ($installer->tableExists($tableName)) {
            $installer->getConnection()->dropTable($tableName);
        }
        $table = $installer->getConnection()->newTable(
            $installer->getTable($tableName)
        )->addColumn(
            'entity_id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true,
            ],
            'Entity ID'
        )->addColumn(
            'tax_name',
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Tax Name'
        )->addColumn(
            'tax_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Tax Id'
        )->addColumn(
            'tax_code',
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Tax Code'
        )->addColumn(
            'rate',
            Table::TYPE_DECIMAL,
            [10, 2],
            ['nullable' => true],
            'Rate'
        )->addColumn(
            'qbo_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'QBO Tax Id'
        )->addColumn(
            'tax_rate_value',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => true],
            'Tax Rate Value'
        )->addColumn(
            'tax_rate_name',
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Tax Rate Name'
        )->setComment('Qb Tax Table');

        $installer->getConnection()->createTable($table);
    }
}
