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
    'Magento_Ui/js/modal/alert',
    'Magento_Ui/js/modal/modal',
    'mage/translate',
    'Magento_Customer/js/customer-data'
], function ($, _, alert, modal, $t, customerData) {
    'use strict';

    return {
        sliderConfig: {
            loop: false,
            margin: 10,
            nav: true,
            dots: true,
            lazyLoad: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                1200: {items: 4},
                1000: {items: 3},
                800: {items: 2},
                600: {items: 1},
                100: {items: 1}
            }
        },

        option: {
            modal: '#mpfreegifts-option-modal-',
            form: '#mpfreegifts-option-form-',
            add: '#mpfreegifts-option-add-',
            remove: '#mpfreegifts-option-remove-',
            wrapper: '#mpfreegifts-option-wrapper',
            title: $t('Select Gift Options'),
            qty: '.mpfreegifts-gift-input-qty-',
            qty_grouped: '.mpfreegifts-gift-input-qty-grouped',
            qty_grouped_update: '.mpfreegifts-gift-input-qty-grouped-update'
        },

        alertError: function (title, error) {
            alert({
                title: title,
                content: error
            });
        },

        getGiftAttributes: function (ruleId, giftName, options) {
            return {rule_id: ruleId, options: options, name: giftName};
        },

        prepareInput: function (gifts) {
            var element = '';

            _.each(gifts, function (attribute, giftId) {
                var ruleId = attribute.rule_id;

                element += '<input type="hidden" name="mpfreegifts[' + ruleId + '][' + giftId + '][qty]" value="1">';
                if (_.has(attribute, 'options') && attribute.options !== "") {
                    element += '<input type="hidden" name="mpfreegifts[' + ruleId + '][' + giftId + ']';
                    element += '[options]" value="' + attribute.options + '">';
                }
            });

            return element;
        },

        updateSelectedGifts: function (selectedGifts) {
            var selectedLi        = '',
                selectedContainer = $('#mpfreegifts-selected-container'),
                selectedUl        = $('#mpfreegifts-selected-ul');

            if (_.isEmpty(selectedGifts)) {
                selectedContainer.hide();
            } else {
                _.each(selectedGifts, function (selectedGift) {
                    selectedLi += '<li>' + selectedGift.name + '</li>';
                });

                selectedUl.html(selectedLi);
                selectedContainer.show();
            }
        },

        toggleGiftModal: function (element, title) {
            var options = {
                'type': 'popup',
                'title': title,
                'responsive': true,
                'innerScroll': true,
                'modalClass': 'mpfreegifts_modal',
                'buttons': []
            };

            modal(options, $(element));
            $(element).modal('openModal');
        },

        closeAndReload: function (element) {
            $(element).modal('closeModal');
            location.reload();
        },

        getItemLeft: function (rules) {
            var itemLeft = _.reduce(rules, function (memo, rule) {
                return memo + rule.max_gift - rule.total_added;
            }, 0);

            return Math.max(0, itemLeft);
        },

        createQty: function (obj, giftId, ruleId) {
            var gift = obj.rule_list.find(x => x.rule_id === ruleId)['gifts'].find(x => x.id === giftId);

            $(this.option.qty + giftId).val(gift.qty_added);

            $(this.option.qty + giftId).on('change', function () {
                var qty = $(this).val();

                if (parseInt(qty) <= 0) {
                    $(this).val(1);
                }

                if (!gift.added) {
                    if (qty > obj.calculateItemLeft()) {
                        $(this).val(obj.calculateItemLeft());
                    }
                } else {
                    if (!gift.qty) {
                        gift.qty = gift.qty_added;
                    }
                    if (gift.qty_added && qty > gift.qty) {
                        $(this).val(gift.qty_added);
                    }
                }
            });

            $(this.option.qty_grouped).on('change', function () {
                var totalGifts = 0,
                    inputs     = $(this).parents('table#super-product-table').find('input.mpfreegifts-gift-input-qty-grouped'),
                    remainingQty;

                $.each(inputs, function () {
                    var qty = parseInt($(this).val());

                    if (!$(this).val() || $(this).val() < 0) {
                        $(this).val(0);
                        qty = 0
                    }

                    totalGifts += qty;
                });

                if (totalGifts > obj.calculateItemLeft()) {
                    remainingQty = obj.calculateItemLeft() - (totalGifts - $(this).val());
                    if (remainingQty < 0) {
                        remainingQty = 0;
                    }
                    $(this).val(remainingQty);
                }
            });

            $(this.option.qty_grouped_update).on('change', function () {
                var max = $(this).attr('max');

                if ($(this).val() > max || $(this).val() < 0) {
                    $(this).val(max);
                }
            });
        },

        createOptionBtn: function (obj, giftId, cart) {
            var self = this;

            $(this.option.add + giftId).on('click', function () {
                if ($(self.option.form + giftId).valid()) {
                    if (cart) {
                        obj.addGiftOption(giftId, obj.item_id);
                    } else {
                        obj.selectOption(obj, $(self.option.form + giftId), giftId);
                    }
                }
            });

            $(this.option.remove + giftId).on('click', function () {
                if ($(self.option.form + giftId).valid()) {
                    var element     = '#mpfreegifts-modal-item-' + obj.item_id,
                        url         = obj.remove_url,
                        optionModal = self.option.modal + giftId,
                        ruleId      = obj.rule_list[0].rule_id,
                        formData    = $(self.option.form + giftId).serializeArray(),
                        data        = {
                            rule_id: ruleId,
                            gift_id: giftId,
                            qty: 0,
                            is_remove_grouped: true,
                            is_cart: true
                        };

                    $.each(formData, function (index, value) {
                        data[value['name']] = value['value'];
                    });

                    self.giftAction(obj, url, optionModal, data, element);
                }
            });
        },

        giftAction: function (obj, url, optionModal, data, element) {
            var self = this;

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                dataType: 'json',
                showLoader: true,
                success: function (response) {
                    if (response.error) {
                        self.alertError($t('Error'), response.message);
                    }
                    if (response.option) {
                        $(self.option.wrapper).append(response.html);
                        $(self.option.wrapper).trigger('contentUpdated');
                        obj.initAddOptionBtn(data.gift_id, data.rule_id);
                        self.toggleGiftModal(optionModal, self.option.title);
                    }
                    if (element !== '' && response.success) {
                        self.closeAndReload(element);
                        customerData.invalidate(['cart']);
                        customerData.reload(['cart'], true);
                    }
                },
                error: function (error) {
                    self.alertError($t('Request Error'), error.status + ' ' + error.statusText);
                }
            });
        }
    };
});
