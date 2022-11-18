/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category  BSS
 * @package   Bss_Quickview
 * @author    Extension Team
 * @copyright Copyright (c) 2017-2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license   http://bsscommerce.com/Bss-Commerce-License.txt
 */
define(
    [
        "jquery",
    ],
    function ($) {
        $(".product-addto-links .towishlist").hover(
            function (e) {
               var dataPost=$(this).attr("data-post");
                var urlWishList="wishlist\\/index\\/add";
                var urlBssWistList="bss_quickview\\/wishlist\\/add";
                dataPost=dataPost.replace(urlWishList,urlBssWistList);
                urlWishList="wishlist/index/add";
                urlBssWistList="bss_quickview/wishlist/add";
                dataPost=dataPost.replace(urlWishList,urlBssWistList);
                $(this).attr("data-post",dataPost);
            }
        );
    }
);
