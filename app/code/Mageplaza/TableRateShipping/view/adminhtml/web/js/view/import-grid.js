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

define([
    'jquery',
    'Magento_Ui/js/modal/modal',
    'mage/translate'
], function ($, modal, $t) {
    'use strict';

    return {
        options: {
            gridImportUrl: '',
            gridProcessUrl: ''
        },

        create: function (options) {
            var self = this, body = $('body'), checkBox;

            this.options = options;

            body.on('click', '#mp-import-method', function () {
                self.initImportPopup();
            });

            body.on('click', '#mptablerate_method_import_grid_table tbody tr td', function () {
                if (!$(this).find('input[type=checkbox]').length) {
                    checkBox = $(this).parents('tr').find('td input[type=checkbox]');

                    checkBox.prop('checked', !checkBox.prop('checked'));
                }
            });
        },

        initImportPopup: function () {
            var self = this, form = $('#mp-import-grid');

            var options = {
                type: 'popup',
                responsive: true,
                innerScroll: true,
                title: $t('Select Shipping Rates'),
                modalClass: 'admin__scope-old',
                buttons: [{
                    text: $t('Import'),
                    class: 'action primary',
                    click: function () {
                        self.onImportMethodBtn(form);
                    }
                }, {
                    text: $t('Cancel'),
                    class: 'action',
                    click: function () {
                        this.closeModal();
                    }
                }]
            };

            $.ajax({
                method: 'POST',
                url: self.options.gridImportUrl,
                showLoader: true,
                data: {form_key: window.FORM_KEY}
            }).done(function (response) {
                if (response && response.error) {
                    $('#mp-message-container').html(
                        '<div class="message message-error error">' +
                        '<span>' + response.message + '</span>' +
                        '</div>'
                    );

                    return;
                }

                form.html(response).modal(options).modal('openModal');
            });
        },

        onImportMethodBtn: function (form) {
            var rates = [];

            $.each($('#mptablerate_method_import_grid_table').find('td input:checked'), function (index, element) {
                rates.push($(element).parents('tr').find('td:nth-child(2)').text().trim());
            });

            if (!rates.length) {
                form.modal('closeModal');

                return;
            }

            $.ajax({
                method: 'POST',
                url: this.options.gridProcessUrl,
                showLoader: true,
                data: {rates: rates}
            }).done(function () {
                window.mptablerate_rate_gridJsObject.reload();
            }).always(function () {
                form.modal('closeModal');
            });
        }
    };
});

