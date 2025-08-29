function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(document).ready(function() {
	/* Footer Contact Us Form */
	$("#footersubmit").click(function() {
		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();
		if (name == '')
		{
			$('#spreview').text("");
			$('#epreview').text("Name Required.");
			document.getElementById("name").focus();
			return false;
		}
		else if(email == '')
		{
			$('#spreview').text("");
			$('#epreview').text("Email Address Required.");
			document.getElementById("email").focus();
			return false;
		}
		else if(!validateEmail(email)) {
			$('#spreview').text("");
			$('#epreview').text("Invalid Email Address.");
			document.getElementById("email").focus();
			return false;
		}
		else if(message == '')
		{
			$('#spreview').text("");
			$('#epreview').text("Message Required.");
			document.getElementById("message").focus();
			return false;
		}
		else
		{
			$.post("footer_contactform_submit.php", {
			name1: name,
			email1: email,
			message1: message,
			}, function(data)
			{
				$('#epreview').text("");
				$('#spreview').text("Thank You! Your request has been sent successfully.");
				$('#footercontactform')[0].reset();
			});
		}
	});
});