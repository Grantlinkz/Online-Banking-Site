<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <link rel="stylesheet" href="toastr.css" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<!-- <script src="toastr.js"></script> -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
</head>
<body>
<style> #toast-container > .toast-error { background-color: #BD362F; } </style>
</body>
</html>
<?php

	require "mail.php";
	// require "regmail.php";
	require "functions.php";
	// require("../scripts/functions.php");
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "<h3>Your Email Verifivation Code Is: </h3>" . $vars['code'];
		$subject = "Email Verification From " .$display_name;
		$recipient = $vars['email'];
		// $headers = "From: grantlinkz@gmail.com" . "\r\n" .
		// "CC: grantlinkz@gmail.com";
		// echo $message;
		// die();
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$query = $conn->query("SELECT * FROM setting WHERE id = 1") or die(mysqli_error($conn));
 		while($rows = mysqli_fetch_array($query)){
    	$sitename = $rows["name"];}

		$smtpquery = $conn->query("SELECT * FROM smtp_setting WHERE id = 1");
    	while($rowsmtp = mysqli_fetch_assoc($smtpquery)){
		$display_name = $rowsmtp["display_name"];}

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update register set email_verified = email where id = '$id' limit 1";
					
					database_run($query);
				// account details mail
				require('regmail.php');
				$recipient = $vars['email'];
				reg_mail($recipient);
				// account details mail
					// header("Location: verification_log.php");
					// die;
					?>
					<meta http-equiv="refresh" content="2; url=verification_log.php">
					<?php
				}else{
					// echo "Code expired";
					echo "
					<script>    
					toastr.error('Please Reload Page', 'Code Has Expired!', {\"progressBar\": true});
					document.getElementByClassName('code').style.borderColor='red';
					</script>";
					?>
					<meta http-equiv="refresh" content="2; url=verify.php">
					<?php
				}

			}else{
				// echo "wrong code";
				echo "
					<script>    
					toastr.error('Please Reload Page', 'Wrong Code!', {\"progressBar\": true});
					document.getElementByClassName('code').style.borderColor='red';
					</script>";
					?>
					<meta http-equiv="refresh" content="2; url=verify.php">
					<?php
			}
		}else{
			// echo "You're already verified";
			echo "
					<script>    
					toastr.error('Please Reload Page', 'You're already verified!', {\"progressBar\": true});
					document.getElementByClassName('code').style.borderColor='red';
					</script>";
					?>
					<meta http-equiv="refresh" content="2; url=verify.php">
					<?php
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $sitename?> Verification Code </title>
</head>
<body>

	<?php include('email_verification.php');?>
 	<!-- <div>
			<br>an email was sent to your address. paste the code from the email here<br>
			<div class="logo is-animetion">
			<span><?php echo $vars['code']?></span>
			</div>
		<div> -->
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
<!-- 
		</div><br>
		<form method="post">
			<input type="text" name="code" placeholder="Enter your Code"><br>
 			<br>
			<input type="submit" value="Verify">
		</form>
	</div> -->
	
<style>
	.logo.is-animetion {
  margin-top: 0.6em;
  display: flex;
  justify-content: center;
  align-items: center;
  color:  #4B0082;
  letter-spacing: 10px;
  font-size: 1.5em;
  font-family: 'Courgette', cursive;
}

.logo.is-animetion span {
  display: inline-block;
  animation: wave-text 1s ease-in-out infinite;
}

.logo.is-animetion {
  span:nth-of-type(1){ animation-delay: 0.0s; }
  span:nth-of-type(2){ animation-delay: 0.1s; }
  span:nth-of-type(3){ animation-delay: 0.2s; }
  span:nth-of-type(4){ animation-delay: 0.3s; }
  span:nth-of-type(5){ animation-delay: 0.4s; }
}

@keyframes wave-text{
  00%{
    transform: translateY(0em);
  }
  60%{
    transform: translateY(-0.6em);
  }
  100%{
    transform: translateY(0em);
  }
}

</style>

</body>

<!--<script src="tawkto.js" type="text/javascript"></script>-->
</html>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '3506cb7a7ab0e4e9bed05759ad95d3d4e6cd1108';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>