!function(t,e,n){t.fn.jScrollPane=function(e){function i(e,i){function o(i){var r,c,p,u,d,j,g=!1,v=!1;if(G=i,V===n)d=e.scrollTop(),j=e.scrollLeft(),e.css({overflow:"hidden",padding:0}),E=e.innerWidth()+we,O=e.innerHeight(),e.width(E),V=t('<div class="jspPane" />').css("padding",be).append(e.children()),N=t('<div class="jspContainer" />').css({width:E+"px",height:O+"px"}).append(V).appendTo(e);else{if(e.css("width",""),g=G.stickToBottom&&H(),v=G.stickToRight&&S(),u=e.innerWidth()+we!=E||e.outerHeight()!=O,u&&(E=e.innerWidth()+we,O=e.innerHeight(),N.css({width:E+"px",height:O+"px"})),!u&&ke==K&&V.outerHeight()==Q)return void e.width(E);ke=K,V.css("width",""),e.width(E),N.find(">.jspVerticalBar,>.jspHorizontalBar").remove().end()}V.css("overflow","auto"),K=i.contentWidth?i.contentWidth:V[0].scrollWidth,Q=V[0].scrollHeight,V.css("overflow",""),U=K/E,$=Q/O,J=$>1,Z=U>1,Z||J?(e.addClass("jspScrollable"),r=G.maintainPosition&&(ee||oe),r&&(c=B(),p=D()),s(),a(),l(),r&&(C(v?K-E:c,!1),y(g?Q-O:p,!1)),x(),P(),L(),G.enableKeyboardNavigation&&M(),G.clickOnTrack&&f(),R(),G.hijackInternalLinks&&I()):(e.removeClass("jspScrollable"),V.css({top:0,width:N.width()-we}),A(),Y(),X(),h(),z()),G.autoReinitialise&&!me?me=setInterval(function(){o(G)},G.autoReinitialiseDelay):!G.autoReinitialise&&me&&clearInterval(me),d&&e.scrollTop(0)&&y(d,!1),j&&e.scrollLeft(0)&&C(j,!1),e.trigger("jsp-initialised",[Z||J])}function s(){J&&(N.append(t('<div class="jspVerticalBar" />').append(t('<div class="jspCap jspCapTop" />'),t('<div class="jspTrack" />').append(t('<div class="jspDrag" />').append(t('<div class="jspDragTop" />'),t('<div class="jspDragBottom" />'))),t('<div class="jspCap jspCapBottom" />'))),se=N.find(">.jspVerticalBar"),re=se.find(">.jspTrack"),_=re.find(">.jspDrag"),G.showArrows&&(pe=t('<a class="jspArrow jspArrowUp" />').bind("mousedown.jsp",u(0,-1)).bind("click.jsp",W),ue=t('<a class="jspArrow jspArrowDown" />').bind("mousedown.jsp",u(0,1)).bind("click.jsp",W),G.arrowScrollOnHover&&(pe.bind("mouseover.jsp",u(0,-1,pe)),ue.bind("mouseover.jsp",u(0,1,ue))),p(re,G.verticalArrowPositions,pe,ue)),ce=O,N.find(">.jspVerticalBar>.jspCap:visible,>.jspVerticalBar>.jspArrow").each(function(){ce-=t(this).outerHeight()}),_.hover(function(){_.addClass("jspHover")},function(){_.removeClass("jspHover")}).bind("mousedown.jsp",function(e){t("html").bind("dragstart.jsp selectstart.jsp",W),_.addClass("jspActive");var n=e.pageY-_.position().top;return t("html").bind("mousemove.jsp",function(t){g(t.pageY-n,!1)}).bind("mouseup.jsp mouseleave.jsp",j),!1}),r())}function r(){re.height(ce+"px"),ee=0,ae=G.verticalGutter+re.outerWidth(),V.width(E-ae-we);try{0===se.position().left&&V.css("margin-left",ae+"px")}catch(t){}}function a(){Z&&(N.append(t('<div class="jspHorizontalBar" />').append(t('<div class="jspCap jspCapLeft" />'),t('<div class="jspTrack" />').append(t('<div class="jspDrag" />').append(t('<div class="jspDragLeft" />'),t('<div class="jspDragRight" />'))),t('<div class="jspCap jspCapRight" />'))),de=N.find(">.jspHorizontalBar"),fe=de.find(">.jspTrack"),ne=fe.find(">.jspDrag"),G.showArrows&&(ge=t('<a class="jspArrow jspArrowLeft" />').bind("mousedown.jsp",u(-1,0)).bind("click.jsp",W),ve=t('<a class="jspArrow jspArrowRight" />').bind("mousedown.jsp",u(1,0)).bind("click.jsp",W),G.arrowScrollOnHover&&(ge.bind("mouseover.jsp",u(-1,0,ge)),ve.bind("mouseover.jsp",u(1,0,ve))),p(fe,G.horizontalArrowPositions,ge,ve)),ne.hover(function(){ne.addClass("jspHover")},function(){ne.removeClass("jspHover")}).bind("mousedown.jsp",function(e){t("html").bind("dragstart.jsp selectstart.jsp",W),ne.addClass("jspActive");var n=e.pageX-ne.position().left;return t("html").bind("mousemove.jsp",function(t){m(t.pageX-n,!1)}).bind("mouseup.jsp mouseleave.jsp",j),!1}),he=N.innerWidth(),c())}function c(){N.find(">.jspHorizontalBar>.jspCap:visible,>.jspHorizontalBar>.jspArrow").each(function(){he-=t(this).outerWidth()}),fe.width(he+"px"),oe=0}function l(){if(Z&&J){var e=fe.outerHeight(),n=re.outerWidth();ce-=e,t(de).find(">.jspCap:visible,>.jspArrow").each(function(){he+=t(this).outerWidth()}),he-=n,O-=n,E-=e,fe.parent().append(t('<div class="jspCorner" />').css("width",e+"px")),r(),c()}Z&&V.width(N.outerWidth()-we+"px"),Q=V.outerHeight(),$=Q/O,Z&&(je=Math.ceil(1/U*he),je>G.horizontalDragMaxWidth?je=G.horizontalDragMaxWidth:je<G.horizontalDragMinWidth&&(je=G.horizontalDragMinWidth),ne.width(je+"px"),ie=he-je,b(oe)),J&&(le=Math.ceil(1/$*ce),le>G.verticalDragMaxHeight?le=G.verticalDragMaxHeight:le<G.verticalDragMinHeight&&(le=G.verticalDragMinHeight),_.height(le+"px"),te=ce-le,v(ee))}function p(t,e,n,i){var o="before",s="after",r;"os"==e&&(e=/Mac/.test(navigator.platform)?"after":"split"),e==o?s=e:e==s&&(o=e,r=n,n=i,i=r),t[o](n)[s](i)}function u(t,e,n){return function(){return d(t,e,this,n),this.blur(),!1}}function d(e,n,i,o){i=t(i).addClass("jspActive");var s,r,a=!0,c=function(){0!==e&&q.scrollByX(e*G.arrowButtonSpeed),0!==n&&q.scrollByY(n*G.arrowButtonSpeed),r=setTimeout(c,a?G.initialDelay:G.arrowRepeatFreq),a=!1};c(),s=o?"mouseout.jsp":"mouseup.jsp",o=o||t("html"),o.bind(s,function(){i.removeClass("jspActive"),r&&clearTimeout(r),r=null,o.unbind(s)})}function f(){h(),J&&re.bind("mousedown.jsp",function(e){if(e.originalTarget===n||e.originalTarget==e.currentTarget){var i=t(this),o=i.offset(),s=e.pageY-o.top-ee,r,a=!0,c=function(){var t=i.offset(),n=e.pageY-t.top-le/2,o=O*G.scrollPagePercent,p=te*o/(Q-O);if(0>s)ee-p>n?q.scrollByY(-o):g(n);else{if(!(s>0))return void l();n>ee+p?q.scrollByY(o):g(n)}r=setTimeout(c,a?G.initialDelay:G.trackClickRepeatFreq),a=!1},l=function(){r&&clearTimeout(r),r=null,t(document).unbind("mouseup.jsp",l)};return c(),t(document).bind("mouseup.jsp",l),!1}}),Z&&fe.bind("mousedown.jsp",function(e){if(e.originalTarget===n||e.originalTarget==e.currentTarget){var i=t(this),o=i.offset(),s=e.pageX-o.left-oe,r,a=!0,c=function(){var t=i.offset(),n=e.pageX-t.left-je/2,o=E*G.scrollPagePercent,p=ie*o/(K-E);if(0>s)oe-p>n?q.scrollByX(-o):m(n);else{if(!(s>0))return void l();n>oe+p?q.scrollByX(o):m(n)}r=setTimeout(c,a?G.initialDelay:G.trackClickRepeatFreq),a=!1},l=function(){r&&clearTimeout(r),r=null,t(document).unbind("mouseup.jsp",l)};return c(),t(document).bind("mouseup.jsp",l),!1}})}function h(){fe&&fe.unbind("mousedown.jsp"),re&&re.unbind("mousedown.jsp")}function j(){t("html").unbind("dragstart.jsp selectstart.jsp mousemove.jsp mouseup.jsp mouseleave.jsp"),_&&_.removeClass("jspActive"),ne&&ne.removeClass("jspActive")}function g(t,e){J&&(0>t?t=0:t>te&&(t=te),e===n&&(e=G.animateScroll),e?q.animate(_,"top",t,v):(_.css("top",t),v(t)))}function v(t){t===n&&(t=_.position().top),N.scrollTop(0),ee=t;var i=0===ee,o=ee==te,s=t/te,r=-s*(Q-O);(ye!=i||Te!=o)&&(ye=i,Te=o,e.trigger("jsp-arrow-change",[ye,Te,Ce,Be])),w(i,o),V.css("top",r),e.trigger("jsp-scroll-y",[-r,i,o]).trigger("scroll")}function m(t,e){Z&&(0>t?t=0:t>ie&&(t=ie),e===n&&(e=G.animateScroll),e?q.animate(ne,"left",t,b):(ne.css("left",t),b(t)))}function b(t){t===n&&(t=ne.position().left),N.scrollTop(0),oe=t;var i=0===oe,o=oe==ie,s=t/ie,r=-s*(K-E);(Ce!=i||Be!=o)&&(Ce=i,Be=o,e.trigger("jsp-arrow-change",[ye,Te,Ce,Be])),k(i,o),V.css("left",r),e.trigger("jsp-scroll-x",[-r,i,o]).trigger("scroll")}function w(t,e){G.showArrows&&(pe[t?"addClass":"removeClass"]("jspDisabled"),ue[e?"addClass":"removeClass"]("jspDisabled"))}function k(t,e){G.showArrows&&(ge[t?"addClass":"removeClass"]("jspDisabled"),ve[e?"addClass":"removeClass"]("jspDisabled"))}function y(t,e){var n=t/(Q-O);g(n*te,e)}function C(t,e){var n=t/(K-E);m(n*ie,e)}function T(e,n,i){var o,s,r,a=0,c=0,l,p,u,d,f,h;try{o=t(e)}catch(j){return}for(s=o.outerHeight(),r=o.outerWidth(),N.scrollTop(0),N.scrollLeft(0);!o.is(".jspPane");)if(a+=o.position().top,c+=o.position().left,o=o.offsetParent(),/^body|html$/i.test(o[0].nodeName))return;l=D(),u=l+O,l>a||n?f=a-G.verticalGutter:a+s>u&&(f=a-O+s+G.verticalGutter),f&&y(f,i),p=B(),d=p+E,p>c||n?h=c-G.horizontalGutter:c+r>d&&(h=c-E+r+G.horizontalGutter),h&&C(h,i)}function B(){return-V.position().left}function D(){return-V.position().top}function H(){var t=Q-O;return t>20&&t-D()<10}function S(){var t=K-E;return t>20&&t-B()<10}function P(){N.unbind(He).bind(He,function(t,e,n,i){var o=oe,s=ee;return q.scrollBy(n*G.mouseWheelSpeed,-i*G.mouseWheelSpeed,!1),o==oe&&s==ee})}function A(){N.unbind(He)}function W(){return!1}function x(){V.find(":input,a").unbind("focus.jsp").bind("focus.jsp",function(t){T(t.target,!1)})}function Y(){V.find(":input,a").unbind("focus.jsp")}function M(){function n(){var t=oe,e=ee;switch(i){case 40:q.scrollByY(G.keyboardSpeed,!1);break;case 38:q.scrollByY(-G.keyboardSpeed,!1);break;case 34:case 32:q.scrollByY(O*G.scrollPagePercent,!1);break;case 33:q.scrollByY(-O*G.scrollPagePercent,!1);break;case 39:q.scrollByX(G.keyboardSpeed,!1);break;case 37:q.scrollByX(-G.keyboardSpeed,!1)}return o=t!=oe||e!=ee}var i,o,s=[];Z&&s.push(de[0]),J&&s.push(se[0]),V.focus(function(){e.focus()}),e.attr("tabindex",0).unbind("keydown.jsp keypress.jsp").bind("keydown.jsp",function(e){if(e.target===this||s.length&&t(e.target).closest(s).length){var r=oe,a=ee;switch(e.keyCode){case 40:case 38:case 34:case 32:case 33:case 39:case 37:i=e.keyCode,n();break;case 35:y(Q-O),i=null;break;case 36:y(0),i=null}return o=e.keyCode==i&&r!=oe||a!=ee,!o}}).bind("keypress.jsp",function(t){return t.keyCode==i&&n(),!o}),G.hideFocus?(e.css("outline","none"),"hideFocus"in N[0]&&e.attr("hideFocus",!0)):(e.css("outline",""),"hideFocus"in N[0]&&e.attr("hideFocus",!1))}function X(){e.attr("tabindex","-1").removeAttr("tabindex").unbind("keydown.jsp keypress.jsp")}function R(){if(location.hash&&location.hash.length>1){var e,n,i=escape(location.hash);try{e=t(i)}catch(o){return}e.length&&V.find(i)&&(0===N.scrollTop()?n=setInterval(function(){N.scrollTop()>0&&(T(i,!0),t(document).scrollTop(N.position().top),clearInterval(n))},50):(T(i,!0),t(document).scrollTop(N.position().top)))}}function z(){t("a.jspHijack").unbind("click.jsp-hijack").removeClass("jspHijack")}function I(){z(),t("a[href^=#]").addClass("jspHijack").bind("click.jsp-hijack",function(){var t=this.href.split("#"),e;return t.length>1&&(e=t[1],e.length>0&&V.find("#"+e).length>0)?(T("#"+e,!0),!1):void 0})}function L(){var t,e,n,i,o,s=!1;N.unbind("touchstart.jsp touchmove.jsp touchend.jsp click.jsp-touchclick").bind("touchstart.jsp",function(r){var a=r.originalEvent.touches[0];t=B(),e=D(),n=a.pageX,i=a.pageY,o=!1,s=!0}).bind("touchmove.jsp",function(r){if(s){var a=r.originalEvent.touches[0],c=oe,l=ee;return q.scrollTo(t+n-a.pageX,e+i-a.pageY),o=o||Math.abs(n-a.pageX)>5||Math.abs(i-a.pageY)>5,c==oe&&l==ee}}).bind("touchend.jsp",function(t){s=!1}).bind("click.jsp-touchclick",function(t){return o?(o=!1,!1):void 0})}function F(){var t=D(),n=B();e.removeClass("jspScrollable").unbind(".jsp"),e.replaceWith(De.append(V.children())),De.scrollTop(t),De.scrollLeft(n)}var G,q=this,V,E,O,N,K,Q,U,$,J,Z,_,te,ee,ne,ie,oe,se,re,ae,ce,le,pe,ue,de,fe,he,je,ge,ve,me,be,we,ke,ye=!0,Ce=!0,Te=!1,Be=!1,De=e.clone(!1,!1).empty(),He=t.fn.mwheelIntent?"mwheelIntent.jsp":"mousewheel.jsp";be=e.css("paddingTop")+" "+e.css("paddingRight")+" "+e.css("paddingBottom")+" "+e.css("paddingLeft"),we=(parseInt(e.css("paddingLeft"),10)||0)+(parseInt(e.css("paddingRight"),10)||0),t.extend(q,{reinitialise:function(e){e=t.extend({},G,e),o(e)},scrollToElement:function(t,e,n){T(t,e,n)},scrollTo:function(t,e,n){C(t,n),y(e,n)},scrollToX:function(t,e){C(t,e)},scrollToY:function(t,e){y(t,e)},scrollToPercentX:function(t,e){C(t*(K-E),e)},scrollToPercentY:function(t,e){y(t*(Q-O),e)},scrollBy:function(t,e,n){q.scrollByX(t,n),q.scrollByY(e,n)},scrollByX:function(t,e){var n=B()+Math[0>t?"floor":"ceil"](t),i=n/(K-E);m(i*ie,e)},scrollByY:function(t,e){var n=D()+Math[0>t?"floor":"ceil"](t),i=n/(Q-O);g(i*te,e)},positionDragX:function(t,e){m(t,e)},positionDragY:function(t,e){g(t,e)},animate:function(t,e,n,i){var o={};o[e]=n,t.animate(o,{duration:G.animateDuration,easing:G.animateEase,queue:!1,step:i})},getContentPositionX:function(){return B()},getContentPositionY:function(){return D()},getContentWidth:function(){return K},getContentHeight:function(){return Q},getPercentScrolledX:function(){return B()/(K-E)},getPercentScrolledY:function(){return D()/(Q-O)},getIsScrollableH:function(){return Z},getIsScrollableV:function(){return J},getContentPane:function(){return V},scrollToBottom:function(t){g(te,t)},hijackInternalLinks:function(){I()},destroy:function(){F()}}),o(i)}return e=t.extend({},t.fn.jScrollPane.defaults,e),t.each(["mouseWheelSpeed","arrowButtonSpeed","trackClickSpeed","keyboardSpeed"],function(){e[this]=e[this]||e.speed}),this.each(function(){var n=t(this),o=n.data("jsp");o?o.reinitialise(e):(o=new i(n,e),n.data("jsp",o))})},t.fn.jScrollPane.defaults={showArrows:!1,maintainPosition:!0,stickToBottom:!1,stickToRight:!1,clickOnTrack:!0,autoReinitialise:!1,autoReinitialiseDelay:500,verticalDragMinHeight:0,verticalDragMaxHeight:99999,horizontalDragMinWidth:0,horizontalDragMaxWidth:99999,contentWidth:n,animateScroll:!1,animateDuration:300,animateEase:"linear",hijackInternalLinks:!1,verticalGutter:4,horizontalGutter:4,mouseWheelSpeed:0,arrowButtonSpeed:0,arrowRepeatFreq:50,arrowScrollOnHover:!1,trackClickSpeed:0,trackClickRepeatFreq:70,verticalArrowPositions:"split",horizontalArrowPositions:"split",enableKeyboardNavigation:!0,hideFocus:!1,keyboardSpeed:0,initialDelay:300,speed:30,scrollPagePercent:.8}}(jQuery,this);