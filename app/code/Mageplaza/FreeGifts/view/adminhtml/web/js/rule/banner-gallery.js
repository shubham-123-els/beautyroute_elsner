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
    'Magento_Ui/js/modal/alert',
    "mage/translate",
    'mp_fgFileGallery',
    'jquery/ui',
    "jquery/validate",
    'jquery/file-uploader'
], function ($, modal, mageTemplate, galleryPopupTemplate, alert, $t, mp_fgFileGallery) {
    'use strict';
    return function (config) {
        /** ajax upload file function */
        function uploadProcessor (formData, files, counter, limit) {
            var _URL           = window.URL || window.webkitURL,
                currentDate    = new Date(),
                imgLoader      = $('.mp_image_loader'),
                imgWrapper     = $('#mp-product-image-wrapper'),
                imgWrapperText = $('#mp-product-image-wrapper p'),
                file, img;

            if (counter < limit) {
                file = files[counter];

                imgLoader.show();
                imgWrapper.addClass('no-before');
                imgWrapperText.hide();
                if (formData) {
                    formData.delete('image');
                    formData.delete('value_id');
                    formData.append('image', file);
                    formData.append('value_id', currentDate.getTime());
                    formData.append('rule_id', config.rule_id);

                    $.ajax({
                        type: "POST",
                        url: config.ajaxUrl,
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            var position = 0;

                            if (response.status) {
                                var item = currentDate.getTime();

                                $('.mp_image_loader').hide();
                                $('#mp-product-image-wrapper').removeClass('no-before');
                                $('#mp-product-image-wrapper p').show();
                                $('#mp-image-placeholder').before($(response.faq_list).html());
                                mp_fgFileGallery.initFileDetailPopup(
                                    $('[data-role="mp_fg_file_new_' + item + '"]'),
                                    config
                                );
                                mp_fgFileGallery.removeFile($('.action-remove'));
                                img        = new Image();
                                img.onload = function () {
                                    $('[data-role="mp_file_new_' + item + '"]').find('[data-role="image-dimens"]').text(this.width + 'x' + this.height + ' px');
                                    $('[data-role="mp_file_new_' + item + '"]').find('input.banner-resolution').val(this.width + 'x' + this.height + ' px');
                                };
                                img.src    = _URL.createObjectURL(file);
                                counter++;
                                uploadProcessor(formData, files, counter, limit);
                            } else {
                                $('.mp_image_loader').hide();
                                $('#mp-product-image-wrapper').removeClass('no-before');
                                $('#mp-product-image-wrapper p').show();
                                alert({
                                    title: $t('Attention'),
                                    content: '<div data-role="messages" id="messages">' +
                                        '<div class="messages"><div class="message message-error error">' +
                                        '<div data-ui-id="messages-message-error"><strong>' + file.name + '</strong>'
                                        + $t(' was not uploaded.') + '<br>' + response.errorSize
                                        + '</div></div></div></div>'
                                });
                            }

                            $('.image.item').each(function () {
                                $(this).find('input.banner-position').val(position);
                                position++;
                            });
                        }
                    });
                }
            }
        }

        function ajaxFileUpload (uploadSelector) {
            /** file upload function */
            var formData = new FormData();

            uploadSelector.change(function () {
                var files = this.files,
                    len   = files.length;

                uploadProcessor(formData, files, 0, len);
            }).click(function () {
                $(this).val('');
            });
        }

        mp_fgFileGallery.sortFileGallery($(".mp-ui-sortable"));
        ajaxFileUpload($('#fileupload'));
        mp_fgFileGallery.initFileDetailPopup($('[data-role="mp_fg_file"]'), config);
        mp_fgFileGallery.removeFile($('.action-remove'));
    };
});
