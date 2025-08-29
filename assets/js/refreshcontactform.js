function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(document).ready(function() {
	/* Contact Us Form */
	$("#contactformsubmit").click(function() {
		var name = $("#fname").val();
		var email = $("#emailform").val();
		var message = $("#msg").val();
		if (name == '')
		{
			$('#fspreview').text("");
			$('#fepreview').text("Name Required.");
			document.getElementById("fname").focus();
			return false;
		}
		else if(email == '')
		{
			$('#fspreview').text("");
			$('#fepreview').text("Email Address Required.");
			document.getElementById("emailform").focus();
			return false;
		}
		else if(!validateEmail(email)) {
			$('#fspreview').text("");
			$('#fepreview').text("Invalid Email Address.");
			document.getElementById("emailform").focus();
			return false;
		}
		else if(message == '')
		{
			$('#fspreview').text("");
			$('#fepreview').text("Message Required.");
			document.getElementById("msg").focus();
			return false;
		}
		else
		{
			$.post("contactform_submit.php", {
			name1: name,
			email1: email,
			message1: message,
			}, function(data)
			{
				$('#fepreview').text("");
				$('#fspreview').text("Thank You! Your request has been sent successfully.");
				$('#contactform')[0].reset();
			});
		}
	});
});