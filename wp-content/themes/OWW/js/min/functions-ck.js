!function(t){var e=t("body"),n=t(window);if(t(function(){if(e.is(".sidebar")){var i=t("#secondary .widget-area"),o=0==i.length?-40:i.height(),a=t("#tertiary .widget-area").height()-t("#content").height()-o;a>0&&n.innerWidth()>999&&t("#colophon").css("margin-top",a+"px")}}),function(){var e=t("#site-navigation"),n,i;if(e&&(n=e.find(".menu-toggle")))return i=e.find(".nav-menu"),i&&i.children().length?void t(".menu-toggle").on("click.twentythirteen",function(){e.toggleClass("toggled-on")}):void n.hide()}(),n.on("hashchange.twentythirteen",function(){var t=document.getElementById(location.hash.substring(1));t&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),t.isFunction(t.fn.masonry)){var i=e.is(".sidebar")?228:245;t("#secondary .widget-area").masonry({itemSelector:".widget",columnWidth:i,gutterWidth:20,isRTL:e.is(".rtl")})}}(jQuery);