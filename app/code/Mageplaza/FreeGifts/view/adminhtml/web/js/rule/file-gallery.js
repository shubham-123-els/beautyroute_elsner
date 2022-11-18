/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license sliderConfig is
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
    'Magento_Ui/js/modal/modal',
    'mage/template',
    'text!Mageplaza_FreeGifts/template/popup/banner-detail.html',
    "mage/translate",
    'jquery/ui'
], function ($, modal, mageTemplate, galleryPopupTemplate, $t) {
    "use strict";

    return {
        sortFileGallery: function (galleryContainer) {
            /** draggable */
            galleryContainer.sortable({
                update: function (e, ui) {
                    var el       = this,
                        position = 0;

                    $(el).find('.image.item').each(function () {
                        $(this).find('input.banner-position').val(position);
                        position++;
                    });
                }
            });
        },

        /** remove file function */
        removeFile: function (removeSelector) {
            removeSelector.on('click', function (e) {
                var fileContainer = $(this).parent().parent().parent().parent();

                e.preventDefault();
                e.stopPropagation();
                fileContainer.find('input.is-removed').val(1);
                fileContainer.hide();
            });
        },

        /** init file detail popup function */
        initFileDetailPopup: function (selector, config) {
            selector.on('click', function () {
                var self            = this,
                    modalHtml       = mageTemplate(
                        galleryPopupTemplate,
                        {
                            data: {
                                fileId: $(this).find('input.banner-id').val(),
                                fileAlt: $(this).find('input.banner-alt').val(),
                                fileSize: $(this).find('.item-size span[data-role="image-size"]').text(),
                                fileResolution: $(this).find('input.banner-resolution').val(),
                                iconUrl: $(this).find('.product-image-wrapper img.product-image').attr('src')
                            },
                            options: config.options,
                            label: {
                                fileAlt: $t('Alt Text'),
                                fileSize: $t('Image Size'),
                                fileResolution: $t('Image Resolution'),
                                fileTooltip: $t('Tooltip')
                            }
                        }),
                    attachmentPopup = $('<div/>').html(modalHtml),
                    imageContent    = $("#mp_free_gifts_content"),
                    bannerAltElement;

                attachmentPopup.modal({
                    type: 'popup',
                    title: $t('Banner Details'),
                    innerScroll: true,
                    responsive: true,
                    buttons: []
                });
                attachmentPopup.trigger('openModal');

                /** mp_product_attachment custom js */
                bannerAltElement = $("input[name='rule[banner]["
                    + $(this).find('input.banner-id').val() + "][alt]']");

                /** Field file Label */
                bannerAltElement.on('change', function () {
                    var attrName   = $(this).attr('name'),
                        inputLabel = imageContent.find("input[name='" + attrName + "']");

                    inputLabel.parent().find(".item-title").text($(this).val());
                    inputLabel.val($(this).val());
                });
                bannerAltElement.val(
                    imageContent.find("input[name='" + bannerAltElement.attr('name') + "']").val()
                );

                $(this).find('input.banner-tooltip').each(function () {
                    var code          = $(this).attr('code'),
                        bannerTooltip = $("input[name='rule[banner]["
                            + $(self).find('input.banner-id').val() + "][tooltip][" + code + "]']");

                    bannerTooltip.on('change', function () {
                        var attrName   = $(this).attr('name'),
                            inputLabel = imageContent.find("input[name='" + attrName + "']");

                        inputLabel.val($(this).val());
                    });

                    bannerTooltip.val($(this).val());
                })
            });
        }
    };
});
