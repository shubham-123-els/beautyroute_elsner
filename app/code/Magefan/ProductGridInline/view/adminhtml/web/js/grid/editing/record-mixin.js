/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

define(function () {
    'use strict';

    return function (targetModule) {
        return targetModule.extend({
            defaults: {
                templates: {
                    fields: {
                        multiselect: {
                            component: 'Magento_Ui/js/form/element/multiselect',
                            template: 'ui/form/element/multiselect',
                            options: '${ JSON.stringify($.$data.column.options) }'
                        },
                        quantity_per_source_input: {
                            component: 'Magefan_ProductGridInline/js/form/element/quantity_per_source_input',
                            template: 'Magefan_ProductGridInline/form/element/quantity_per_source_input'
                        },
                        category_inline_input: {
                            component: 'Magefan_ProductGridInline/js/form/element/category_inline_input',
                            template: 'Magefan_ProductGridInline/form/element/category_inline_input',
                            options: '${ JSON.stringify($.$data.column.options) }'
                        }
                    }
                }
            }
        });
    };
});
