define([
    'jquery',
    'domReady',
], function ($,dom) {
    'use strict';
    return function(config) {
    	var newCatUrl = config.newCatUrl;
        var trendCatUrl = config.trendCatUrl;

        $(document).ready(function(){
            $('.treding-product-tab').addClass('active');
            $('.new-product-tab').click(function(){
                $("a.trnd-new-url").attr("href", newCatUrl);
                $('.new-product-container').show();
                $('.trend-product-container').hide();
                $('.treding-product-tab').removeClass('active');
                $('.new-product-tab').addClass('active');
            });
            $('.treding-product-tab').click(function(){
                $("a.trnd-new-url").attr("href", trendCatUrl);
                $('.trend-product-container').show();
                $('.new-product-container').hide();
                $('.new-product-tab').removeClass('active');
                $('.treding-product-tab').addClass('active');
            });
        });
    }
});