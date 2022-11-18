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
            rateFormUrl: '',
            rateSaveUrl: ''
        },
        modal: {},

        create: function (options) {
            var self = this, body = $('body');

            this.options = options;

            // init add rate button
            body.on('click', '#mp-add-rate', function () {
                self.initRatePopup('new', $t('Add New Shipping Rate'));
            });

            // init edit rate button
            body.on('click', '.mp-edit-rate', function () {
                self.initRatePopup($(this).attr('data-rate-id'), $t('Edit Shipping Rate'));
            });

            // filter region by country
            body.on('change', '#country_id', function () {
                self.filterRegion($(this));
            });

            body.on('change', '#postcode_range', function () {
                self.updatePostcode($(this));
            });
        },

        initRatePopup: function (rateId, title) {
            var self = this, options, form;

            if (typeof this.modal[rateId] !== 'undefined') {
                this.modal[rateId].modal('openModal');

                return;
            }

            $('body').append('<form id="mp-rate-form-' + rateId + '"></form>');
            form = $('#mp-rate-form-' + rateId);

            validation.setFormValidation(form);

            options = {
                type: 'slide',
                responsive: true,
                innerScroll: true,
                title: title,
                modalClass: 'admin__scope-old',
                buttons: [{
                    text: $t('Save'),
                    class: 'action primary',
                    click: function () {
                        self.onConfirmBtn(form);
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
                url: self.options.rateFormUrl,
                showLoader: true,
                data: {rate_id: rateId === 'new' ? '' : rateId}
            }).done(function (response) {
                if (response && response.error) {
                    $('#mp-message-container').html(
                        '<div class="message message-error error">' +
                        '<span>' + response.message + '</span>' +
                        '</div>'
                    );

                    return;
                }

                self.modal[rateId] = form.html(response).modal(options);
                self.modal[rateId].modal('openModal');

                form.find('#country_id').trigger('change');
                form.find('#postcode_range').trigger('change');
            });
        },

        onConfirmBtn: function (form) {
            if (form.valid()) {
                $.ajax({
                    method: 'POST',
                    url: this.options.rateSaveUrl,
                    showLoader: true,
                    data: {formData: form.serialize()}
                }).done(function () {
                    window.mptablerate_rate_gridJsObject.reload();
                    if (form.attr('id') === 'mp-rate-form-new') {
                        form[0].reset();
                        form.find('#country_id').trigger('change');
                        form.find('#postcode_range').trigger('change');
                    }
                }).always(function () {
                    form.modal('closeModal');
                });
            }
        },

        filterRegion: function (elem) {
            var container = elem.parents('.fieldset'),
                country   = container.find('#country_id option:selected').text(),
                regions   = container.find('#region optgroup[label="' + country + '"]');

            container.find('#region optgroup').hide();

            if (regions.length) {
                regions.show();
                container.find('#region').attr('disabled', false);
            } else {
                container.find('#region').attr('disabled', true);
            }
        },

        updatePostcode: function (elem) {
            var container    = elem.parents('.fieldset'),
                isChecked    = elem.is(':checked'),
                postcode     = container.find('.field-postcode'),
                postcodeFrom = container.find('.field-postcode_from');

            postcode.find('input').attr('disabled', isChecked);
            postcodeFrom.find('input').attr('disabled', !isChecked);

            if (isChecked) {
                postcode.hide();
                postcodeFrom.show();
            } else {
                postcode.show();
                postcodeFrom.hide();
            }
        }
    };
});

