<pre class="lang:default decode:true">define([
    'jquery',
    'Magento_Customer/js/customer-data'
], function ($, customerData) {
    'use strict';
    return function (Component) {
        return Component.extend({
            /**
             * @override
             */
            getCartParam: function (name) {
                var self = this;
                if (name === 'possible_onepage_checkout') {
                    $('#top-cart-btn-checkout').click(function (event) {
                        var customer = customerData.get('customer');
                        if (!customer().firstname) {
                            event.preventDefault();
                            $('.custom-popup').modal('openModal'); /* Here you can put your message or call your popup */
                            return false;
                        }
                    });
                }
                return this._super(name);
            },
        });
    }
});
</pre>