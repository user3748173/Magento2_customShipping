define([
    'uiComponent'
], function (Component) {
    'use strict';
    var show_hide_custom_blockConfig = window.checkoutConfig.show_hide_custom_block;
    return Component.extend({
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp"
            ];
            jQuery(element).autocomplete({
                source: availableTags,
                minLength: 2
            });,
        canVisibleBlock: show_hide_custom_blockConfig
    });
});
