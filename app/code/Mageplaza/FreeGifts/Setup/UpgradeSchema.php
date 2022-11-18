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

namespace Mageplaza\FreeGifts\Setup;

use Magento\Bundle\Model\Product\Type as TypeBundle;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Zend_Db_Exception;

/**
 * Class UpgradeSchema
 * @package Mageplaza\FreeGifts\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @throws Zend_Db_Exception
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $connection = $installer->getConnection();

        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            if ($installer->tableExists('mageplaza_freegifts_rules')) {
                $connection->addColumn(
                    $installer->getTable('mageplaza_freegifts_rules'),
                    'auto_add_by',
                    [
                        'type'    => Table::TYPE_SMALLINT,
                        'size'    => 1,
                        'default' => 0,
                        'comment' => 'Auto Add By'
                    ]
                );
            }

            $salesOrder          = $installer->getTable('sales_order');
            $salesOrderItem      = $installer->getTable('sales_order_item');
            $mpFreeGiftsRules    = $installer->getTable('mageplaza_freegifts_rules');
            $salesCreditmemoItem = $installer->getTable('sales_creditmemo_item');

            $sqlFreeGifts = "CREATE SQL SECURITY INVOKER VIEW mageplaza_freegifts_totals_free_gifts AS SELECT COUNT(item_id) AS total_item_count_free_gifts, COUNT(DISTINCT order_id) AS order_count, MAX(mpfreegifts_rule_id) AS mpfreegifts_rule_id, SUM(revenue) AS revenue_free_gifts FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) AND (soi.qty_invoiced - soi.qty_refunded > 0) AND (soi.product_type <> '" . TypeBundle::TYPE_CODE . "') GROUP BY soi.item_id UNION SELECT MAX(item_id) AS item_id, MAX(order_id) AS order_id, MAX(mpfreegifts_rule_id) AS mpfreegifts_rule_id, SUM(revenue) AS revenue FROM (SELECT * FROM (SELECT bundle_items.item_id, bundle_items.order_id, bundle_items.mpfreegifts_rule_id, bundle_items.product_type, sub_soi.item_id AS sub_item_id, SUM((sub_soi.base_price * sub_soi.qty_invoiced) - (sub_soi.base_price * sub_soi.qty_refunded) - (sub_soi.base_discount_amount / sub_soi.qty_ordered * (sub_soi.qty_invoiced - sub_soi.qty_refunded))) AS revenue FROM (SELECT * FROM (SELECT items.* FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) GROUP BY soi.item_id) AS item) AS items WHERE (items.product_type = '" . TypeBundle::TYPE_CODE . "')) AS bundle_item) AS bundle_items
                 LEFT JOIN " . $salesOrderItem . " AS sub_soi ON bundle_items.item_id = sub_soi.parent_item_id WHERE (sub_soi.qty_invoiced - sub_soi.qty_refunded > 0) GROUP BY bundle_items.item_id,
                    sub_soi.item_id) AS bundle_item) AS bundle_items GROUP BY item_id) AS items_free_gifts) AS totals_free_gifts GROUP BY mpfreegifts_rule_id";

            $sqlTotals = "CREATE SQL SECURITY INVOKER VIEW mageplaza_freegifts_totals AS SELECT rv.mpfreegifts_rule_id, SUM(rv.fg_qty + rv.qty) AS order_item_count, SUM(rv.free_gifts_revenue + rv.revenue) AS revenue FROM (SELECT * FROM (SELECT tt.mpfreegifts_rule_id, MAX(new_revenue) AS free_gifts_revenue, MAX(fg_qty) AS fg_qty, SUM(qty) AS qty, SUM(revenue) AS revenue FROM (SELECT * FROM (SELECT tbr.mpfreegifts_rule_id, tbr.new_revenue, tbr.qty AS fg_qty, tnf.* FROM (SELECT * FROM (SELECT ttb.mpfreegifts_rule_id, SUM(revenue) AS new_revenue, SUM(IF(qty > 0, 1, 0)) AS qty, GROUP_CONCAT(DISTINCT order_id SEPARATOR ',') AS order_ids FROM (SELECT * FROM (SELECT total_items.item_id, total_items.order_id, total_items.mpfreegifts_rule_id, total_items.product_type, IF(product_type = '" . TypeBundle::TYPE_CODE . "', IF(sub_total_items.sub_qty_invoiced > 0, total_items.qty_invoiced, 0), total_items.qty) AS qty, IF(product_type = '" . TypeBundle::TYPE_CODE . "',sub_total_items.sub_revenue,total_items.revenue) AS revenue FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, soi.qty_invoiced, (soi.qty_invoiced - soi.qty_refunded) AS qty, SUM(((soi.base_row_total + soi.base_tax_amount - soi.base_discount_amount) / soi.qty_ordered) * (soi.qty_invoiced - soi.qty_refunded)) AS revenue, so.state FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $salesOrder . " AS so ON so.entity_id = soi.order_id WHERE (soi.order_id IN ((SELECT DISTINCT order_id FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) GROUP BY soi.item_id) AS sio))) AND (soi.parent_item_id IS NULL) AND (so.state = 'processing') GROUP BY soi.item_id) AS total_item) AS total_items
                 LEFT JOIN (SELECT * FROM (SELECT totalBundles.item_id, SUM(sub_qty) AS sub_qty_invoiced, SUM(sub_revenue) AS sub_revenue FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, soi.qty_invoiced, (soi.qty_invoiced - soi.qty_refunded) AS qty, SUM(((soi.base_row_total + soi.base_tax_amount - soi.base_discount_amount) / soi.qty_ordered) * (soi.qty_invoiced - soi.qty_refunded)) AS revenue, so.state, sub_soi.item_id AS sub_item_id, IF(sub_soi.qty_invoiced - sub_soi.qty_refunded > 0,1,0) AS sub_qty, SUM(((sub_soi.base_row_total + sub_soi.base_tax_amount - sub_soi.base_discount_amount) / sub_soi.qty_ordered) * (sub_soi.qty_invoiced - sub_soi.qty_refunded)) AS sub_revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $salesOrder . " AS so ON so.entity_id = soi.order_id
                 RIGHT JOIN " . $salesOrderItem . " AS sub_soi ON sub_soi.parent_item_id = soi.item_id WHERE (soi.order_id IN ((SELECT DISTINCT order_id FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) GROUP BY soi.item_id) AS sio))) AND (soi.parent_item_id IS NULL) AND (so.state = 'processing') AND (soi.product_type = '" . TypeBundle::TYPE_CODE . "') GROUP BY soi.item_id,
                    sub_soi.item_id) AS totalBundles) AS totalBundles GROUP BY item_id) AS sub_total_item) AS sub_total_items ON sub_total_items.item_id = total_items.item_id) AS br) AS ttb WHERE (ttb.mpfreegifts_rule_id IS NOT NULL AND qty > 0) GROUP BY ttb.mpfreegifts_rule_id) AS tb) AS tbr
                 LEFT JOIN (SELECT * FROM (SELECT total_orders.order_id, SUM(IF(qty > 0, 1, 0)) AS qty, SUM(revenue) AS revenue FROM (SELECT * FROM (SELECT total_items.item_id, total_items.order_id, total_items.mpfreegifts_rule_id, total_items.product_type, IF(product_type = '" . TypeBundle::TYPE_CODE . "', IF(sub_total_items.sub_qty_invoiced > 0, total_items.qty_invoiced, 0), total_items.qty) AS qty, IF(product_type = '" . TypeBundle::TYPE_CODE . "',sub_total_items.sub_revenue,total_items.revenue) AS revenue FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, soi.qty_invoiced, (soi.qty_invoiced - soi.qty_refunded) AS qty, SUM(((soi.base_row_total + soi.base_tax_amount - soi.base_discount_amount) / soi.qty_ordered) * (soi.qty_invoiced - soi.qty_refunded)) AS revenue, so.state FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $salesOrder . " AS so ON so.entity_id = soi.order_id WHERE (soi.order_id IN ((SELECT DISTINCT order_id FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) GROUP BY soi.item_id) AS sio))) AND (soi.parent_item_id IS NULL) AND (so.state = 'processing') GROUP BY soi.item_id) AS total_item) AS total_items
                 LEFT JOIN (SELECT * FROM (SELECT totalBundles.item_id, SUM(sub_qty) AS sub_qty_invoiced, SUM(sub_revenue) AS sub_revenue FROM (SELECT * FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, soi.qty_invoiced, (soi.qty_invoiced - soi.qty_refunded) AS qty, SUM(((soi.base_row_total + soi.base_tax_amount - soi.base_discount_amount) / soi.qty_ordered) * (soi.qty_invoiced - soi.qty_refunded)) AS revenue, so.state, sub_soi.item_id AS sub_item_id, IF(sub_soi.qty_invoiced - sub_soi.qty_refunded > 0,1,0) AS sub_qty, SUM(((sub_soi.base_row_total + sub_soi.base_tax_amount - sub_soi.base_discount_amount) / sub_soi.qty_ordered) * (sub_soi.qty_invoiced - sub_soi.qty_refunded)) AS sub_revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $salesOrder . " AS so ON so.entity_id = soi.order_id
                 RIGHT JOIN " . $salesOrderItem . " AS sub_soi ON sub_soi.parent_item_id = soi.item_id WHERE (soi.order_id IN ((SELECT DISTINCT order_id FROM (SELECT soi.item_id, soi.order_id, soi.mpfreegifts_rule_id, soi.product_type, SUM((soi.base_price * soi.qty_invoiced) - (soi.base_price * soi.qty_refunded) - (soi.base_discount_amount / soi.qty_ordered * (soi.qty_invoiced - soi.qty_refunded))) AS revenue FROM " . $salesOrderItem . " AS soi
                 LEFT JOIN " . $mpFreeGiftsRules . " AS mfg ON soi.mpfreegifts_rule_id = mfg.rule_id
                 LEFT JOIN " . $salesCreditmemoItem . " AS sci ON soi.item_id = sci.order_item_id WHERE (soi.parent_item_id IS NULL) AND (soi.mpfreegifts_rule_id IS NOT NULL) GROUP BY soi.item_id) AS sio))) AND (soi.parent_item_id IS NULL) AND (so.state = 'processing') AND (soi.product_type = '" . TypeBundle::TYPE_CODE . "') GROUP BY soi.item_id,
                    sub_soi.item_id) AS totalBundles) AS totalBundles GROUP BY item_id) AS sub_total_item) AS sub_total_items ON sub_total_items.item_id = total_items.item_id) AS total_order) AS total_orders WHERE (total_orders.mpfreegifts_rule_id IS NULL AND qty > 0) GROUP BY order_id) AS tn) AS tnf ON FIND_IN_SET(tnf.order_id, tbr.order_ids)) AS t) AS tt GROUP BY tt.mpfreegifts_rule_id) AS r) AS rv GROUP BY rv.mpfreegifts_rule_id";

            $installer->getConnection()->query($sqlFreeGifts);
            $installer->getConnection()->query($sqlTotals);
        }

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            if (!$installer->tableExists('mageplaza_freegifts_banner_file')) {
                $table = $installer->getConnection()
                    ->newTable($installer->getTable('mageplaza_freegifts_banner_file'))
                    ->addColumn('banner_id', Table::TYPE_INTEGER, null, [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary'  => true
                    ], 'Banner Id')
                    ->addColumn('rule_id', Table::TYPE_INTEGER, null, [], 'Rule ID')
                    ->addColumn('status', Table::TYPE_INTEGER, null, [], 'Status')
                    ->addColumn('alt', Table::TYPE_TEXT, 255, [], 'Alt Text')
                    ->addColumn('position', Table::TYPE_SMALLINT, null, ['default' => 0], 'Position')
                    ->addColumn('size', Table::TYPE_INTEGER, null, [], 'File Size')
                    ->addColumn('file_path', Table::TYPE_TEXT, 255, [], 'File Path')
                    ->addColumn('resolution', Table::TYPE_TEXT, 255, [], 'Resolution')
                    ->addColumn('tooltip', Table::TYPE_TEXT, 255, [], 'Tooltip')
                    ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, [], 'File Created At')
                    ->setComment('Banner File');

                $installer->getConnection()->createTable($table);
            }

            if ($installer->tableExists('mageplaza_freegifts_rules')) {
                $columns = [
                    'mp_banner_position'       => [
                        'type'    => Table::TYPE_SMALLINT,
                        'default' => 0,
                        'comment' => 'Banner Position',
                        'after'   => 'auto_add_by'
                    ],
                    'mp_banner_width'          => [
                        'type'    => Table::TYPE_TEXT,
                        'length'  => 255,
                        'comment' => 'Banner Image Width',
                        'after'   => 'mp_banner_position'
                    ],
                    'mp_banner_height'         => [
                        'type'    => Table::TYPE_TEXT,
                        'length'  => 255,
                        'comment' => 'Banner Image Height',
                        'after'   => 'mp_banner_width'
                    ],
                    'mp_show_next_prev_button' => [
                        'type'    => Table::TYPE_INTEGER,
                        'default' => 1,
                        'comment' => 'Show Next Preview Button',
                        'after'   => 'mp_banner_height'
                    ],
                    'mp_show_dots'             => [
                        'type'    => Table::TYPE_INTEGER,
                        'default' => 1,
                        'comment' => 'Show Dots',
                        'after'   => 'mp_show_next_prev_button'
                    ],
                    'mp_auto_play'             => [
                        'type'    => Table::TYPE_INTEGER,
                        'default' => 1,
                        'comment' => 'Auto Play',
                        'after'   => 'mp_show_dots'
                    ],
                    'mp_auto_timeout'          => [
                        'type'    => Table::TYPE_TEXT,
                        'length'  => 255,
                        'comment' => 'Time Out',
                        'after'   => 'mp_auto_play'
                    ]
                ];

                foreach ($columns as $name => $definition) {
                    $installer->getConnection()->addColumn(
                        $installer->getTable('mageplaza_freegifts_rules'),
                        $name,
                        $definition
                    );
                }
            }
        }

        $installer->endSetup();
    }
}
