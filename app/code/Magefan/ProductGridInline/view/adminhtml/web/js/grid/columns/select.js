/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

/**
 * @api
 */
define([
    'underscore',
    'Magento_Ui/js/grid/columns/column'
], function (_, Column) {
    'use strict';

    return Column.extend({
        /**
         * Retrieves label associated with a provided value.
         *
         * @returns {String}
         */
        getLabel: function () {
            var options = this.options || [],
                values = this._super(),
                label = [];

            if (values === undefined) {

                values = 'dont_save';

                for (let i in options) {
                    if (options[i].value == 'dont_save') {
                        options.splice(i, 1);
                    }
                }

                options.unshift({value: "dont_save", label: "----", __disableTmpl: true});
            }

            if (_.isString(values)) {
                values = values.split(',');
            }

            if (!_.isArray(values)) {
                values = [values];
            }

            values = values.map(function (value) {
                return value + '';
            });

            options = this.flatOptions(options);

            options.forEach(function (item) {
                if (_.contains(values, item.value + '')) {
                    label.push(item.label);
                }
            });

            return label.join(', ');
        },

        /**
         * Transformation tree options structure to liner array.
         *
         * @param {Array} options
         * @returns {Array}
         */
        flatOptions: function (options) {
            var self = this;

            if (!_.isArray(options)) {
                options = _.values(options);
            }

            return options.reduce(function (opts, option) {
                if (_.isArray(option.value)) {
                    opts = opts.concat(self.flatOptions(option.value));
                } else {
                    opts.push(option);
                }

                return opts;
            }, []);
        }
    });
});
