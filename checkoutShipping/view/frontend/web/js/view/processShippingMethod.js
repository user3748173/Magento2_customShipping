define([
    'jquery'
], function ($) {
    'use strict';
    return {
        processShippingMethod: function (shippingMethod) {
            if (shippingMethod !== null) {
                var value = shippingMethod.carrier_code;
                var divId = "carrier_" + value;
                if (!jQuery(divId).length && !jQuery.active)  {
                    ajaxCall(value);
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
        var param = 'ajax=' + shippingMethod;
        jQuery.ajax({
            type: 'post',
            url: '/vendor_shipping/index/htmlcreator',
            data: param,
            dataType: 'json'
        }).done(function (msg) {
            var variable = msg;
            htmlOut(shippingMethod, variable);
        });
    };
    function htmlOut(shippingMethod, html) {        
        jQuery( ".carrier_settings" ).remove();
        jQuery('#onepage-checkout-shipping-method-additional-load').before("<div id='carrier_"+shippingMethod+"' class='carrier_settings'><div class='step-title' data-bind='i18n: 'Shipping Carrier'' data-role='title'>Shipping Carrier</div>"+html+"</br></br></div>");
    }
});
