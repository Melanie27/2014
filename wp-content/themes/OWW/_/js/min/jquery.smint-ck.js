!function(){$.fn.smint=function(i){$(this).addClass("smint");var t=$.extend({"scrollSpeed ":500},i),s=new Array,o=0,a=$(".smint").height();return $(".smint a").each(function(i){if(t.scrollSpeed)var e=t.scrollSpeed;var n=$(this).attr("id");s.push(Array($("div."+n).position().top-a,$("div."+n).height()+$("div."+n).position().top,n));var d=$(".smint").offset().top,l=function(t){var o=$(window).scrollTop();o>d?$(".smint").css({position:"fixed",top:110}).addClass("fxd"):$(".smint").css({position:"absolute",top:d}).removeClass("fxd"),s[i][0]<=o&&o<=s[i][1]&&("up"==t?($("#"+n).addClass("active"),$("#"+s[i+1][2]).removeClass("active")):i>0?($("#"+n).addClass("active"),$("#"+s[i-1][2]).removeClass("active")):void 0==t&&$("#"+n).addClass("active"),$.each(s,function(i){n!=s[i][2]&&(console.log(i),$("#"+s[i][2]).removeClass("active"))}))};l(),$(window).scroll(function(){var i=$(this).scrollTop();i>o?direction="down":o>i&&(direction="up"),o=i,l(direction),$(window).scrollTop()+$(window).height()==$(document).height()&&($(".smint a").removeClass("active"),$(".smint a").last().addClass("active"))}),$(this).on("click",function(i){var t=$(".smint").height();i.preventDefault();var s=$(this).attr("id");if($(this).hasClass("smint-disable"))return!1;var o=$("div."+s).offset().top-t;$("html, body").animate({scrollTop:o},e)})})}}();