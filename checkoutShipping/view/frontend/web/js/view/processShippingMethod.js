define(['jquery', 'Magento_Search/form-mini'], function ($) {
    'use strict';
    return {
        processShippingMethod: function (shippingMethod) {
            if (shippingMethod !== null) {
                var value = shippingMethod.carrier_code;
                var divId = "carrier_" + value;
                if (!jQuery(divId).length && !jQuery.active) {
                    ajaxCall(value);
                }
            } else {
                return true;
            }
        }
    }
    function ajaxCall(shippingMethod)
    {
        var param = 'ajax=' + shippingMethod;
        jQuery.ajax({
            type: 'post',
            url: '/vendor_checkoutshipping/index/htmlcreator',
            data: param,
            dataType: 'json'
        }).done(function (msg) {
            var variable = msg;
            htmlOut(shippingMethod, variable);
        });
    }
    ;
    function htmlOut(shippingMethod, html) {
        if (html == "array") {
            $(".postOffice").not(".red").hide();
            $(".red").show();
        } else if (html == "input") {
            $(".postOffice").not(".green").hide();
            $(".green").show();
        } else {
            $(".postOffice").hide();
        }
        console.log(shippingMethod);
        console.log(html);
    }
});
