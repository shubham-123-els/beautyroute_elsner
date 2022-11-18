var config = {
    map: {
        '*': {
            'Magento_Checkout/js/model/checkout-data-resolver': 'Elsnertech_Customization/js/model/checkout-data-resolver',
            'Magento_Tax/js/view/checkout/summary/grand-total':'Elsnertech_Customization/js/view/checkout/summary/grand-total'
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/summary/shipping': {
                'Elsnertech_Customization/js/view/summary/shipping-mixin': true
            }
        }
    }
};