define([
    'Magento_Checkout/js/model/quote',
    'Magento_Checkout/js/model/cart/totals-processor/default'
], function (quote, totalsDefaultProvider) {
    'use strict';

    var mixin = {
        initialize: function () {
            quote.shippingMethod.subscribe(this.estimateTotalsShipping);

            return this._super();
        },

        estimateTotalsShipping: function () {
            totalsDefaultProvider.estimateTotals(quote.shippingAddress());
        },

        getValue: function () {
            var price;

            if (!this.isCalculated()) {
                return this.notCalculatedMessage;
            }
            price = quote.shippingMethod().amount;

            return this.getFormattedPrice(price);
        }
    };

    return function (target) {
        return target.extend(mixin);
    };
});
