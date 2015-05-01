function form_validation() {
	// Nom
    jQuery("#nom").focusout(function() {
		if (jQuery("#nom").val() == "" ) {
			jQuery(".nom").next(".error-message").css('display','block');
			jQuery("#nom").css("border","1px solid #FF0000");
		} else {
			jQuery(".nom").next(".error-message").css('display','none');
			jQuery("#nom").css("border","1px solid #008462");
		}
	});
	
	// Email
	jQuery("#email").focusout(function() {
		if (jQuery("#email").val() == "") {
			jQuery(".email").next(".error-message").css('display','block').text("Le champ Email est obligatoire");
			jQuery("#email").css("border","1px solid #FF0000");
		} else if (!jQuery('#email').val().match(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i)) {
			jQuery(".email").next(".error-message").css('display','block').text("Adresse email invalide");
			jQuery("#email").css("border","1px solid #FF0000");
		} else {
			jQuery(".email").next(".error-message").css('display','none').text("");
			jQuery("#email").css("border","1px solid #008462");
		}
	});
	
	// Votre message
    jQuery("#message").focusout(function() {
		if (jQuery("#message").val() == "" ) {
			jQuery(".message").next(".alertArea").css('display','block');
			jQuery("#message").css("border","1px solid #FF0000");
		} else {
			jQuery(".message").next(".alertArea").css('display','none');
			jQuery("#message").css("border","1px solid #008462");
		}
	});
	
	jQuery('#sendBox').click(function() {
		valid = true;
		if (jQuery('#nom').val() == "") {
			valid = false;
		}
		if (jQuery('#email').val() == "") {
			valid = false;
		}
		if (jQuery('#message').val() == "") {
			valid = false;
		}				
		return valid;
	});
}