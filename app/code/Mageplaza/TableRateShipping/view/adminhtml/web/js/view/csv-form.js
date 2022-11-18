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
    'Mageplaza_TableRateShipping/js/model/validation',
    'mage/translate'
], function ($, modal, validation, $t) {
    'use strict';

    return {
        options: {
            csvForm: '',
            csvImportUrl: ''
        },

        create: function (options) {
            this.options = options;

            validation.setFormValidation($(this.options.csvForm));

            this.initCsvPopup();
        },

        initCsvPopup: function () {
            var self    = this,
                options = {
                    type: 'popup',
                    responsive: true,
                    innerScroll: true,
                    title: $t('Import Shipping Rates'),
                    modalClass: 'admin__scope-old',
                    trigger: '#mp-import-csv',
                    buttons: [{
                        text: $t('Import'),
                        class: 'action primary',
                        click: function () {
                            self.onImportCsvBtn();
                        }
                    }, {
                        text: $t('Cancel'),
                        class: 'action',
                        click: function () {
                            this.closeModal();
                        }
                    }]
                };

            $(this.options.csvForm).modal(options);
        },

        onImportCsvBtn: function () {
            var self = this,
                form = $(this.options.csvForm),
                file = form.find('#import_file'),
                data = new FormData(form[0]);

            if (form.valid() && data) {
                data.append('import_file', file[0].files[0]);
                $.ajax({
                    type: 'POST',
                    url: this.options.csvImportUrl,
                    data: data,
                    processData: false,
                    contentType: false,
                    showLoader: true,
                    success: function (response) {
                        $(self.options.csvForm + ' .import-message').html(response.html);

                        if (response.status) {
                            window.mptablerate_rate_gridJsObject.reload();
                            form.modal('closeModal');
                            form[0].reset();
                        }
                    }
                });
            }
        }
    };
});

