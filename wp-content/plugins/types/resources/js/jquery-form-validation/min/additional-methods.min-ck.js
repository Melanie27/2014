!function(){function e(e){return e.replace(/<.[^<>]*?>/g," ").replace(/&nbsp;|&#160;/gi," ").replace(/[0-9.(),;:!?%#$'"_+=\/-]*/g,"")}jQuery.validator.addMethod("maxWords",function(t,F,a){return this.optional(F)||e(t).match(/\b\w+\b/g).length<a},jQuery.validator.format("Please enter {0} words or less.")),jQuery.validator.addMethod("minWords",function(t,F,a){return this.optional(F)||e(t).match(/\b\w+\b/g).length>=a},jQuery.validator.format("Please enter at least {0} words.")),jQuery.validator.addMethod("rangeWords",function(t,F,a){return this.optional(F)||e(t).match(/\b\w+\b/g).length>=a[0]&&t.match(/bw+b/g).length<a[1]},jQuery.validator.format("Please enter between {0} and {1} words."))}(),jQuery.validator.addMethod("letterswithbasicpunc",function(e,t){return this.optional(t)||/^[a-z-.,()'\"\s]+$/i.test(e)},"Letters or punctuation only please"),jQuery.validator.addMethod("alphanumeric",function(e,t){return this.optional(t)||/^[\w\s]+$/i.test(e)},"Letters, numbers, spaces or underscores only please"),jQuery.validator.addMethod("lettersonly",function(e,t){return this.optional(t)||/^[a-z]+$/i.test(e)},"Letters only please"),jQuery.validator.addMethod("nowhitespace",function(e,t){return this.optional(t)||/^\S+$/i.test(e)},"No white space please"),jQuery.validator.addMethod("ziprange",function(e,t){return this.optional(t)||/^90[2-5]\d\{2}-\d{4}$/.test(e)},"Your ZIP-code must be in the range 902xx-xxxx to 905-xx-xxxx"),jQuery.validator.addMethod("integer",function(e,t){return this.optional(t)||/^-?\d+$/.test(e)},"A positive or negative non-decimal number please"),jQuery.validator.addMethod("vinUS",function(e){if(17!=e.length)return!1;var t,F,a,u,d,r=["A","B","C","D","E","F","G","H","J","K","L","M","N","P","R","S","T","U","V","W","X","Y","Z"],n=[1,2,3,4,5,6,7,8,1,2,3,4,5,7,9,2,3,4,5,6,7,8,9],i=[8,7,6,5,4,3,2,10,0,9,8,7,6,5,4,3,2],o=0;for(t=0;17>t;t++){if(u=i[t],a=e.slice(t,t+1),8==t&&(d=a),isNaN(a)){for(F=0;F<r.length;F++)if(a.toUpperCase()===r[F]){a=n[F],a*=u,isNaN(d)&&8==F&&(d=r[F]);break}}else a*=u;o+=a}return e=o%11,10==e&&(e="X"),e==d?!0:!1},"The specified vehicle identification number (VIN) is invalid."),jQuery.validator.addMethod("dateITA",function(e,t){var F=!1;if(/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(e)){var a=e.split("/");F=parseInt(a[0],10);var u=parseInt(a[1],10);a=parseInt(a[2],10);var d=new Date(a,u-1,F);F=d.getFullYear()==a&&d.getMonth()==u-1&&d.getDate()==F?!0:!1}else F=!1;return this.optional(t)||F},"Please enter a correct date"),jQuery.validator.addMethod("dateNL",function(e,t){return this.optional(t)||/^\d\d?[\.\/-]\d\d?[\.\/-]\d\d\d?\d?$/.test(e)},"Vul hier een geldige datum in."),jQuery.validator.addMethod("time",function(e,t){return this.optional(t)||/^([01][0-9])|(2[0123]):([0-5])([0-9])$/.test(e)},"Please enter a valid time, between 00:00 and 23:59"),jQuery.validator.addMethod("phoneUS",function(e,t){return e=e.replace(/\s+/g,""),this.optional(t)||e.length>9&&e.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/)},"Please specify a valid phone number"),jQuery.validator.addMethod("phoneUK",function(e,t){return this.optional(t)||e.length>9&&e.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/)},"Please specify a valid phone number"),jQuery.validator.addMethod("mobileUK",function(e,t){return this.optional(t)||e.length>9&&e.match(/^((0|\+44)7(5|6|7|8|9){1}\d{2}\s?\d{6})$/)},"Please specify a valid mobile number"),jQuery.validator.addMethod("strippedminlength",function(e,t,F){return jQuery(e).text().length>=F},jQuery.validator.format("Please enter at least {0} characters")),jQuery.validator.addMethod("email2",function(e,t){return this.optional(t)||/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(e)},jQuery.validator.messages.email),jQuery.validator.addMethod("url2",function(e,t){return this.optional(t)||/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)},jQuery.validator.messages.url),jQuery.validator.addMethod("creditcardtypes",function(e,t,F){return/[^0-9-]+/.test(e)?!1:(e=e.replace(/\D/g,""),t=0,F.mastercard&&(t|=1),F.visa&&(t|=2),F.amex&&(t|=4),F.dinersclub&&(t|=8),F.enroute&&(t|=16),F.discover&&(t|=32),F.jcb&&(t|=64),F.unknown&&(t|=128),F.all&&(t=255),1&t&&/^(51|52|53|54|55)/.test(e)?16==e.length:2&t&&/^(4)/.test(e)?16==e.length:4&t&&/^(34|37)/.test(e)?15==e.length:8&t&&/^(300|301|302|303|304|305|36|38)/.test(e)?14==e.length:16&t&&/^(2014|2149)/.test(e)?15==e.length:32&t&&/^(6011)/.test(e)?16==e.length:64&t&&/^(3)/.test(e)?16==e.length:64&t&&/^(2131|1800)/.test(e)?15==e.length:128&t?!0:!1)},"Please enter a valid credit card number."),jQuery.validator.addMethod("ipv4",function(e,t){return this.optional(t)||/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/i.test(e)},"Please enter a valid IP v4 address."),jQuery.validator.addMethod("ipv6",function(e,t){return this.optional(t)||/^((([0-9A-Fa-f]{1,4}:){7}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}:[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){5}:([0-9A-Fa-f]{1,4}:)?[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){4}:([0-9A-Fa-f]{1,4}:){0,2}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){3}:([0-9A-Fa-f]{1,4}:){0,3}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){2}:([0-9A-Fa-f]{1,4}:){0,4}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(([0-9A-Fa-f]{1,4}:){0,5}:((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(::([0-9A-Fa-f]{1,4}:){0,5}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|([0-9A-Fa-f]{1,4}::([0-9A-Fa-f]{1,4}:){0,5}[0-9A-Fa-f]{1,4})|(::([0-9A-Fa-f]{1,4}:){0,6}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){1,7}:))$/i.test(e)},"Please enter a valid IP v6 address."),jQuery.validator.addMethod("nospecialchars",function(e,t){return this.optional(t)||/^[a-zA-Z0-9\s\_\-]+$/i.test(e)},"No special characters please"),jQuery.validator.addMethod("rewriteslug",function(e,t){return this.optional(t)||/^[a-zA-Z0-9\_\-\%\/]+$/i.test(e)},"No special characters please");