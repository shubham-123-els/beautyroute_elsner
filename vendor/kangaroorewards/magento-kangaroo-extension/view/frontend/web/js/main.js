define(
    [
        "jquery"
    ],
    function ($) {
        "use strict";
        return function (config) {
            KangarooApps = KangarooApps || {};
            var productList = [];
            var productDetails = [];
            KangarooApps.Loyalties = KangarooApps.Loyalties || {};
            KangarooApps.Loyalties.version = config.plugin_version;
            KangarooApps.Loyalties.my_account_login = config.baseStoreUrl + "customer/account/login/";
            KangarooApps.Loyalties.my_account_register = config.baseStoreUrl + "customer/account/create/";
            KangarooApps.Loyalties.my_account_page = config.baseStoreUrl + "customer/account/login/";
            KangarooApps.Loyalties.shop = {
                domain: config.baseStoreUrl,
                storeId: config.storeId
            };

            if (config.isProductPage) {
                var product = config.currentProduct;
                if(product != null) {
                    product['product'].forEach(
                        function (item) {

                            var productD = {
                                code: item["code"],
                                parentId: item['parentId'],
                                productId: item["productId"],
                                price: item["price"],
                                title: item["title"],
                                categories: item["categories"]
                            };
                            productDetails.push(productD);
                        }
                    );

                    KangarooApps.Loyalties.product = {
                        id: product['code'],
                        product: productDetails
                    }
                }
            }

            if (config.isCartExist) {
                var cart = config.cart;

                cart['cartItems'].forEach(
                    function (item) {
                        var productItem = {
                            code: item["code"],
                            parentId: item["parentId"],
                            variant_id: item["productId"],
                            price: item["price"],
                            quantity: item["quantity"],
                            categories: item["categories"]
                        };
                        productList.push(productItem);
                    }
                );

                if (productList !== undefined && productList.length > 0) {
                    KangarooApps.Loyalties.checkout = {
                        total: cart['subtotal'],
                        cart: cart['id'],
                        productList: productList,
                        discount: cart['discount'],
                        subtotal: cart['subtotal']
                    }
                }
            }

            var localData = localStorage.getItem('mage-cache-storage');
            if (localData !== undefined) {
                localData = JSON.parse(localData);
                if (localData != null && localData['kangaroo-customer'] !== undefined && localData['kangaroo-customer']['customer']['id'] != null) {
                    KangarooApps.Loyalties.customer = {
                        id: localData['kangaroo-customer']['customer']['id'],
                        email: localData['kangaroo-customer']['customer']['email']
                    }
                }
            }


            $(document).on(
                'ajaxComplete', function () {
                    if (KangarooApps.Loyalties.customer === undefined) {
                        localData = localStorage.getItem('mage-cache-storage');
                        if (localData !== undefined) {
                            localData = JSON.parse(localData);
                            if (localData !== undefined) {
                                if (localData != null && localData['kangaroo-customer'] !== undefined && localData['kangaroo-customer']['customer']['id'] != null) {
                                    KangarooApps.Loyalties.customer = {
                                        id: localData['kangaroo-customer']['customer']['id'],
                                        email: localData['kangaroo-customer']['customer']['email']
                                    };
                                    $.getScript(config.kangarooAPIUrl + "/magento/initJS?rc=1&plugin_version=" + config.plugin_version + "&domain="+encodeURI(config.baseStoreUrl));
                                }
                            }
                        }
                    }
                }
            );
            $.getScript(config.kangarooAPIUrl + "/magento/initJS?rc=1&plugin_version=" + config.plugin_version + "&domain="+encodeURI(config.baseStoreUrl));

        }
    }
);
