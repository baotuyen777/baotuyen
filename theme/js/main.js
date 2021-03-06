jQuery(document).ready(function () {
    jQuery("#main-nav .menu li.menu-item-has-children").hover(function () {
        jQuery(this).children(".sub-menu").stop().show(300)
    }, function () {
        jQuery(this).children(".sub-menu").stop().hide(300)
    }), jQuery("#mobile-menu-toggle").click(function () {
        var e = jQuery("#mobile-menu-wrapper");
        "none" == e.css("display") ? e.stop().slideDown(300) : e.stop().slideUp(300)
    }), jQuery("<i class='toggle-sub-menu fa fa-plus'></i>").insertAfter("#mobile-menu-wrapper .menu > li.menu-item-has-children > a"), jQuery("#mobile-menu-wrapper .menu > li.menu-item-has-children > .toggle-sub-menu").click(function () {
        var e = jQuery(this).next(".sub-menu");
        "none" == e.css("display") ? e.stop().slideDown(300) : e.stop().slideUp(300)
    }), jQuery("#main-featured .wrapper").hover(function () {
        jQuery(this).children("img").stop().slideUp(300)
    }, function () {
        jQuery(this).children("img").stop().slideDown(300)
    }), jQuery("#project-carousel").owlCarousel({
        items: 3,
        responsiveClass: !0,
        responsive: {0: {items: 1}, 767: {items: 2}, 991: {items: 3}}
    }), jQuery("#project-control-prev").click(function () {
        jQuery("#project-carousel").find(".owl-prev").trigger("click")
    }), jQuery("#project-control-next").click(function () {
        jQuery("#project-carousel").find(".owl-next").trigger("click")
    }), jQuery("#theme-carousel").owlCarousel({
        items: 1
    }), jQuery("#theme-control-prev").click(function () {
        jQuery("#theme-carousel").find(".owl-prev").trigger("click")
    }), jQuery("#theme-control-next").click(function () {
        jQuery("#theme-carousel").find(".owl-next").trigger("click")
    }), jQuery("#customers-say-carousel").owlCarousel({
        items: 2,
        responsive: {0: {items: 1}, 767: {items: 2}}
    }), jQuery(window).on("scroll", function () {
        var e = jQuery(window).scrollTop();
        e > 200 ? (jQuery("#up-to-top").stop().fadeIn(300), jQuery("#main-nav").addClass("fixed-top")) : (jQuery("#up-to-top").stop().fadeOut(300), jQuery("#main-nav").removeClass("fixed-top"))
    }), jQuery("#up-to-top").click(function () {
        jQuery("html, body").animate({scrollTop: 0}, 700)
    }), jQuery('[data-toggle="tooltip"]').tooltip()
    jQuery("#pc-demo").click(function(){jQuery("#demo-main").attr("class", ""),jQuery("#responsive-demo>span").removeClass("active"),jQuery(this).addClass("active")})
    jQuery("#tablet-demo").click(function(){jQuery("#demo-main").attr("class", "in-tablet"),jQuery("#responsive-demo>span").removeClass("active"),jQuery(this).addClass("active")})
    jQuery("#mobile-demo").click(function(){jQuery("#demo-main").attr("class", "in-mobile"),jQuery("#responsive-demo>span").removeClass("active"),jQuery(this).addClass("active")})
    jQuery(".wpcf7-form .wpcf7-list-item .wpcf7-list-item-label").click(function() {jQuery(this).prev("input[type='checkbox'").trigger("click")})
});