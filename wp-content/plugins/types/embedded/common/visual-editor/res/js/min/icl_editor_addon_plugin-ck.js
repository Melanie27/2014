function icl_editor_popup(e){icl_editor_toggle(e),icl_editor_resize_popup(e),icl_editor_bind_auto_close()}function icl_editor_toggle(e){jQuery(".editor_addon_dropdown").each(function(){e.attr("id")!=jQuery(this).attr("id")?jQuery(this).css("visibility","hidden").css("display","inline"):"visible"==jQuery(this).css("visibility")?jQuery(this).css("visibility","hidden"):jQuery(this).css("visibility","visible").css("display","inline")})}function icl_editor_resize_popup(e){jQuery(e).find(".direct-links").hide(),jQuery(e).find(".editor-addon-link-to-top").hide();var i=jQuery(e).height(),t=Math.round(jQuery("#post-body-content").width()+20);icl_editor_resize_popup_width(e,t),i>iclEditorHeight&&(jQuery(e).find(".direct-links").show(),jQuery(e).find(".editor-addon-link-to-top").show(),icl_editor_resize_popup_height(e,iclEditorHeight)),iclEditorHeightMin>i&&icl_editor_resize_popup_height(e,iclEditorHeight),jQuery(e).css("overflow","auto"),jQuery(e).css("padding","0px")}function icl_editor_resize_popup_width(e,i){jQuery(e).width(i).css("width",i+"px")}function icl_editor_resize_popup_height(e,i){jQuery(e).height(i).css("height",i+"px")}function editor_decode64(e){var i="",t,r,o="",n,d,s,c="",a=0,u=/[^A-Za-z0-9\+\/\=]/g;u.exec(e)&&alert("There were invalid base64 characters in the input text.\nValid base64 characters are A-Z, a-z, 0-9, '+', '/',and '='\nExpect errors in decoding."),e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");do n=keyStr.indexOf(e.charAt(a++)),d=keyStr.indexOf(e.charAt(a++)),s=keyStr.indexOf(e.charAt(a++)),c=keyStr.indexOf(e.charAt(a++)),t=n<<2|d>>4,r=(15&d)<<4|s>>2,o=(3&s)<<6|c,i+=String.fromCharCode(t),64!=s&&(i+=String.fromCharCode(r)),64!=c&&(i+=String.fromCharCode(o)),t=r=o="",n=d=s=c="";while(a<e.length);return unescape(editor_utf8_decode(i))}function editor_utf8_decode(e){for(var i="",t=0,r=c1=c2=0;t<e.length;)r=e.charCodeAt(t),128>r?(i+=String.fromCharCode(r),t++):r>191&&224>r?(c2=e.charCodeAt(t+1),i+=String.fromCharCode((31&r)<<6|63&c2),t+=2):(c2=e.charCodeAt(t+1),c3=e.charCodeAt(t+2),i+=String.fromCharCode((15&r)<<12|(63&c2)<<6|63&c3),t+=3);return i}function insert_b64_shortcode_to_editor(e,i){var t=editor_decode64(e);0==t.indexOf("[types")&&t.indexOf("[/types")===!1&&(t+="[/types]"),window.wpcfActiveEditor=i,icl_editor.insert(t)}function wpv_on_search_filter(e){var i=jQuery(e).val(),t=e.parentNode.parentNode,r=jQuery(t).find(".group .item");jQuery(t).find(".search_clear").css("display",""==i?"none":"inline"),jQuery(r).each(function(){""==i||jQuery(this).text().search(new RegExp(i,"i"))>-1?jQuery(this).css("display","inline"):jQuery(this).css("display","none")}),wpv_hide_top_groups(t)}function wpv_hide_top_groups(e){var i=jQuery(e).find(".group-title");jQuery(i).each(function(){var e=jQuery(this).parent(),i=!1;jQuery(e).find(".item").each(function(){return"inline"==jQuery(this).css("display")?(i=!0,!1):void 0}),i?jQuery(this).css("display","block"):jQuery(this).css("display","none")})}function wpv_search_clear(e){var i=e.parentNode.parentNode,t=jQuery(i).find(".search_field");t.val(""),wpv_on_search_filter(t[0])}function icl_editor_bind_auto_close(){jQuery("body").bind("click",function(e){var i=jQuery("#add_field_popup .editor_addon_dropdown");jQuery(e.target).hasClass("wpv_add_fields_button")||jQuery(e.target).parents(".editor_addon_wrapper").length<1&&(jQuery(".editor_addon_dropdown").css("visibility","hidden").css("display","inline"),i.removeClass("icl_editor_click_binded"),jQuery(this).unbind(e))})}var iclEditorWidth=550,iclEditorWidthMin=195,iclEditorHeight=420,iclEditorHeightMin=195,iclCodemirror=new Array;jQuery(document).ready(function(){window.wpcfActiveEditor="content",jQuery(".wp-media-buttons a, .wpcf-wysiwyg .editor_addon_wrapper .item, #postdivrich .editor_addon_wrapper .item, #wpv_filter_meta_html_admin_edit .item, #wpv_layout_meta_html_admin_edit .item").on("click",function(){window.wpcfActiveEditor=jQuery(this).parents(".wpcf-wysiwyg, #postdivrich, #wpv_layout_meta_html_admin, #wpv_filter_meta_html_admin").find("textarea#content, textarea.wpcf-wysiwyg, textarea#wpv_layout_meta_html_content, textarea#wpv_filter_meta_html_content").attr("id")}),jQuery(".wpv_add_fields_button").on("click",function(e){var i=jQuery("#add_field_popup .editor_addon_dropdown");if("hidden"==i.css("visibility")){jQuery("#add_field_popup .editor_addon_wrapper .vicon").css("display","none"),jQuery("#add_field_popup").show(),i.css("margin","-25px 0 0 -15px"),i.css("right","0");var t=jQuery(".wpv_add_fields_button").position();i.css("top",t.top+jQuery(".wpv_add_fields_button").height()-iclEditorHeight+"px"),i.css("left",t.left+jQuery(".wpv_add_fields_button").width()+"px"),icl_editor_popup(i)}else i.css("visibility","hidden")}),jQuery("#post").on("click",".editor_addon_wrapper img",function(e){var i=jQuery(this).parent().find(".editor_addon_dropdown");"hidden"==i.css("visibility")?(wpv_hide_top_groups(jQuery(this).parent()),icl_editor_popup(i)):jQuery(".editor_addon_dropdown").css("visibility","hidden").css("display","inline"),jQuery("#content_ifr").contents().bind("click",function(e){jQuery(".editor_addon_dropdown").css("visibility","hidden").css("display","inline")}),jQuery(document).bind("keyup",function(e){27==e.keyCode&&(jQuery(".editor_addon_dropdown").css("visibility","hidden").css("display","inline"),jQuery(this).unbind(e))})}),jQuery(".editor_addon_wrapper .item, .editor_addon_dropdown .close").on("click",function(e){jQuery(".editor_addon_dropdown").css("visibility","hidden").css("display","inline")}),jQuery(".editor-addon-top-link").on("click",function(){var e=jQuery(this).parents(".editor_addon_dropdown"),i=jQuery(this).parents("li").find("."+jQuery(this).data("editor_addon_target")+"-target"),t=i.position(),r=t.top;e.animate({scrollTop:Math.round(r)},"fast")})}),jQuery.expr.filters.icl_offscreen=function(e){var i=jQuery(e).offset();return e.offsetLeft+e.offsetWidth<0||e.offsetTop+e.offsetHeight<0||e.offsetLeft>window.innerWidth||e.offsetTop>window.innerHeight};var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",icl_editor=function(e,i){function t(i){var t,r=i.attr("id");return r&&"#"==r.charAt(0)&&(r=r.substring(1)),e.tinyMCE&&r&&null!=(t=e.tinyMCE.get(r))&&0==t.isHidden()?t:!1}function r(e){var i=e[0].nextSibling;return i&&e.is("textarea")&&i.CodeMirror&&e[0]==i.CodeMirror.getTextArea()?i.CodeMirror:!1}function o(e){e||(e=i("#content"));var t=r(e);return t?t.getValue():e.val()}function n(e,i,o){var n=e,d=t(n),s=r(n);if(d)d.focus(),"undefined"!=typeof o&&o?d.execCommand("mceReplaceContent",!1,i+d.selection.getContent({format:"raw"})+o):d.execCommand("mceInsertContent",!1,i);else if(s){if(s.focus(),!s.somethingSelected()){var c=s.getCursor(!0);s.setSelection(c,c)}"undefined"!=typeof o&&o?s.replaceSelection(i+s.getSelection()+o,"end"):s.replaceSelection(i,"end")}else if(e=n[0],e.focus(),document.selection)l=document.selection.createRange(),l.text="undefined"!=typeof o&&o?i+l.text+o:i;else if(null!=e.selectionStart&&void 0!=e.selectionStart){var a=parseInt(e.selectionStart),u=parseInt(e.selectionEnd);if("undefined"!=typeof o&&o){var l=e.value.substring(a,u);e.value=e.value.substring(0,a)+i+l+o+e.value.substring(u,e.value.length)}else e.value=e.value.substring(0,a)+i+e.value.substring(u,e.value.length)}else e.value+="undefined"!=typeof o&&o?i+o:i}function d(t){n(i("#"+e.wpcfActiveEditor),t)}function s(t,r){if(e.CodeMirror){if(!r&&e.iclCodemirror[t])return e.iclCodemirror[t].toTextArea(),e.iclCodemirror[t]=!1,jQuery("#"+t).focus(),!r;if(r&&!e.iclCodemirror[t]){var o=i("#"+t).closest(".postbox"),n=!1,d=!1;return(o.hasClass("closed")||"none"==o.css("display"))&&(n=!0,o.removeClass("closed")),"none"==o.css("display")&&(d="none",o.css("display","block")),e.iclCodemirror[t]=CodeMirror.fromTextArea(document.getElementById(t),{mode:"myshortcodes",tabMode:"indent",lineWrapping:!0,lineNumbers:!0,autofocus:!0}),"none"==d&&o.css("display","none"),n&&o.addClass("closed"),jQuery("#"+t).focus(),e.iclCodemirror[t]}}return!1}return{isTinyMce:t,isCodeMirror:r,getContent:o,InsertAtCursor:n,toggleCodeMirror:s,insert:function(e){d(e)},codemirror:function(e,i){return s(e,i)},codemirrorGet:function(i){return e.iclCodemirror[i]}}}(window,jQuery,void 0);