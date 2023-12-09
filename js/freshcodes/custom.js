// Freshcodes Custom Script Start
"use strict";
var e = jQuery.noConflict();
var t = jQuery.noConflict();
var n = jQuery.noConflict();
var m = jQuery.noConflict();
var $owl_carousel=jQuery.noConflict();
jQuery(document).ready(function() {
    jQuery(".mega-menu ul > li.shop-menu > ul").wrap(" <div class='shop-product-outer'> </div>");
    jQuery(".widget.widget_search .search-submit").wrap(" <div class='widget-search-btn'> </div>");
});
jQuery(document).ready(function() {
    jQuery("<div class='fc-category-grid-main'></div>").insertAfter(".woo_categories_grid .cat-outer-block:nth-child(1)");
    jQuery(".woo_categories_grid .cat-outer-block").addClass("fc-category-grid");
    jQuery(".woo_categories_grid .cat-outer-block:nth-child(1)").addClass("fc-category-first-child");
    jQuery(".fc-category-grid:nth-child(1) .cat-outer-block.fc-category-grid").removeClass('fc-category-first-child');
    jQuery(".woo_categories_grid .cat-outer-block:nth-child(1)").removeClass("fc-category-grid");
    jQuery(".woo_categories_grid .cat-outer-block.fc-category-grid").appendTo(".fc-category-grid-main");
    jQuery(".woo_categories_grid .cat-outer-block.fc-category-grid").wrap(" <div class='fc-category-grid'> </div>");
});
function Menuimage() { 
    "use strict";
    jQuery(".main-navigation").find(".fc-category-image").each(function(i){ 
        jQuery(this).appendTo(jQuery(this).parent().find("li.shop-menu-image .shop-product-outer > ul > li:last-child"));
    });
jQuery(".fc-category-image").insertAfter("li.shop-menu-image .shop-product-outer > ul > li:last-child");
}
jQuery(document).ready(function() {    "use strict";    Menuimage() });
jQuery(window).load(function() {    "use strict";    Menuimage();});
jQuery(window).resize(function() {    "use strict";    Menuimage();});
function Shopcatimage() { 
    "use strict";
    jQuery(".main-navigation").find(".fc-category-image").each(function(i){
        jQuery(this).appendTo(jQuery(this).parent().find("li.shop-menu-image .shop-product-outer > ul > li:last-child"));
    });
jQuery(".fc-category-image").insertAfter("li.shop-menu-image .shop-product-outer > ul > li:last-child");
}
jQuery(document).ready(function() {    "use strict";        Shopcatimage()  });
jQuery(window).load(function() {   "use strict";   Shopcatimage();});
jQuery(window).resize(function() { "use strict";  Shopcatimage();});
function isotopAutoSet() {
    n(function() {
        "use strict";
        var e = n("#portfolio_filter");
        t("#portfolio_filter").css("display", "block");
        t(".loading").css("display", "none");
        e.isotope({});
        var r = n("#portfolio_filter_options .option-set"),
            i = r.find("a");
        i.on("click", function() {
            var t = n(this);
            if (t.hasClass("selected")) {
                return false
            }
            var r = t.parents(".option-set");
            r.find(".selected").removeClass("selected");
            t.addClass("selected");
            var i = {},
                s = r.attr("data-option-key"),
                o = t.attr("data-option-value");
            o = o === "false" ? false : o;
            i[s] = o;
            if (s === "layoutMode" && typeof changeLayoutMode === "function") {
                changeLayoutMode(t, i)
            } else {
                e.isotope(i)
            }
            return false
        })
    })
}
jQuery(document).ready(function() {    "use strict";
    jQuery(".primary-sidebar .tagcloud,.widget_text .textwidget,.primary-sidebar .widget_shopping_cart_content,.primary-sidebar .widget_shopping_cart_content,.primary-sidebar .textwidget,footer .widget_shopping_cart_content").addClass("toggle-block");
    jQuery("footer .tagcloud, footer .widget_shopping_cart_content,footer .textwidget,.site-footer .widget_nav_menu .menu, .site-footer .contact_wrapper, .site-footer .follow-us").addClass("toggle-block");
    jQuery(".primary-sidebar .calendar_wrap, footer .calendar_wrap,.site-footer .gallery,.primary-sidebar .contact_wrapper,.primary-sidebar .payment-methods ul,.primary-sidebar .follow-us ul").addClass("toggle-block");
    jQuery(".primary-sidebar .widget select,footer .widget select").addClass("toggle-block");
    jQuery(".postform").addClass("toggle-block");
    jQuery(".primary-sidebar .price_slider_wrapper").addClass("toggle-block");
    jQuery(".tagcloud").addClass("toggle-block");
    jQuery(".primary-sidebar .widget ul, footer .widget ul,.primary-sidebar .menu-menu-container, footer .menu-menu-container").addClass("toggle-block");
    jQuery(".widget ul.product_list_widget,.widget .textwidget,.widgets-leftbanner .left-banner").addClass("toggle-block");
    jQuery(".product-categories ul").addClass("toggle-block");
    jQuery('.widget_nav_menu ul li').filter(function() {
        return jQuery(this).text() == '';
    }).remove();
    jQuery('.account-link').on("click", function() {
        jQuery(".account-link-wrapper").slideToggle("medium");
    });
								   
	if (jQuery(window).width() < 768) {
      jQuery(".freshcodes-header-link").appendTo(".topbar-link-wrapper #menu-fc-header-account-link");
    }
	jQuery(".count-down").appendTo(".woocommerce-product-gallery__image");
    jQuery('.topbar-link .account-label').on("click", function() {
        if (jQuery('.topbar-link-wrapper').parent().hasClass('toggled-on')) {
            jQuery('.topbar-link-wrapper').parent().removeClass('toggled-on');
            jQuery('.topbar-link-wrapper').parent().addClass('toggled-off');
        }else{
            jQuery('.topbar-link-wrapper').parent().addClass('toggled-on');
            jQuery('.topbar-link-wrapper').parent().removeClass('toggled-off');
        }
        return (false);
    });
    jQuery('body').on("click", function() {
        if (jQuery('.topbar-link-wrapper').parent().hasClass('toggled-on')) {
            jQuery('.topbar-link-wrapper').parent().removeClass('toggled-on');
            jQuery('.topbar-link-wrapper').parent().addClass('toggled-off');
        }
    });
    jQuery(".box-category-heading").click(function() { 
        jQuery(".box-category-heading ul.product-categories").slideToggle("slow");
   });
    Shadowbox.init({
        overlayOpacity: .8
    }, setupDemos);
    jQuery("br", ".liststyle_content").remove();
    jQuery("select.orderby").customSelect();
    jQuery("ul li:empty").remove();
    jQuery("br", ".brand_block").remove();
    jQuery("br", ".pricing-content-inner").remove();
    jQuery("br", "#vertical_tab .tabs").remove();
    jQuery("p").each(function() {
        var e = jQuery(this);
        if (e.html().replace(/\s|&nbsp;/g, "").length == 0) e.remove()
    });
    e(".nav-button").on("click", function() {
        e(".nav-button, .primary-nav").toggleClass("open")
    });
    jQuery(".gridlist-toggle").prependTo(jQuery("#primary #content"));
    jQuery(".woocommerce-result-count").wrap(" <div class='category-toolbar'> </div>");
    jQuery(".woocommerce-ordering").appendTo(".category-toolbar");
    jQuery(".gridlist-toggle").prependTo(".category-toolbar");
    jQuery(".products .product-category").wrapInner(" <div class='container-inner'> </div>");
    jQuery(".accordion.style5 .single_accordion").each(function(e) {
        jQuery(this).addClass("accord-" + (e + 1))
    });
    jQuery(".quantity.buttons_added").find("input.input-text").attr({
        type: "text"
    });
    jQuery(".nav-menu:first > li").each(function(e) {
        jQuery(this).addClass("main-li")
    });
    jQuery("#woo-small-products p img").each(function(e) {
        jQuery(this).wrap("<div class='image-block'> </div>")
    });
    jQuery(".primary-sidebar .widget .widget-title,.content-sidebar .widget .widget-title,.site-footer .widget-title,.widget .widget-title").each(function(e) {
        jQuery(this).wrap("<div class='title-outer'> </div>")
    });
    jQuery(".sub-container .inner-image").each(function(e) {
        jQuery(this).addClass("image-" + (e + 1))
    });
    jQuery(" .product-categories").addClass('sidebar-category-inner');
    jQuery('.widget_nav_menu ul li').filter(function() {
        return jQuery(this).text() == '';
    }).remove();
    // zoom Gallery
    function singleproductcarousel() {
        "use strict";
        jQuery('.product .flex-control-thumbs').addClass('owl-carousel');
        jQuery(".product .flex-control-thumbs").owlCarousel({
            navigation: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1299, 3],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 3],
            itemsMobile: [320, 1]
        });
    }
    jQuery(document).ready(function() {  "use strict";  singleproductcarousel() });
    jQuery(window).load(function() {  "use strict"; singleproductcarousel() });
    jQuery(window).resize(function() {  "use strict";singleproductcarousel()}); 
    jQuery(window).resize(function() {
        "use strict";
        isotopAutoSet()
    });
    //JS for calling horizontalTab
    jQuery(document).ready(function() {
        "use strict";
        jQuery("#horizontalTab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
    });
    // Categorytab
    jQuery(document).ready(function() {
        "use strict";
        jQuery("#categorytab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
    });
    jQuery(".catlist-carousel").each(function() {
        "use strict";
        var e = n(this).attr("id").replace("_catlist_carousel", "");
        if (n(this).attr("id")) {            
            n(".catlist-carousel").addClass("owl-carousel");
            n(".catlist-carousel").owlCarousel({
                navigation: false,
                pagination: false,
                loop:true,
                items: e,
                itemsLarge: [1400, e],
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 4],
                itemsTablet: [767, 3],
                itemsMobile: [479, 2]
            })
        }
    });
    (function(e) {
        "use strict";
        var t;
        var n = false;
        var r = e("#to_top");
        var i = e(window);
        var s = e(document.body).children(0).position().top;
        e("#to_top").on("click", function(t) {
            t.preventDefault();
            e("html, body").animate({
                scrollTop: 0
            }, "slow")
        });
        i.scroll(function() {
            window.clearTimeout(t);
            t = window.setTimeout(function() {
                if (i.scrollTop() <= s) {
                    n = false;
                    r.fadeOut(500)
                } else if (n == false) {
                    n = true;
                    r.stop(true, true).show().on("click", function() {
                        r.fadeOut(500)
                    })
                }
            }, 100)
        })
    })(jQuery);
    /* Faq */
    (function(e) {
        "use strict";
        e(".toogle_div a.tog").on("click", function(t) {                
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current")             
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        var t = e(".accordion .tab_content").hide();
        e(".accordion a").on("click", function() {
            t.slideUp();
            e(this).parent().next().slideDown();
            return false
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".togg div.tog").on("click", function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).addClass("current")
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".accordion a.tog").on("click", function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current");
                n.stop(false, true).slideToggle().css({
                    display: "block"
                })
            }
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".animated").each(function() {
            e(this).one("inview", function(t, n) {
                var r = "";
                var i = e(this),
                    s = i.data("animated") !== undefined ? i.data("animated") : "slideUp";
                r = i.data("delay") !== undefined ? i.data("delay") : 300;
                if (n === true) {
                    setTimeout(function() {
                        i.addClass(s);
                        i.css("opacity", 1)
                    }, r)
                } else {
                    setTimeout(function() {
                        i.removeClass(s);
                        i.css("opacity", 0)
                    }, r)
                }
            })
        })
    })(jQuery);
    jQuery("#commentform textarea").addClass("required");
    jQuery("#commentform").validate();
    jQuery("#shortcode_contactform").validate();
    jQuery(".portfolio-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_portfolio_carousel", "");
            n(".portfolio-carousel").addClass("owl-carousel");
            n(".portfolio-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1400, e],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    function freshcodes_blogcarousel() {
        jQuery(".blog-carousel").each(function() {
            "use strict";
            if (n(this).attr("id")) {
                var e = n(this).attr("id").replace("_blog_carousel", "");
                n(".blog-carousel").addClass("owl-carousel");
                n(".blog-carousel").owlCarousel({
                    navigation: true,
                    pagination: false,
                    items: e,
                    itemsLarge: [1400, e],
                    itemsDesktop: [1200, e],
                    itemsDesktopSmall: [979, 2],
                    itemsTablet: [767, 2],
                    itemsMobile: [479, 1]
                })
            }
        });
    }
    jQuery(document).ready(function() {
        "use strict";
        freshcodes_blogcarousel();
    });
    
    jQuery(window).resize(function() {
        "use strict";
        freshcodes_blogcarousel();
    });
    jQuery(".widget .testimonial-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_testimonial_carousel", "");
            n(".widget .testimonial-carousel").addClass("owl-carousel");
            n(".widget .testimonial-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                autoPlay: 6500,
                items: e,
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 12],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            });
        }
    });
    jQuery(".testimonial-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_testimonial_carousel", "");
            n(".testimonial-carousel").addClass("owl-carousel");
            n(".testimonial-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                autoPlay: 6500,
                // addClassActive:true,
                center:true,
                items: e,
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".hmoslider-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_hmoslider_carousel", "");
            n(".hmoslider-carousel").addClass("owl-carousel");
            n(".hmoslider-carousel").owlCarousel({
                navigation: false,
                pagination: true,
                autoPlay: 3000,
                items: e,
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
				itemsTablet: [600, 2],
                itemsMobile: [479, 2]
            })
        }
    });
    jQuery(".upsells ul.products").each(function() {
        if (n(this).attr("class")) {
            var e = n(this).attr("class").replace("columns-", "");
            let x = e.substr(8);
            n(".upsells ul.products").addClass("owl-carousel");
            n(".upsells ul.products").owlCarousel({
                navigation: true,
                pagination: false,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('active')
                    let a = 1;                    
                    let z = x - a;
                    
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)
                    .addClass('active')    
                },
                items: x,
                itemsLarge: [1400, 5],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [640, 2]
            })
        }
    });
    jQuery(".cross-sells ul.products").each(function() {
        if (n(this).attr("class")) {
            var e = n(this).attr("class").replace("columns-", "");
            let x = e.substr(8);
            console.log(x);
            n(".cross-sells ul.products").addClass("owl-carousel");
            n(".cross-sells ul.products").owlCarousel({
                navigation: true,
                pagination: false,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('active')
                    let a = 1;                    
                    let z = x - a;
                    
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)
                    .addClass('active')    
                },
                items: x,
                itemsLarge: [1400, x],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [640, 2]
            })
        }
    });
    jQuery(".team-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_team_carousel", "");
            n(".team-carousel").addClass("owl-carousel");
            n(".team-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsLarge: [1400, e],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
	jQuery(".ny-lprepair-section .carousel").each(function() {
		"use strict";

		n(".ny-lprepair-section .carousel").addClass("owl-carousel");
		n(".ny-lprepair-section .carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items: 4,
			loop: true,
			itemsLarge: [1400, 3],
			itemsDesktop: [1200, 3],
			itemsDesktopSmall: [979, 3],
			itemsTablet: [767, 2],
			itemsMobile: [479, 1]
		});
    });
	jQuery(".ny-mac-repair-section .carousel").each(function() {
		"use strict";

		n(".ny-mac-repair-section .carousel").addClass("owl-carousel");
		n(".ny-mac-repair-section .carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items: 3,
			loop: true,
			itemsLarge: [1400, 3],
			itemsDesktop: [1200, 3],
			itemsDesktopSmall: [979, 3],
			itemsTablet: [767, 2],
			itemsMobile: [479, 1]
		});
    });
                                   
    jQuery(".navigation-bar").each(function() {
        "use strict";
             var items = n(this).find("ul.menu-slider > li").length;    
                n(this).find("ul.menu-slider").addClass("owl-carousel");
                n(this).find("ul.menu-slider").owlCarousel({                
                    navigation: false,
                    pagination: false,                    
                    items: 10,
                    itemsLarge: [1400, 8],
                    itemsDesktop: [1250, 7],
                    itemsDesktopSmall: [979, 6],
                    itemsTablet: [767, 4],
                    itemsMobile: [479, 3]               
                })      
    })
                                   
    jQuery(".related_posts.blog-list").each(function() {
        "use strict";
        n(".related_posts.blog-list").addClass("owl-carousel");
        n(".related_posts.blog-list").owlCarousel({
            navigation: true,
            pagination: false,
            items: 3,
            itemsLarge: [1400, 3],
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1],
            afterAction: function(el) {
                this.$owlItems.removeClass('active');
                this.$owlItems.eq(this.currentItem + 1).addClass('active');
            }
        })
    });
});
document.createElement("div");
document.createElement("section");
jQuery(window).load(function() {  "use strict";  isotopAutoSet()});
jQuery(window).resize(function() {"use strict";  isotopAutoSet()});
// JS toggle for sidebar and footer
function SidebarFooterToggle() {
    "use strict";
    jQuery('.widget .title-outer,.site-footer .title-outer,.toggle-content .title-outer,.widget_accepted_payment_methods .title-outer,.widget_nav_menu .title-outer, .woocommerce-shipping-calculator .shipping-calculator-button,.widget_block h2').on("click", function() {
        if (jQuery(this).parent().hasClass('toggled-on')) {
            jQuery(this).parent().removeClass('toggled-on');
            jQuery(this).parent().addClass('toggled-off');
        } else {
            jQuery(this).parent().addClass('toggled-on');
            jQuery(this).parent().removeClass('toggled-off');
        }
        return (false);
    });
}
jQuery(document).ready(function() {
    "use strict";
    SidebarFooterToggle()
});
// JS for adding treeview in navigationMenu sidebar product category
function leftCatMenu() {
    "use strict";
    jQuery('.primary-sidebar .product-categories,.widget_nav_menu,.widget_categories ul,.site-footer .widget_pages ul,.product-categories').addClass('treeview-list');
    jQuery(".primary-sidebar .product-categories.treeview-list,.widget_nav_menu.treeview-list,.widget_categories .treeview-list,.site-footer .widget_pages .treeview-list,.product-categories.treeview-list").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
    jQuery('.treeview-list a.active').parent().removeClass('expandable');
    jQuery('.treeview-list a.active').parent().addClass('collapsable');
}
jQuery(document).ready(function() {
    "use strict";
    leftCatMenu()
});
// JS for adding treeview in Mobile Menu
function mobilenavigationMenu() {
    "use strict";
    jQuery('.mobile-menu .mobile-menu-inner, .mobile-cat-menu .mobile-cat-menu-inner').addClass('treeview-list');
    jQuery(".mobile-menu .mobile-menu-inner.treeview-list, .mobile-cat-menu .mobile-cat-menu-inner.treeview-list").treeview({ 
        animated: "slow",
        collapsed: true,
        unique: true
    });
    jQuery('.treeview-list a.active').parent().removeClass('expandable');
    jQuery('.treeview-list a.active').parent().addClass('collapsable');
}
jQuery(window).load(function() {
    "use strict";
    mobilenavigationMenu()
});

