define([
    'jquery'
], function ($) {
    'use strict';
    return {
        processShippingMethod: function (shippingMethod) {
            if (shippingMethod !== null) {
                var value = shippingMethod.carrier_code;
                var divId = "carrier_" + value;
                if (!jQuery(divId).length) {
                   var HtmlCode=ajaxCall(value);
                   if(HtmlCode){
                    console.log(HtmlCode);
                }
                } else {
                    return true;
                }
            }
            return true;
        }
    };
    function ajaxCall(shippingMethod)
    {
        console.log(shippingMethod);
        jQuery.ajax({
            type: 'post',
            url: 'https://127.0.0.1:8443/vendor_module/index/htmlcreator',
            data: {'selectedShippingMehtod': shippingMethod},
            dataType: 'json'
        }).done(function (msg) {
            var variable = "Data Saved: " + msg;
            return variable;
        });
    }
    ;
});