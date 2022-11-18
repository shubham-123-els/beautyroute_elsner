/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
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

define([
    'jquery',
    'underscore',
    'Magento_Ui/js/grid/provider',
    'uiRegistry',
    'mage/translate',
    'Magento_Catalog/js/price-utils',
    'chartBundle'
], function ($, _, Provider, Registry, $t, priceUtils) {
    'use strict';

    return Provider.extend({
        chartItemElement: 'mp-free-gifts-item-rule-chart',
        tableItemElement: 'mp-free-gifts-item-rule-table',
        divItemElement: 'mp-free-gifts-item-rule-reports',
        chartCartElement: 'mp-free-gifts-cart-rule-chart',
        tableCartElement: 'mp-free-gifts-cart-rule-table',
        divCartElement: 'mp-free-gifts-cart-rule-reports',

        /**
         * @param data
         * @returns {*}
         */
        processData: function (data) {
            var items     = data.mpAllItems || data.items,
                mpReports = $('#mp-free-gifts-reports');

            mpReports.hide();

            if (items) {
                this.buildChart(data);
                mpReports.show();
            }

            return this._super(data);
        },

        buildChart: function (data) {
            var itemRules                = [],
                cartRules                = [],
                labelItemRules           = [],
                labelCartRules           = [],
                revenueItemOnlyFreeGifts = [],
                revenueItemAllFreeGifts  = [],
                revenueCartOnlyFreeGifts = [],
                revenueCartAllFreeGifts  = [],
                divItemElement           = $('#' + this.divItemElement),
                divCartElement           = $('#' + this.divCartElement),
                tableItemElement         = $('#' + this.tableItemElement),
                tableCartElement         = $('#' + this.tableCartElement),
                items                    = data.mpAllItems || data.items;

            _.each(items, function (record) {
                if (record.apply_for === 'item') {
                    itemRules.push(record);
                }

                if (record.apply_for === 'cart') {
                    cartRules.push(record);
                }
            });

            _.each(itemRules, function (rule) {
                labelItemRules.push(rule.name);
                revenueItemOnlyFreeGifts.push(rule.revenue_free_gifts);
                revenueItemAllFreeGifts.push(rule.revenue);
            });

            _.each(cartRules, function (rule) {
                labelCartRules.push(rule.name);
                revenueCartOnlyFreeGifts.push(rule.revenue_free_gifts);
                revenueCartAllFreeGifts.push(rule.revenue);
            });

            divItemElement.hide();
            divCartElement.hide();

            if (itemRules.length) {
                tableItemElement.find('tbody').removeClass('scroll-height');
                if (itemRules.length > 10) {
                    tableItemElement.find('tbody').addClass('scroll-height');
                }
                divItemElement.show();
                this.addDataToTable(this.tableItemElement, itemRules, data.formatPrice);
                this.createChart(this.chartItemElement, labelItemRules, revenueItemOnlyFreeGifts, revenueItemAllFreeGifts);
            }

            if (cartRules.length) {
                tableCartElement.find('tbody').removeClass('scroll-height');
                if (cartRules.length > 10) {
                    tableCartElement.find('tbody').addClass('scroll-height');
                }
                divCartElement.show();
                this.addDataToTable(this.tableCartElement, cartRules, data.formatPrice);
                this.createChart(this.chartCartElement, labelCartRules, revenueCartOnlyFreeGifts, revenueCartAllFreeGifts);
            }
        },

        addDataToTable: function (tableElement, rules, priceFormat) {
            var html = '';

            _.each(rules, function (rule) {
                html += '<tr class="data-row">';
                html += '<td><div class="data-grid-cell-content">' + rule.rule_id + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + rule.name + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + (rule.order_count === null ? 0 : parseInt(rule.order_count)) + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + (rule.total_item_count_free_gifts === null ? 0 : parseInt(rule.total_item_count_free_gifts)) + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + (rule.order_item_count === null ? 0 : parseInt(rule.order_item_count)) + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + (rule.revenue_free_gifts === null ? priceUtils.formatPrice(0, priceFormat) : priceUtils.formatPrice(rule.revenue_free_gifts, priceFormat)) + '</div></td>';
                html += '<td><div class="data-grid-cell-content">' + (rule.revenue === null ? priceUtils.formatPrice(0, priceFormat) : priceUtils.formatPrice(rule.revenue, priceFormat)) + '</div></td>';
                html += '</tr>';
            });

            $('#' + tableElement).find('tbody').html(html);
        },

        createChart: function (chartElement, labels, revenueOnly, revenue) {
            var config = {
                animationEnabled: true,
                type: 'bar',
                data: {
                    datasets: [
                        {
                            type: 'bar',
                            label: 'Total Revenue of Free Gifts',
                            data: revenueOnly,
                            fill: true,
                            yAxisID: 'y-axis-1',
                            backgroundColor: '#4285F4',
                            borderWidth: 1
                        },
                        {
                            type: 'bar',
                            label: 'Total Revenue',
                            data: revenue,
                            fill: false,
                            yAxisID: 'y-axis-1',
                            backgroundColor: '#DB4437',
                            borderWidth: 1
                        }
                    ],
                    labels: labels
                },
                options: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    tooltips: {
                        mode: 'index',
                        callbacks: {}
                    },
                    scales: {
                        yAxes: [
                            {
                                type: 'linear',
                                display: true,
                                position: 'left',
                                ticks: {
                                    beginAtZero: true
                                },
                                id: 'y-axis-1'
                            }
                        ]
                    }
                }
            };

            if (typeof window[chartElement] !== 'undefined' &&
                typeof window[chartElement].destroy === 'function'
            ) {
                window[chartElement].destroy();
            }

            /* global Chart */
            window[chartElement] = new Chart($('#' + chartElement), config);
        }
    });
});