// JS for adding active class in Sidebar Category Menu
function categoryMenu() {
    "use strict";
    jQuery(".box-category").addClass('toggled-on');
    jQuery('.category-toggle').on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
        } else {
            jQuery('.category-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');  
        }
    });
    jQuery('.close-menu').on("click", function() {
        if (jQuery(this).parent().parent().parent().hasClass('active')) {
            jQuery(this).parent().parent().parent().removeClass('active');
        } else {
            jQuery('.close-menu').parent().parent().parent().removeClass('active');
            jQuery(this).parent().parent().parent().addClass('active');
        }
    });
}
jQuery(document).ready(function() {
    "use strict";
    categoryMenu();
});

// JS for treeview for sidebar page list
function leftPageMenu() {
    "use strict";
    jQuery("#secondary .widget_pages ul").addClass('page-list');
    jQuery("#secondary .widget_pages ul.page-list").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
}
jQuery(window).load(function() {
    "use strict";
    leftPageMenu()
});
// JS for calling Owl Carousel
jQuery(window).load(function() {
    "use strict";
    jQuery('.aboutus .slides').owlCarousel({
        items: 1,
        autoPlay: 5000,
        singleItem: true,
        navigation: false,
        pagination: true,
        transitionStyle: 'fade'
    });
    jQuery('.banner-slider-container .slides').owlCarousel({
        items: 1,
        autoPlay: 5000,
        singleItem: true,
        navigation: false,
        pagination: true,
        transitionStyle: 'fade'
    });
});
// JS for adding active class in Mobile Menu
function mobileMenu() {
    "use strict";
    if (jQuery(window).width() < 1201) {
        jQuery('.mega-menu .mega').attr('id', 'menu-menu');
        jQuery('#menu-all-pages').removeClass('mega');
        jQuery('.mega-menu > ul').removeClass('mega');
    } else {
        jQuery('.mega-menu .mega > ul').addClass('mega');
        jQuery('.mega-menu .mega > ul').attr('id', 'menu-menu');
    }
    jQuery(".mobile-navigation").addClass('toggled-on');
    jQuery('.menu-toggle').on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
            jQuery('.bg-overlay').removeClass('active');
        } else {
            jQuery('.menu-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');
            jQuery('.bg-overlay').addClass('active');
        }
    });
    jQuery('.close-menu').on("click", function() {
        if (jQuery(this).parent().parent().hasClass('active')) {
            jQuery(this).parent().parent().removeClass('active');
            jQuery('.bg-overlay').removeClass('active');
        } else {
            jQuery('.close-menu').parent().parent().removeClass('active');
            jQuery(this).parent().parent().addClass('active');
            jQuery('.bg-overlay').addClass('active');
			if (jQuery('.bg-overlay').hasClass('active')) {
                jQuery('.bg-overlay').removeClass('active');
            }
        }
    });
    jQuery('.bg-overlay').on("click", function() { 
            jQuery(this).parent().parent().removeClass('active');
            jQuery('.bg-overlay').removeClass('active');
            jQuery('.mobile-navigation').removeClass('active');
    });
    
}
jQuery(document).ready(function() {  "use strict";  mobileMenu() });

