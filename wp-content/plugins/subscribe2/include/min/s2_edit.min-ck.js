function s2_show(e){return jQuery("#s2"+e+"_2").show(),jQuery("#s2"+e+"_1").hide(),!1}function s2_hide(e){return jQuery("#s2"+e+"_1").show(),jQuery("#s2"+e+"_2").hide(),!1}function s2_update(e){var u=jQuery('input[name="'+e+'"]').val();jQuery('input[name="'+e+'"]').val(u),jQuery("#s2"+e).html(u),s2_hide(e)}function s2_revert(e){var u=jQuery("#js"+e).val();jQuery('input[name="'+e+'"]').val(u),jQuery("#s2"+e).html(u),s2_hide(e)}jQuery(document).ready(function(){jQuery("#s2bcclimit_2").hide(),jQuery("#s2entries_2").hide()});