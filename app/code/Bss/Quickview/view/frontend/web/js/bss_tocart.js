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
 * @category   BSS
 * @package    Bss_Quickview
 * @author     Extension Team
 * @copyright  Copyright (c) 2019-2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
define(
    [
        'jquery',
        'Bss_Quickview/js/bss_tocart',
        'mage/mage',
        'Magento_Catalog/product/view/validation',
        'Magento_Catalog/js/catalog-add-to-cart'
    ],
    function ($) {
        'use strict';

        $.widget(
            'bss.bss_tocart',
            {
                _create: function () {
                    'use strict';
                    $('#product_addtocart_form').mage(
                        'validation',
                        {
                            radioCheckboxClosest: '.nested',
                            submitHandler: function (form) {
                                var widget = $(form).catalogAddToCart(
                                    {
                                        bindSubmit: false
                                    }
                                );
                                widget.catalogAddToCart('submitForm', $(form));
                                return false;
                            }
                        }
                    );
                    $('#ajax-goto a').click(
                        function (e) {
                            e.preventDefault();
                            window.top.location.href = $(this).attr('href');

                            return false;
                        }
                    );
                }
            }
        );
        return $.bss.bss_tocart;
    }
);
