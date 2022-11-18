define([
    'jquery',
    'domReady',
], function ($,dom) {
    'use strict';
    return function(config) {
    	var wishcount = config.wishlistCount;
        var customerIsLoggedIn = config.isCustomerLoggedIn;

        if(customerIsLoggedIn)
        {
            $(".cart_wishlst").addClass('custom-after-lgn');
            if(wishcount)
            {
                $(".header .links").find('.wishlist').addClass('wishlist-after-lgn');
            }
        }

        $(".customer-name").click(function(){
            $(".customer-account-links-togel").slideToggle("slow");
        });

        $(document).scroll(function() {
            var $window = $(window);
            var windowsize = $window.width();
            var height = $(document).scrollTop();
            if(height  > 145 && windowsize >= 768) {
                $('.nav-sections').addClass('fixed-menu');
                $('.page-header').find('.header').addClass('sticky-content');
            }else{
                $('.nav-sections').removeClass('fixed-menu');
                $('.page-header').find('.header').removeClass('sticky-content');
            }
        });
    }
});