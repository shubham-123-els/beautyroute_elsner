/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */
define([
    'Magento_Ui/js/form/element/multiselect',
    'mageUtils',
    'Magefan_ProductGridInline/js/chosen.jquery.min',
    'jquery',
    'domReady!'
], function (Multiselect, utils, chosen, $) {
    'use strict';

    return Multiselect.extend({

        afterRender: function () {
            this.initChosen();
        },
        /**
         * @inheritdoc
         */
        normalizeData: function (value) {

            if (utils.isEmpty(value)) {
                value = [];
            }
            var items = _.isString(value) ? value.split(',') : value;
            for (var i=0;i<items.length; i++) {
                items[i] = items[i].trim().split('.')[0];
            }

            return items;
        },
        /**
         * Init "chosen" library
         */
        initChosen: function () {
            var select = document.getElementById(this.uid);
            var $select = $(select);

            var enableSearch = "readonly" !== select.getAttribute('readonly');

            $select.chosen({
                "display_selected_options" : true,
                "display_disabled_options": true,
                "hide_results_on_select": true,
                "group_search": enableSearch
            });
        },
    });
});
