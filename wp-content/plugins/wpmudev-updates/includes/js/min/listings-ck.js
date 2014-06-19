!function(t){jQuery.expr[":"].CONTAINS=function(t,e,i){return jQuery(t).text().toUpperCase().indexOf(i[3].toUpperCase())>=0},jQuery.expr[":"].NOT_CONTAINS=function(t,e,i){return!jQuery(t).text().toUpperCase().indexOf(i[3].toUpperCase())>=0};var e={handleHover:function(){var t=jQuery("div.listing"),e='<div class="hover-gradient"></div>',i=t.next();jQuery("div.listings").on("mouseenter","ul > li > div.listing",function(){var t=jQuery(this).next(),i=jQuery(this).parent(),n=jQuery(" div.listings ul li "),s=jQuery(this).next().find("div.hover-gradient");s.length||(jQuery("div.hover-gradient").remove(),t.append(e),t.find("div.hover-gradient").animate({opacity:1},250))}).on("mouseleave",function(){var t=jQuery(" div.listings ul li ");jQuery("div.hover-gradient").remove()})},get_stack:function(){var e=t("#stack");return e.length||(t("body").append('<ul id="stack" style="display:none" />'),e=t("#stack")),e},get_root:function(){return t(".listings ul").first()},get_page_type:function(){var t=e.get_root();return t.attr("data-page_type")},project_details:function(){for(var e=t("#listing-details-container"),i=t(this),n=i.parents("li"),s=i.parents("li").find("div.listing h1").html(),r=i.parents("li").find("div.listing span.full-excerpt").html(),l=i.parents("li").find("div.listing a").attr("href"),a=i.parents("li").find("div.install_wrap span.target"),o=n,d=n.offset();o.prev().length;){var c=o.prev();if(!c.is("li"))break;var p=c.offset();if(p.left>=d.left)break;o=c}o.before(e);var u=n.attr("data-project_id");t(".listing-details-wrapper #listing-title").html(s),t(".listing-details-wrapper #listing-excerpt").html(r),t(".listing-details-wrapper #listing-description").empty(),t(".listing-details-wrapper #loading-details").show(),t(".listing-details-wrapper #listing-readmore").attr("href",l),t(".listing-details-wrapper #listing-install").empty().append(a.clone(!0));for(var h="",g=project_screenshots[u],f=0;f<g.length;f++)h=h+'<li><a href="#"><img src="'+g[f].url+'" width="100%" height="100" alt="'+g[f].desc+'"	/></a><div></div></li>';t(".listing-details-wrapper .listing-screens ul").html(h),t(".listing-details-wrapper .image-of").html("1 / "+g.length),e.slideDown(500,"swing");var _=e.offset().top-30;return t("body,html").animate({scrollTop:_},300),t.post(ajaxurl,{action:"wpmudev_get_project_details",wdp_id:u},function(e){t(".listing-details-wrapper #listing-description").html(e),t(".listing-details-wrapper #loading-details").hide(),t("div.overlay-details a.symbol").click()},"html"),!1},toggle_paid_projects:function(){var i=t('li.listing-item[data-paid!="free"]').filter('[data-paid!="lite"]');return i.is(":visible")?(i.hide(),t(".free_projects").each(function(){var e=t(this);e.find("input").attr("checked",!0).end()})):(i.show(),t(".free_projects").each(function(){var e=t(this);e.find("input").attr("checked",!1).end()})),e.update_results_count(),!1},sort_projects:function(){var e=t("#sort_projects").val();"released"==e?t("li.listing-item").tsort("",{attr:"data-released",order:"desc"}):"updated"==e?t("li.listing-item").tsort("",{attr:"data-updated",order:"desc"}):"popularity"==e?t("li.listing-item").tsort("",{attr:"data-popularity",order:"desc"}):"downloads"==e?t("li.listing-item").tsort("",{attr:"data-downloads",order:"desc"}):"alphabetical"==e&&t("li.listing-item").tsort("h1")},filter_projects:function(){var i=t("#filter_projects").val(),n=e.get_root();return i.length?(n.find("li").addClass("search-hidden").end().find("li:CONTAINS('"+i+"')").removeClass("search-hidden"),void e.update_results_count()):n.find("li").removeClass("search-hidden")},search_filter_process:function(i){if(9==i.keyCode||39==i.keyCode){if(t(".ds-result-item:first").length)return t("#filter_projects").val(t(".ds-result-item:first").text()),e.filter_projects(),!1}else 13==i.keyCode&&e.filter_projects()},filter_tags:function(){var i=e.get_root(),n=t("#filter_tags").val();if(!n)return i.find("li").show(),e.update_results_count(),!0;var s=project_tags[n];return s?(i.find("li").hide(),t.each(s.pids,function(t,e){i.find('li[data-project_id="'+e+'"]').show()}),void e.update_results_count()):!1},check_hash_request:function(){var i=window.location.hash;if(!i)return!1;var n=i.match(/pid=(\d+)/);if(n&&2==n.length){n=n[1];var s=t('li[data-project_id="'+n+'"]');if(!s.length)return!1;t(window).load(function(){s.find("img").click()})}var r=i.match(/search=(.*)/);r&&2==r.length&&(r=r[1],t(window).load(function(){t("#filter_projects").val(r).trigger("change")}));var l=i.match(/paid=(.*)/);l&&2==l.length&&t(window).load(function(){e.toggle_paid_projects()})},update_results_count:function(){var e=t("li.listing-item:visible").length;t("#results-count").html(e),e?(t("#no-results").hide(),t("div.listing-divider, div.listing-divider2").show()):(t("div.listing-divider, div.listing-divider2").hide(),t("#no-results").fadeIn("slow"))},max_screenshot_height_adjust:function(){t(".listing-details-wrapper .listing-details-overlay .screenshot-container img").css("max-height",t(".listing-details-container.grid_container .listing-copy").height()-10)},hide_install_message:function(){var i=t("#_install_hide_msg");i.is(":checked")&&t.post(ajaxurl,{action:"wpmudev_hide_install_message"},function(i){t("a.wpmu-button.install_setup").removeClass("install_setup").off("click",e.install_setup)})},install_setup:function(){var i=t(this);return t("#_install_setup-wrapper").after("<div id='_install_setup-background' />"),t("#_install_setup-background").css({position:"absolute",height:t("#wpwrap").height(),width:t("#wpwrap").width(),background:"#000",opacity:.7,"z-index":9998}).offset({top:0,left:0}).show(),t("#_install_setup-wrapper").css({position:"fixed",top:100,left:(t("#wpwrap").width()-500)/2,width:500,"z-index":9999}).css("top",(t(window).height()-t("#_install_setup-wrapper").height())/2).find("a.install_plugin").attr("href",i.attr("href")).end().show(),t("#_install_setup-background").on("click",e.install_setup_close),!1},install_instructions:function(){return t("#_install_setup-wrapper").hide(),t("#_install_setup-auto_install-wrapper").css({position:"fixed",top:100,left:(t("#wpwrap").width()-500)/2,width:500,"z-index":9999}).css("top",(t(window).height()-t("#_install_setup-auto_install-wrapper").height())/2).show(),!1},install_setup_close:function(){return t("#_install_setup-background").remove(),t("#_install_setup-wrapper").hide(),t("#_install_setup-auto_install-wrapper").hide(),!1},install_plugin:function(){var e=t(this);if(e.parents("#_install_setup-wrapper").length)return!0;var i=e.text(),n=e.attr("href"),s=e.parents("span.target");return e.html('<img src="'+loading_spinner+'" /> '+e.attr("data-downloading")),t("<div />").load(n+" #wpbody-content",function(i){var n=t(i).find('a[href*="action=activate"]:first');return n.length?void e.parents("span.target").first().html(t("#_installed-placeholder").html()):(s.first().html(t("#_install_error-placeholder").html()),s.find(".tooltip section").html(t(i).find(".wrap p:not(:last)")),!1)}),!1},install_and_activate_plugin:function(){var e=t(this),i=e.text(),n=e.attr("href"),s=e.parents("span.target");return e.html('<img src="'+loading_spinner+'" /> '+e.attr("data-downloading")),t("<div />").load(n+" #wpbody-content",function(i){var n=t(i).find('a[href*="action=activate"]:first');return n.length?(e.html('<img src="'+loading_spinner+'" />'+e.attr("data-installing")),void t("<div />").load(n.attr("href"),function(i,n,r){var l=t(i),a=l.find(l.find("div#message.error").length?"div#message.error":'iframe[src*="action=error_scrape"]');return"error"==n&&(a=l.find("body"),a=a.length?a:"Something went wrong with plugin activation"),a.length?(s.first().html(t("#_install_error-placeholder").html()),s.find(".tooltip section").html(a),!1):void e.parents("span.target").first().html(t("#_installed-placeholder").html())})):(s.first().html(t("#_install_error-placeholder").html()),s.find(".tooltip section").html(t(i).find(".wrap p:not(:last)")),!1)}),!1},install_theme:function(){var e=t(this),i=e.text(),n=e.attr("href");return e.html('<img src="'+loading_spinner+'" /> '+e.attr("data-downloading")),t("<div />").load(n+" #wpbody-content",function(i){e.parents("span.target").first().html(t("#_installed-placeholder").html())}),!1},tooltip:function(t){var e=t,i=e.length,n;for(n=0;i>n;n++)jQuery(document).on("mouseenter mouseleave",e[n],function(){jQuery(this).has("section").toggleClass("tooltipHover")})},expandOnHover:function(t){var e=arguments,i=e.length,n=0;for(n;i>n;n++)jQuery(e[n]).on("mouseenter","tr",function(){var t=jQuery(this).width(),e=jQuery(this).height();jQuery(this).next().find("div.reason").css({top:-1,left:0,width:t,display:"block"})}).on("mouseleave","tr",function(){jQuery(this).next().find("div.reason").css({display:"none"})})}};t(document).ready(function(){e.handleHover(),e.update_results_count(),t(document).on("click","a.close-plugin-details",function(){return t("div.listing-details-wrapper").slideUp(300,"swing"),!1}),t("div.listing-details-wrapper").hide(),t("div.listings").on("click","ul > li > div.listing",e.project_details),t("#sort_projects").on("change",e.sort_projects),t("#filter_tags").on("change",e.filter_tags),t("#filter_projects").on("keyup",e.filter_projects).on("change",e.filter_projects).on("keydown",e.search_filter_process),t("#clear_search").unbind("click").click(function(){return t("#filter_projects").val(""),!1}),t("#no-results a").click(function(){return t("#filter_projects").val("").trigger("change"),!1}),e.tooltip(t(".tooltip")),t("#toggle-free-projects").on("change",e.toggle_paid_projects),"undefined"!=typeof suggestedProjects&&(t("#filter_projects").doubleSuggest({localSource:suggestedProjects,remoteSource:!1,selectValue:"name",seekValue:"name",minChars:2,resultsComplete:function(){t(".ds-result-item").length?t("#ds-results-filter_projects").show():t("#ds-results-filter_projects").hide()}}),t("#ds-container-filter_projects + .search-btn").on("click",e.filter_projects),t(document).on("click",".ds-result-item",function(){setTimeout(e.filter_projects,200)})),t(document).on("click","div.overlay-details a.symbol",function(){return jQuery("div.listing-details-overlay").fadeOut(300,"swing"),t(window).unbind("resize",e.max_screenshot_height_adjust),!1}),t(document).on("click",".listing-details-wrapper div.listing-screens > ul","li",function(i){var n=t(i.target).is("li")?t(i.target):t(i.target).parents("li"),s=n.find("img");return t(".listing-details-wrapper .listing-details-overlay .screenshot-container img").attr("src",s.attr("src")),t(".listing-details-wrapper .listing-details-overlay .screenshot-description .screenshot-description").html(s.attr("alt")),t(".listing-details-wrapper .listing-details-overlay .screenshot-description .image-of").text(n.prevAll("li").length+1+" / "+n.parents("div.listing-screens ul").find("li").length),t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").first().unbind("click").bind("click",function(){var e=n.prev();return e.length&&e.is("li")?e.click():(t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").removeClass("faded"),t(this).addClass("faded")),!1}).end().last().unbind("click").bind("click",function(){var e=n.next();return e.length&&e.is("li")?e.click():(t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").removeClass("faded"),t(this).addClass("faded")),!1}).end(),n.prev().length?t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").first().removeClass("faded"):t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").first().addClass("faded"),n.next().length?t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").last().removeClass("faded"):t(".listing-details-wrapper .listing-details-overlay .screenshot-nav a").last().addClass("faded"),t(".listing-details-wrapper div.listing-details-overlay").fadeIn(400,"swing"),e.max_screenshot_height_adjust(),t(window).bind("resize",e.max_screenshot_height_adjust),!1}),t("a.wpmu-button.install_and_activate_plugin").on("click",e.install_and_activate_plugin),t("a.wpmu-button.install_plugin").on("click",e.install_plugin),t("a.wpmu-button.install_setup").on("click",e.install_setup),t("a.wpmu-button.install_instructions").on("click",e.install_instructions),t("a.wpmu-button.install_theme").on("click",e.install_theme),t("a._install_setup-close").on("click",e.install_setup_close),t("#_install_hide_msg").on("change",e.hide_install_message),t("a.manual_install_setup_done").on("click",function(){return window.location.reload(),!1}),t(".target").on("mouseover",".tooltip",function(){var e=t(this).find("section");return e.show(),!1}).on("mouseout",".tooltip",function(){var e=t(this).find("section");return e.hide(),!1}),e.check_hash_request(),document.images&&(img1=new Image,img1.src=loading_spinner)})}(jQuery);