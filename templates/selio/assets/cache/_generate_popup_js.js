;$('document').ready(function(){$('form#popup_form_login').submit(function(o){o.preventDefault();var e=$('form#popup_form_login').serializeArray();$('form#popup_form_login .ajax-indicator').removeClass('hidden');$.post('http://localhost/themes-customization/index.php/api/login_form/en',e,function(o){if(o.success){$('form#popup_form_login .alerts-box').html('');if(o.message){ShowStatus.show(o.message)};if(o.redirect){};location.reload()}else{if(o.message){ShowStatus.show(o.message)};$('form#popup_form_login .alerts-box').html(o.errors)}}).success(function(){$('form#popup_form_login .ajax-indicator').addClass('hidden')});return!1})})