$(".carousel").carousel({interval:!1});$(".collapse").collapse();$("#collapseOne").on("show.bs.collapse",function(){$("#btn-1").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseOne").on("hidden.bs.collapse",function(){$("#btn-1").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseTwo").on("show.bs.collapse",function(){$("#btn-2").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseTwo").on("hidden.bs.collapse",function(){$("#btn-2").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseThree").on("show.bs.collapse",function(){$("#btn-3").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseThree").on("hidden.bs.collapse",function(){$("#btn-3").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseFour").on("show.bs.collapse",function(){$("#btn-4").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseFour").on("hidden.bs.collapse",function(){$("#btn-4").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$("#collapseFive").on("show.bs.collapse",function(){$("#btn-5").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-contract.jpg)")});$("#collapseFive").on("hidden.bs.collapse",function(){$("#btn-5").css("background-image","url(http://planb-november.herokuapp.com/images/icons/icon-mobile-expand.jpg)")});$(".panel-heading-business a ").each(function(e){var t=$(this).attr("href"),n=$(this).parent().parent().attr("id"),r=$("."+n),i=$(this).find("button"),s=$(i).attr("id"),o=s.substring(0,3);btnString=$("."+o);btnIDString=$("#"+s);var u=$(this).parent().attr("class");titleSub=u.substring(0,6);titleString=$("."+titleSub);$(t).on("show.bs.collapse",function(){});$(t).on("hidden.bs.collapse",function(){})});$("#home a:contains('Home')").parent().addClass("active");$("#our-brands a:contains('Our Brands')").parent().addClass("active");$("#global-expertise a:contains('Global Expertise')").parent().addClass("active");$("#global-reach a:contains('Global Expertise')").parent().addClass("active");$("#united-states-canada a:contains('Global Expertise')").parent().addClass("active");$("#south-america a:contains('Global Expertise')").parent().addClass("active");$("#emea a:contains('Global Expertise')").parent().addClass("active");$("#apac a:contains('Global Expertise')").parent().addClass("active");$("#safety-security a:contains('Global Expertise')").parent().addClass("active");$("#technologies a:contains('Global Expertise')").parent().addClass("active");$("#client-services a:contains('Global Expertise')").parent().addClass("active");$("#business-solutions a:contains('Business Solutions')").parent().addClass("active");$("#government a:contains('Business Solutions')").parent().addClass("active");$("#entertainment a:contains('Business Solutions')").parent().addClass("active");$("#relocation a:contains('Business Solutions')").parent().addClass("active");$("#individual-business-traveler a:contains('Business Solutions')").parent().addClass("active");$("#individual-business-traveler-single a:contains('Business Solutions')").parent().addClass("active");$("#industry-insights a:contains('Business Solutions')").parent().addClass("active");$("#industry-insights-government a:contains('Business Solutions')").parent().addClass("active");$("#industry-insights-relocation a:contains('Business Solutions')").parent().addClass("active");$("#industry-insights-consulting a:contains('Business Solutions')").parent().addClass("active");$("#industry-insights-insurance a:contains('Business Solutions')").parent().addClass("active");$("#vision-leadership a:contains('Vision and Leadership')").parent().addClass("active");$("#executive-leadership a:contains('Vision and Leadership')").parent().addClass("active");$("#industry-affiliations a:contains('Vision and Leadership')").parent().addClass("active");$("#news a:contains('News')").parent().addClass("active");$("#press-releases a:contains('News')").parent().addClass("active");$("#press-releases-single a:contains('News')").parent().addClass("active");$("#in-the-news a:contains('News')").parent().addClass("active");$("#in-the-news-single a:contains('News')").parent().addClass("active");$("#awards a:contains('News')").parent().addClass("active");$("#awards-single a:contains('News')").parent().addClass("active");$("#upcoming-events a:contains('News')").parent().addClass("active");$("#upcoming-events-single a:contains('News')").parent().addClass("active");$("#affiliations a:contains('Affiliations')").parent().addClass("active");$("#careers a:contains('Careers')").parent().addClass("active");$("#press-releases a:contains('Press Releases')").addClass("active");$("#press-releases-single a:contains('Press Releases')").addClass("active");$("#in-the-news a:contains('In the News')").addClass("active");$("#in-the-news-single a:contains('In the News')").addClass("active");$("#awards a:contains('Awards & Honors')").addClass("active");$("#awards-single a:contains('Awards & Honors')").addClass("active");$("#upcoming-events a:contains('Upcoming Events')").addClass("active");$("#upcoming-events-single a:contains('Upcoming Events')").addClass("active");if($("#industry-insights-government a:contains('Business Solutions')")){$(".solutions-industry #government").addClass("active");$(".solutions-industry #relocation").removeClass("active")}if($("#industry-insights-relocation a:contains('Business Solutions')")){$(".solutions-industry #relocation").addClass("active");$(".solutions-industry #government").removeClass("active")}$("#overview1").click(function(){$(window).scrollTop(445);$(".sub-navigation").addClass("sub-move");$("#government-contractors1, #military1, #federal-civilian1, #gsa1").removeClass("active");$("#overview1").addClass("active")});$("#military1").click(function(){$(window).scrollTop(2e3);$(".sub-navigation").addClass("sub-move");$("#overview1, #government-contractors1, #federal-civilian1, #gsa1").removeClass("active");$("#military1").addClass("active")});$("#federal-civilian1").click(function(){$(window).scrollTop(3250);$(".sub-navigation").addClass("sub-move");$("#overview1, #military1, #government-contractors1, #gsa1").removeClass("active");$("#federal-civilian1").addClass("active")});$("#government-contractors1").click(function(){$(window).scrollTop(4e3);$(".sub-navigation").addClass("sub-move");$("#government-contractors1").addClass("active");$("#military1, #overview1, #federal-civilian1, #gsa1").removeClass("active")});$("#gsa1").click(function(){$(window).scrollTop(4720);$(".sub-navigation").addClass("sub-move");$("#overview1, #military1, #federal-civilian1, #government-contractors1").removeClass("active");$("#gsa1").addClass("active")});$(window).scroll(function(){var e=$(window).scrollTop();e>=513?$("#government .sub-navigation").addClass("sub-move"):$("#government .sub-navigation").removeClass("sub-move")});