function loadmore() {
    "use strict";
    var o = jQuery(".woosale .products li").size(),
        e = jQuery(".woonew .products li").size(),
        s = jQuery(".woobest .products li").size(),
        l = jQuery(".woofeature .products li").size(),
        u = parseInt(php_var.freshcodes_loadmore),
        i = 12,
        t = 12,
        r = 12,
        c = 12;
    jQuery(".woosale .products li:lt(" + i + ")").css("display", "inline-block"), jQuery(".woonew .products li:lt(" + t + ")").css("display", "inline-block"), jQuery(".woobest .products li:lt(" + r + ")").css("display", "inline-block"), jQuery(".woofeature .products li:lt(" + c + ")").css("display", "inline-block"), jQuery(".woosale .woocount").click(function() {
        i == o ? (jQuery(".woosale .woocount").hide(), jQuery(".woosale .freshcodes-message").show()) : (i = i + u <= o ? i + u : o, jQuery(".woosale .products li:lt(" + i + ")").css("display", "inline-block"))
    }), jQuery(".woonew .woocount").click(function() {
        t == e ? (jQuery(".woonew .woocount").hide(), jQuery(".woonew .freshcodes-message").show()) : (t = t + u <= e ? t + u : e, jQuery(".woonew .products li:lt(" + t + ")").css("display", "inline-block"))
    }), jQuery(".woobest .woocount").click(function() {
        r == s ? (jQuery(".woobest .woocount").hide(), jQuery(".woobest .freshcodes-message").show()) : (r = r + u <= s ? r + u : s, jQuery(".woobest .products li:lt(" + r + ")").css("display", "inline-block"))
    }), jQuery(".woofeature .woocount").click(function() {
        c == l ? (jQuery(".woofeature .woocount").hide(), jQuery(".woofeature .freshcodes-message").show()) : (c = c + u <= l ? c + u : l, jQuery(".woofeature .products li:lt(" + c + ")").css("display", "inline-block"))
    })
}
jQuery(document).ready(function() {
    "use strict";
    loadmore()
}), jQuery(window).resize(function() {
    "use strict";
    loadmore()
});