define([
    'jquery',
    'mage/utils/wrapper',
    '../js/view/processShippingMethod'
], function ($, wrapper, processShippingMethod) {
    'use strict';

    return function (selectShippingMethodAction) {
        return wrapper.wrap(selectShippingMethodAction, function (originalAction, shippingMethod) {
            processShippingMethod.processShippingMethod(shippingMethod);
            return originalAction(shippingMethod);
        });
    };
});
