define([
    'underscore',
    'mage/utils/wrapper',
    'Magento_Checkout/js/checkout-data',
    'Magento_Checkout/js/model/payment-service',
    'Magento_Checkout/js/action/select-shipping-method'
],function (_, wrapper, checkoutData, paymentService, selectShippingMethodAction) {
    'use strict';

    return function (checkoutDataResolver) {
        var config = window.checkoutConfig;

        /**
         * Selects a shipping method if a shipping method hasn't already been selected and,
         * the configured autoselect or fallback shipping method exists.
         */
        var resolveShippingRates = wrapper.wrap(
            checkoutDataResolver.resolveShippingRates,
            function (originalResolveShippingRates, ratesData) {
                if (!checkoutData.getSelectedShippingRate() && _.size(ratesData) >= 1) {
                    var method = this.getMethod('shipping', ratesData);
                    if (!_.isUndefined(method)) {
                        selectShippingMethodAction(method);
                    }
                }

                return originalResolveShippingRates(ratesData);
            }
        );

        return _.extend(checkoutDataResolver, {
            resolveShippingRates: resolveShippingRates,

            /**
             * Return a selectable method
             *
             * @param  {String} type
             * @param  {Array} availableMethods
             * @return {Object|undefined}
             */
            getMethod: function (type, availableMethods) {
                var autoselectMethod = this.getMethodBySelectionType(type, 'autoselect'),
                    self = this;
                var matchedMethod;
                if (!_.isUndefined(autoselectMethod)) {
                    matchedMethod = availableMethods.find(function (method) {
                        return self.getMethodCode(method, type) === autoselectMethod;
                    });
                }

                if (!matchedMethod) {
                    var fallbackMethod = this.getMethodBySelectionType(type, 'fallback');
                    if (fallbackMethod === 'first') {
                        matchedMethod = availableMethods[0];
                    } else if (fallbackMethod === 'last') {
                        matchedMethod = availableMethods[availableMethods.length - 1];
                    } else if (fallbackMethod === 'lowest_price') {
                        matchedMethod = _.min(availableMethods, function (method) {
                            return method.amount;
                        });
                    }
                }

                return matchedMethod;
            },

            /**
             * Get auto-select method by type
             *
             * @param  {String} type
             * @return {String}
             */
            getMethodBySelectionType: function (methodType, selectionType) {
                if (!_.isUndefined(config.hsDefaultShippingPayment)
                    && !_.isUndefined(config.hsDefaultShippingPayment[methodType])
                ) {
                    return config.hsDefaultShippingPayment[methodType][selectionType];
                }
            },
            
            /**
             * Get method code
             *
             * @param  {String} type
             * @return {String}
             */
            getMethodCode: function (method, type) {
                return type === 'shipping' ? method.carrier_code + '_' + method.method_code : method.method;
            }
        });
    };
});