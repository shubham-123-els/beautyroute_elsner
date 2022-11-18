/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */
define([
    'Magento_Ui/js/form/element/abstract',
    'mageUtils',
], function (Abstract, utils) {
    'use strict';

    return Abstract.extend({
        defaults: {
            elementTmpl: 'Magefan_ProductGridInline/form/element/quantity_per_source_input.html'
        },

        /**
         * Converts values like 'null' or 'undefined' to an empty string.
         *
         * @param {*} value - Value to be processed.
         * @returns {*}
         */
        normalizeData: function (value) {
            if (utils.isEmpty(value)) {
                return '';
            } else {
                if (Array.isArray(value)) {
                    var data = {};
                    for (var i = 0; i < value.length; i++) {
                        data[value[i].source_code] = value[i];
                    }
                    value =  JSON.stringify(data);
                }

                return value;
            }
        },

        /**
         * @param obj
         * @param event
         */
        updateQty: function (obj, event) {
            var element = document.getElementById(obj.pid);
            try {
                var data = JSON.parse(element.value);
            } catch (e) {
                data = {};
            }
            data[obj.source_code] = obj;
            element.value = JSON.stringify(data);

            var change = new Event('change');
            element.dispatchEvent(change);
        },

        /**
         * @returns {Array} Result array
         */
        getSourceItemsData: function () {
            var value = this.getInitialValue();
            var result;
            var i;

            try {
                value = JSON.parse(value);
                result = [];

                i = 0;
                for (var j in value) {
                    result[i] = value[j];
                    i++;
                }
            } catch (e) {
                result = value;
            }

            if (result && result.length) {
                for (i = 0; i < result.length; i++) {
                    result[i].pid = this.uid;
                    result[i].uid = this.uid + i;
                    result[i].inputName = this.inputName + i;
                    result[i].noticeId = this.noticeId + i;
                }
            }

            return result;
        }
    });
});