//js for catagories
function mobilecatMenu() {
    "use strict";   
    jQuery(".mobile-navigation").addClass('toggled-on');
    jQuery('.menu-cat-toggle').on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
        } else {
            jQuery('.menu-cat-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');
        }

        jQuery(".mobile-navigation-cat .mobile-cat-menu-inner").slideToggle("slow");
    });    
}
jQuery(document).ready(function() {  "use strict";  mobilecatMenu() });

// JS for Sticky Header
function StickyHeader() {
    "use strict";
    var num = 300; //number of pixels before modifying styles
    jQuery(window).bind('scroll', function() {
        if (jQuery(window).scrollTop() > num) {
            jQuery('.header-fix').addClass('sticky-menu');
            jQuery('.site-header-fix-header-top-sticky').addClass('header-style');
            jQuery('.site-header-fix-bottom-sticky').addClass('header-style');
            jQuery('.category-box').addClass('home-category-fix');
            jQuery('.home-category').addClass('home-category-fix1');
        } else {
            jQuery('.header-fix').removeClass('sticky-menu');
            jQuery('.site-header-fix').removeClass('header-style');
            jQuery('.category-box').removeClass('home-category-fix');
        }
    });
}
jQuery(document).ready(function() {
    "use strict";
    StickyHeader()
});
jQuery(window).resize(function() {
    "use strict";
    StickyHeader()
});
// JS for calling account toggle,top bar link toggle and responsive menu toggle
jQuery(document).ready(function() {
    "use strict";
    jQuery(".header-toggle").on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
        } else {
            jQuery('.header-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');
        }
        // jQuery('.woocommerce-product-search,.search-form').fadeIn('medium');
    });
    
    if (jQuery(window).width() < 768) {
        jQuery('.header-contact').on("click", function() {
            jQuery(".header-contact .widget").slideToggle("medium");
        });
    } 
});
//Preloader
jQuery(window).load(function() {
    "use strict";
    var preloaderFadeOutTime = 300;
        function hidePreloader() {
            var preloader = jQuery('.fc-spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
});

