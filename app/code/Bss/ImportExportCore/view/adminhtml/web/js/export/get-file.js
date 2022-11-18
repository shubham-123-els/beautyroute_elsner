/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_ImportExportCore
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
define([
    'jquery',
    'prototype'
], function ($) {
    "use strict";
    $.widget('bss.getFile', {

        _create: function () {
            $('entity').selectedIndex = 0; // forced resetting entity selector after page refresh
            $(document).ready(function() {
                $(document).on('click', '#bss-export-btn', function () {
                    var isFormValid = $('#export_filter_form').validation() && $('#export_filter_form').validation("isValid");
                    if (isFormValid) {
                        getFile();
                    }
                });
            });
        }
    });

    return $.bss.getFile;
});