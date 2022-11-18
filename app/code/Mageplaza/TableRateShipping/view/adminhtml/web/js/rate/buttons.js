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
    'Mageplaza_TableRateShipping/js/view/import-grid',
    'Mageplaza_TableRateShipping/js/view/csv-form',
    'Mageplaza_TableRateShipping/js/view/rate-form'
], function ($, importGrid, csvForm, rateForm) {
    'use strict';

    $.widget('mptablerate.rate', {
        options: {
            rateFormUrl: '',
            rateSaveUrl: '',
            csvForm: '',
            csvImportUrl: '',
            gridImportUrl: '',
            gridProcessUrl: ''
        },

        _create: function () {
            $('#mptablerate_rate_grid_massaction-select').addClass('ignore-validate');

            $('body').on('contentUpdated', '#mptablerate_rate_grid', function () {
                $('#mptablerate_rate_grid_massaction-select').addClass('ignore-validate');
            });

            importGrid.create(this.options);
            csvForm.create(this.options);
            rateForm.create(this.options);
        }
    });

    return $.mptablerate.rate;
});

