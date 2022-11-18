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

namespace Mageplaza\TableRateShipping\Setup;

use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Zend_Db_Exception;

/**
 * Class InstallSchema
 * @package Mageplaza\TableRateShipping\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var ProductMetadataInterface
     */
    private $productMetadata;

    /**
     * InstallSchema constructor.
     *
     * @param ProductMetadataInterface $productMetadata
     */
    public function __construct(ProductMetadataInterface $productMetadata)
    {
        $this->productMetadata = $productMetadata;
    }

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @throws Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($this->versionCompare('2.3.0')) {
            $setup->endSetup();

            return;
        }

        $connection = $setup->getConnection();

        if (!$setup->tableExists('mageplaza_tablerate_rate')) {
            $table = $connection->newTable($setup->getTable('mageplaza_tablerate_rate'))
                ->addColumn('rate_id', Table::TYPE_INTEGER, null, [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true
                ])
                ->addColumn('method_id', Table::TYPE_INTEGER, 10, ['unsigned' => true])
                ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('product_fixed_rate', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('product_percentage_rate', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('weight_fixed_rate', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('order_fixed_rate', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('delivery', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('country_id', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('region', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_from', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_to', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_range', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => 0])
                ->addColumn('postcode', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_from_alpha', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_from_num', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_to_alpha', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('postcode_to_num', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('weight_from', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('weight_to', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('subtotal_from', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('subtotal_to', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('qty_from', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('qty_to', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('shipping_group', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, ['default' => Table::TIMESTAMP_INIT])
                ->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, ['default' => Table::TIMESTAMP_INIT])
                ->addForeignKey(
                    $setup->getFkName(
                        'mageplaza_tablerate_rate',
                        'method_id',
                        'mageplaza_tablerate_method',
                        'method_id'
                    ),
                    'method_id',
                    $setup->getTable('mageplaza_tablerate_method'),
                    'method_id',
                    Table::ACTION_CASCADE
                )
                ->addIndex(
                    $setup->getIdxName('mageplaza_tablerate_rate', ['rate_id', 'method_id']),
                    ['rate_id', 'method_id']
                )
                ->setComment('Mageplaza TableRateShipping Rate');

            $connection->createTable($table);
        }

        if (!$setup->tableExists('mageplaza_tablerate_method')) {
            $table = $setup->getConnection()
                ->newTable($setup->getTable('mageplaza_tablerate_method'))
                ->addColumn('method_id', Table::TYPE_INTEGER, null, [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true
                ])
                ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
                ->addColumn('description', Table::TYPE_TEXT, '1M')
                ->addColumn('status', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => 0])
                ->addColumn('calculate_rule', Table::TYPE_TEXT, 50)
                ->addColumn('image', Table::TYPE_TEXT, 255)
                ->addColumn('store_id', Table::TYPE_TEXT, 255, ['nullable' => false])
                ->addColumn('customer_group', Table::TYPE_TEXT, 255, ['nullable' => false])
                ->addColumn('labels', Table::TYPE_TEXT, '1M')
                ->addColumn('comments', Table::TYPE_TEXT, '1M')
                ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, ['default' => Table::TIMESTAMP_INIT])
                ->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, ['default' => Table::TIMESTAMP_INIT])
                ->addIndex($setup->getIdxName('mageplaza_tablerate_method', ['method_id']), ['method_id'])
                ->setComment('Mageplaza TableRateShipping Method');

            $connection->createTable($table);
        }

        $setup->endSetup();
    }

    /**
     * @param $version
     * @param string $operator
     *
     * @return mixed
     */
    private function versionCompare($version, $operator = '>=')
    {
        return version_compare($this->productMetadata->getVersion(), $version, $operator);
    }
}
