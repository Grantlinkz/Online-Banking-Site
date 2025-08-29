<?php

	require "functions.php";
	check_login();
	check_verified();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<?php
		if(check_verified()){
			// return false;
			header("Location: verification_log.php");
			die();
		}else{
			// return true;
			// header("Location: request_verification.php");
			include("request_verification.php");
		}
	?>
	<!-- ayszfthbhigzdbke -->
	
 

</body>
</html>