<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link href="css/toastr.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>

    <link href="assets/css/digital_forest_team_assets_main.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="https://kit.fontawesome.com/128925c979.js" crossorigin="anonymous"></script>

<!-- Obiora Styling -->
<link rel="stylesheet" href="../scss/sweetalert.css">
<!-- <link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0"> -->
<link id="skin-default" rel="stylesheet" href="../assets2/css/theme.css?ver=2.4.0">
<link rel="stylesheet" type="text/css" href="../assets2/css/libs/fontawesome-icons.css"> 
<link href="../css2/toastr.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/css/intlTelInput.css">
<!-- Obiora Stling -->

    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
</head>
<body>
    
</body>
</html>

<?php

    include('connect.php');
    // include('../account/crypto23.php');
    //  include('../account/header.php');
    require_once('functions.php');
    require ('../includes/PHPMailer.php');
    require ('../includes/SMTP.php');
    require ('../includes/Exception.php');    
    //defining name spacess
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;  
//DELETE TRANSACTION

if($_GET['action']=="delete_trx"){
	$id = $_GET['id'];
   // echo $id;
	$query = $conn->query("DELETE FROM register WHERE id = '$id'");
	echo "<script>
      Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Account Deleted',
      showConfirmButton: false,
      timer: 1500
      });
      var delayInMilliseconds = 2000;
          setTimeout(function() {
            window.location.href='../admin/users.php';
          }, delayInMilliseconds);
    </script>";}

    if($_GET['action']=="delete_trp"){
      $id = $_GET['refNumber'];
      // echo $id;
      $query = $conn->query("DELETE FROM transactions WHERE refNumber = '$id'");
      echo "<script>
         Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Transaction Deleted',
         showConfirmButton: false,
         timer: 1500
         });
         var delayInMilliseconds = 2000;
             setTimeout(function() {
               window.location.href='../admin/transactions.php';
             }, delayInMilliseconds);
       </script>";}

 //DEPOSIT CRYPTO

 if($_GET['action'] == "deposit_crypto"){
  require_once('userdata.php');
 	if (isset($_POST)) {
 	$coin = trim($_POST['coin']);
 	$amount = trim($_POST['amount']);
    $errorMsg = 0;

 	if(empty($coin)){
		echo"<script>document.getElementById('coin').style.borderColor='red';</script>";
	}else{echo"<script>document.getElementById('coin').style.borderColor='green';</script>";}
	if(empty($amount)){
		echo"<script>document.getElementById('amount').style.borderColor='red';</script>";
	}else{echo"<script>document.getElementById('amount').style.borderColor='green';</script>";}
 	

 	if (empty($coin) || empty($amount)) {
 	$errorMsg = 1;	
    echo "<script>toastr.error('All fields are required', 'An Occured', {\"progressBar\": true});</script>";
 	die();	
 	}

 	if($amount < 10){
 	$errorMsg = 1;	
 	 echo "<script>toastr.error('Minimum of USD 10.00 is required', 'An Occured', {\"progressBar\": true});</script>";
 	 echo"<script>document.getElementById('amount').style.borderColor='red';</script>";
 	die();	
 	}else {echo"<script>document.getElementById('amount').style.borderColor='green';</script>";}

 	if($errorMsg == 0){
 		$query = $conn->query("SELECT * FROM cryptos WHERE code = '$coin'");
 		$coindata = mysqli_fetch_array($query);
 		$_SESSION['deposit_crypto'] = "";

     if(empty($address)){
      $address = "No Address Provided";
     }
     $query1 = $conn->query("SELECT * FROM cryptos WHERE code = '$coin'");
     $coindata = mysqli_fetch_array($query1);
         $dateCreated = date("d M Y, H:i A");
 
    /*     if(!empty($amount)){
             
           $_SESSION['deposit_crypto'] = 1;*/
             $query2 = $conn->query("INSERT INTO crypto_deposits (coin, address, datecreated, userid, status, amount, fullname)VALUES('$coin', '$address', '$dateCreated', '$userid', 'pending', '$amount', '$fullname')");
 		
 		?>
      <script type="text/javascript">
         		$("#myModal").modal("show");
                 jQuery("#myModal").on("shown.bs.modal", function() {
                 jQuery(this).data("bs.modal").options.backdrop = "static";
                 jQuery(this).data("bs.modal").options.keyboard = false;
                  });
         	</script>

            <!-- My Editted Part -->
                <?php 
                //   header("location:../account/crypto24.php");
                include('../account/crypto23.php');
                // include('../account/header2.php');
                ?>
                <!-- My Editted Part -->


 		<?php
 	}

 }

}

//CONFIRM CRYPTO DEPOSIT

if ($_GET['action'] == "confirm_crypto") {
	require_once('userdata.php');
	if (isset($_POST)) {
	  $_SESSION['deposit_crypto'] == "";
		$coin = $_POST['coin'];
		$address = $_POST['address'];
		$amount = $_POST['amount'];
    $fullname = $_POST['fullname'];
    
		
		if(empty($address)){
		 $address = "No Address Provided";
		}
		$query1 = $conn->query("SELECT * FROM cryptos WHERE code = '$coin'");
		$coindata = mysqli_fetch_array($query1);
        $dateCreated = date("d M Y, H:i A");

   /*     if(!empty($amount)){
            
        	$_SESSION['deposit_crypto'] = 1;*/
            // $query2 = $conn->query("INSERT INTO crypto_deposits (coin, address, datecreated, userid, status, amount, fullname)VALUES('$coin', '$address', '$dateCreated', '$userid', 'pending', '$amount', '$fullname')");
           // include('../email/crypto-deposit-mail.php');
           /* $query3 = $conn->query("SELECT * FROM wallets WHERE userid = '$userid' and coin = '$coin'");
            if(mysqli_num_rows($query3) < 1){

            	$sql = $conn->query("INSERT INTO wallets (coin, datecreated, lastdeposit, userid, balance) VALUES ('$coin', '$dateCreated', '$dateCreated', '$userid', '$amount')");
            }else{
            	$r = mysqli_fetch_array($query3);
            	$newBal = ($r['balance'] + $amount);
            	$idd = $r['id'];
            	$sql = $conn->query("UPDATE wallets SET balance = '$newBal', datecreated = '$dateCreated' WHERE id = '$idd'");
            } */
         $token = randomString(64);
        //  header("location:../account/crypto24.php");
        echo "<script>location.href='../account/crypto.php?action=deposit_successful?token=$token&amount=$amount&coin=$coin';</script>";
    //    echo "<script>window.location.href='../personal-banking/crypto?action=deposit_successful?token=$token&amount=$amount&coin=$coin';</script>";
       /* }else{
        	header("location:../personal-banking/crypto");}*/


	}
	
}

//WITHDRAW CRYPTO CURRENCY
 if($_GET['action'] == "withdraw_crypto"){
  if (isset($_POST)) {
  	require_once('userdata.php');
  	$coin = trim($_POST['coin']);
 	$amount = trim($_POST['amount']);
 	$destination = trim($_POST['destination']);
    $errorMsg = 0;

 	if(empty($coin)){
		echo"<script>document.getElementById('coin').style.borderColor='red';</script>";
	}else{echo"<script>document.getElementById('coin').style.borderColor='green';</script>";}
	if(empty($amount)){
		echo"<script>document.getElementById('amount').style.borderColor='red';</script>";
	}else{echo"<script>document.getElementById('amount').style.borderColor='green';</script>";}
	if(empty($destination)){
		echo"<script>document.getElementById('destination').style.borderColor='red';</script>";
	}else{echo"<script>document.getElementById('destination').style.borderColor='green';</script>";}
 	

 	if (empty($coin) || empty($amount) || empty($destination)) {
 	$errorMsg = 1;	
    echo "<script>toastr.error('All fields are required', 'An Occured', {\"progressBar\": true});</script>";
 	die();	
 	}
    $query2 = $conn->query("SELECT * FROM wallets WHERE userid = '$userid' and coin = '$coin'");
    // ($userdetails = mysqli_fetch_array($query2));
    //     $bal = $userdetails['balance']; 
    if(mysqli_num_rows($query2) < 1){
    $bal = 0;
    }else{
         $r = mysqli_fetch_array($query2);
         $bal = $r['balance'];
     }

    if($bal == 0) {
    $errorMsg = 1;	
    echo 
    "<script>
      Swal.fire({
      icon: 'error',
      text: 'You currently do not have any $coin crypto asset. Kindly make a deposit before applying for a Withdrawal',
      showConfirmButton: true,
      });
    </script>";
 	die();	
    }
    
    if($amount > cryptoConverterB($bal, $coin)){
    $errorMsg = 1;	
    echo "<script>
      Swal.fire({
      icon: 'error',
      title: 'An Occured',
      text: 'Insufficient $coin balance ',
      showConfirmButton: true,
      });
    </script>";
 	die();
    }
    
    if($errorMsg == 0){
    $dateCreated = date("d M Y, H:i A");
    $query1 = $conn->query("INSERT INTO crypto_withdrawals(userid, amount, coin, datecreated, wallet, status)VALUES('$userid', '$amount', '$coin', '$dateCreated', '$destination', 'pending')");
    $newBal = ($bal - cryptoConverter2B($amount, $coin));
    $query2 = $conn->query("UPDATE wallets SET balance = '$newBal' WHERE userid = '$userid' and coin = '$coin'");
    require_once('../email/crypto-withdrawal-request.php');
      echo "<script>
      Swal.fire({
      icon: 'success',
      title: 'Successful!',
      text: 'You have successfully requested for a Withdrawal of $money $amount from your $coin Crypto Asset. ',
      showConfirmButton: true,
      });
    </script>";
    ?>
    <meta http-equiv="refresh" content="5; url=../personal-banking/crypto">
    <?php
 	die();
    }
   }

 }

 if($_GET['action'] == "DisableCrypto"){
  $id = $_GET['id'];
  $query = $conn->query("UPDATE cryptos SET status = 0 WHERE id = '$id'");
   echo "<script>
      Swal.fire({
      icon: 'success',
      title: 'Wallet Disabled',
      showConfirmButton: true,
      });
    </script>";
   ?>
    <meta http-equiv="refresh" content="2; url=../admin/crypto">
   <?php
 }

 if($_GET['action'] == "EnableCrypto"){
  $id = $_GET['id'];
  $query = $conn->query("UPDATE cryptos SET status = 1 WHERE id = '$id'");
   echo "<script>
      Swal.fire({
      icon: 'success',
      title: 'Wallet Enabled',
      showConfirmButton: true,
      });
    </script>";
    ?>
    <meta http-equiv="refresh" content="2; url=../admin/crypto">
    <?php
 }

 if($_GET['action'] == "UpdateCrypto"){

 	if (isset($_POST)) {
 		// code...
 		$id = $_GET['id'];
 		$post = "wallet".$_GET['id']."";
 		$postwallet = filterString($_POST[$post]);

 		$query = $conn->query("UPDATE cryptos SET address = '$postwallet' WHERE id = '$id' ");
 		   echo "<script>
      Swal.fire({
      icon: 'success',
      title: 'Wallet Updated successfully',
      showConfirmButton: true,
      });
    </script>";
    ?>
    <meta http-equiv="refresh" content="2; url=../admin/crypto">
    <?php

 	}
 }

 if($_GET['action'] == "approveCrypto"){
 	if(isset($_POST)){
 		$id = $_GET['id']; $coin = $_GET['coin']; $amount = $_GET['amount']; $userid = $_GET['userid']; $fullname = $_GET['fullname'];
 		$dateCreated = date("d M Y, H:i A");
 		$query1 = $conn->query("UPDATE crypto_deposits SET status = 'success' WHERE id = '$id'");
        $query3 = $conn->query("SELECT * FROM wallets WHERE userid = '$userid' and coin = '$coin'");
            if(mysqli_num_rows($query3) < 1){
            	$sql = $conn->query("INSERT INTO wallets (coin, datecreated, lastdeposit, userid, balance) VALUES ('$coin', '$dateCreated', '$dateCreated', '$userid', '$amount')");
            }else{
            	$r = mysqli_fetch_array($query3);
            	$newBal = ($r['balance'] . $amount);
            	$idd = $r['id'];
            	$sql = $conn->query("UPDATE wallets SET balance = '$newBal', datecreated = '$dateCreated' WHERE id = '$idd'");
            }
        $query4 = $conn->query("SELECT * FROM register WHERE id = '$id'");
        $user = mysqli_fetch_array($query4);   

        require_once("../email/approved-crypto-deposit.php");
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Deposit Approved',
        showConfirmButton: true,
        });
        </script>";
    ?>
    <meta http-equiv="refresh" content="3; url=../admin/crypto?action=pending_deposits">
    <?php
            
 	}

 }

 if($_GET['action'] == "rejectCrypto"){
 	if(isset($_POST)){
 		$id = $_GET['id']; $coin = $_GET['coin']; $amount = $_GET['amount']; $userid = $_GET['userid']; $fullname = $_GET['fullname'];
 		$dateCreated = date("d M Y, H:i A");
 		$query1 = $conn->query("UPDATE crypto_deposits SET status = 'rejected' WHERE id = '$id'");
        $query4 = $conn->query("SELECT * FROM register WHERE id = '$id'");
        $user = mysqli_fetch_array($query4);   
        
        require_once("../email/reject-crypto-deposit.php");
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Deposit Rejected',
        showConfirmButton: true,
        });
        </script>";
    ?>
    <meta http-equiv="refresh" content="3; url=../admin/crypto?action=pending_deposits">
    <?php

            
 	}

 }

  if($_GET['action'] == "deleteCryptoDeposit"){
 	if(isset($_POST)){
 		$id = $_GET['id']; $coin = $_GET['coin']; $amount = $_GET['amount']; $userid = $_GET['userid'];
 		$dateCreated = date("d M Y, H:i A");
 		$query1 = $conn->query("DELETE FROM crypto_deposits WHERE id = '$id'");
     
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Deposit Deleted',
        showConfirmButton: true,
        });
        </script>";
    ?>
    <meta http-equiv="refresh" content="3; url=../admin/crypto?action=rejected_deposits">
    <?php

            
 	}

 }
 
 
   if($_GET['action'] == "approveCryptoWithdrawal"){
 	if(isset($_POST)){
 		$id = $_GET['id']; $coin = $_GET['coin']; $amount = $_GET['amount']; $userid = $_GET['userid'];
 		$dateCreated = date("d M Y, H:i A");
 		$query1 = $conn->query("UPDATE crypto_withdrawals SET status = 'success' WHERE id = '$id'");
        $query4 = $conn->query("SELECT * FROM register WHERE id = '$id'");
        $user = mysqli_fetch_array($query4);
        require_once("../email/approved-crypto-withdrawal.php");
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Withdrawal Approved',
        showConfirmButton: true,
        });
        </script>";
    ?>
    <meta http-equiv="refresh" content="3; url=../admin/crypto?action=withrawal_requests">
    <?php

            
 	}

 }

    if($_GET['action'] == "rejectCryptoWithdrawal"){
 	if(isset($_POST)){
 		$id = $_GET['id']; $coin = $_GET['coin']; $amount = $_GET['amount']; $userid = $_GET['userid'];
 		$dateCreated = date("d M Y, H:i A");
 		$query1 = $conn->query("UPDATE crypto_withdrawals SET status = 'rejected' WHERE id = '$id'");
        $query4 = $conn->query("SELECT * FROM register WHERE id = '$id'");
        $user = mysqli_fetch_array($query4);
        require_once("../email/rejected-crypto-withdrawal.php");
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Withdrawal Rejected',
        showConfirmButton: true,
        });
        </script>";
    ?>
    <meta http-equiv="refresh" content="3; url=../admin/crypto?action=withrawal_requests">
    <?php

            
 	}

 }

 if($_GET['action'] == "user_pass_reset"){
    require_once('userdata.php');
    $cpassword = filterString($_POST['cpassword']);
    $npassword = filterString($_POST['npassword']);
    $cnpassword = filterString($_POST['cnpassword']);
    $errorMsg = 0;
    if(empty($cpassword)){
        echo"<script>document.getElementById('cpassword').style.borderColor='red';</script>";
    }else{echo"<script>document.getElementById('cpassword').style.borderColor='green';</script>";}
    if(empty($npassword)){
        echo"<script>document.getElementById('npassword').style.borderColor='red';</script>";
    }else{echo"<script>document.getElementById('npassword').style.borderColor='green';</script>";}
    if(empty($cnpassword)){
        echo"<script>document.getElementById('cnpassword').style.borderColor='red';</script>";
    }else{echo"<script>document.getElementById('cnpassword').style.borderColor='green';</script>";}
    

    if (empty($cpassword) || empty($npassword) || empty($cnpassword)) {
    $errorMsg = 1;  
    echo "<script>toastr.error('All fields are required', 'An Occured', {\"progressBar\": true});</script>";
    die();  
    }
    
    $query = $conn->query("SELECT * FROM users WHERE id = '$userid'");
    $r = mysqli_fetch_array($query);
    $pasy = $r['password'];

    if(md5($cpassword) != $pasy){
    $errorMsg = 1;    
    echo "<script>toastr.error('Invalid Current password ', 'An Occured', {\"progressBar\": true});</script>";
    echo"<script>document.getElementById('cpassword').style.borderColor='red';</script>";
    die();    
   
    }else{echo"<script>document.getElementById('cpassword').style.borderColor='green';</script>";}
    
    if(strlen($npassword) < 6){
     $errorMsg =1;   
    echo "<script>toastr.error('Minimum of six alpha-numeric characters required', 'An Occured', {\"progressBar\": true});</script>";
    echo"<script>document.getElementById('npassword').style.borderColor='red';</script>";
    die();    
    
    }else{echo"<script>document.getElementById('npassword').style.borderColor='green';</script>";}

    if($npassword != $cnpassword){
     $errorMsg =1;   
    echo "<script>toastr.error('New Passwords does not match', 'An Occured', {\"progressBar\": true});</script>";
    echo"<script>document.getElementById('cnpassword').style.borderColor='red';</script>";
    die();    
    
    }else{echo"<script>document.getElementById('cnpassword').style.borderColor='green';</script>";}

    if(md5($npassword) == $pasy){
     $errorMsg =1;   
    echo "<script>toastr.error('New Password is currently in use', 'An Occured', {\"progressBar\": true});</script>";
    echo"<script>document.getElementById('npassword').style.borderColor='red';</script>";
    die();    
    
    }else{echo"<script>document.getElementById('npassword').style.borderColor='green';</script>";}
    
    if($errorMsg == 0){
        $newpass = $npassword;
        $query4 = $conn->query("UPDATE register SET password = $newpass WHERE id = '$id'");
        echo "<script>
        Swal.fire({
        icon: 'success',
        title: 'Password Reset Successful',
        showConfirmButton: true,
        });
        </script>";
        ?>
        <meta http-equiv="refresh" content="4; url=logout">
        <?php 
    }


 }

 //VERIFY CAPTCHA

if ($_GET['action'] == "verifyRecaptcha"){
if(isset($_POST)){
    if($_GET['code'] == $_POST['captcha']){
     feedback("toast", "success", "Verification Successful", "Verified");
     borderError("green", "captcha");
     $_SESSION['accessBanking'] = randomString(64);
     print redirect(3, "secure/index2");
    }
    else{
      feedback("toast", "error", "Invalid code supplied", "Error");  
      borderError("red", "captcha");
    }
} 
}

//USER SIGNIN

if($_GET['action'] == "userLogin"){
    if(isset($_POST)) {
    $accountID = filterString($_POST["id"]);
    $password = filterString($_POST["pass"]);
    $errorMsg = 0;

    //CHECKING FOR EMPTY FIELDS
    if(empty($accountID) || empty($password)){
        sleep(3);
        echo "
         <script>
         toastr.error('All fields are required', 'Empty field(s)', {'progressBar': true});
         </script>
        ";
        if (empty($accountID)) {
         echo "<script>   
         document.getElementById('id').style.borderColor='red';
         </script>";
         
        }else{echo "<script>   
         document.getElementById('id').style.borderColor='green';
         </script>";}
         if (empty($password)) {
         echo "<script>   
         document.getElementById('pass').style.borderColor='red';
         </script>";
         
        }else{echo "<script>   
         document.getElementById('pass').style.borderColor='green';
         </script>";}
        die();

    }    
    //CHECK IF BOTH FIELDS IS NOT EMPTY
    $password = $password;
    if($accountID AND $password !=""){
    $query = $conn->query("SELECT * FROM register WHERE accountnumber = '$accountID' and password = '$password'");
    //CHECK IF CREDENTIALS ARE ACCURATE
    if(mysqli_num_rows($query) == 0){
        sleep(3);
        echo"
        <script>
         toastr.error('Invalid account number or password', 'Login failed');
         document.getElementById('pass').style.borderColor='red';
         document.getElementById('id').style.borderColor='red';
         document.getElementById('pass').style.color='red';
         document.getElementById('id').style.color='red';
         </script>        
        ";
        die();

    }

    //WHEN THE LOGIN DETAILS ARE CORRECT
    if(mysqli_num_rows($query) == 1){
        $rows = mysqli_fetch_array($query);
        $fname = $rows['firstname']; $mname = $rows['middlename']; 
        $lname = $rows['lastname']; $tfa = $rows['tfa']; 
        $status = $rows['status'];
        $email = $rows["email"];
        $approve = $rows['approve'];
     //CHECK IF ACCOUNT WAS BLOCKED   
        if($status == "blocked"){
        sleep(3);
        echo "<script>
        swal({   title: \"$blocked_title\",   text: \"$blocked_msg\",   icon: \"error\" });
        </script>";
        die();
        }
    //CHECK IF ACCOUNT IS ACTIVE
     if($status == "active"){
        //CHECK IF ACCOUNT IS APPROVED
         if($approve == 0){
        sleep(3);
        echo "<script>
        swal({   title: \"Access Denied\",   text: \"Hi $fname $lname, Your $shortname internet banking account is currently inactive. Kindly contact our live customer care representive. \",   icon: \"error\" });
        </script>";
        die();
        }
        sleep(3);
         echo "
         <script>
         toastr.success('Hello $fname $lname, Welcome to $sitename internet banking.', 'Successful');
         document.getElementById('pass').style.borderColor='green';
         document.getElementById('id').style.borderColor='green';
         document.getElementById('pass').style.color='green';
         document.getElementById('id').style.color='green';
         </script> ";
        $_SESSION["loggedUser"] = $accountID;
        $loggedtoken = randomString(68);
        $_SESSION["loggedToken"] = $loggedtoken;
        $_SESSION['email'] = $email;
        $userid = $rows["id"];
        $ip = $_SERVER["REMOTE_ADDR"];
        $dated = date("d M y, H:i a");
        $browser = $_SERVER["HTTP_USER_AGENT"];
        $queryyy = $conn->query("INSERT INTO login(ip, browser, dated, token, userid) VALUES ('$ip', '$browser', '$dated', '$loggedtoken', '$userid')");
        sleep(3);
        
        //CHECK IF TWO FACTOR AUTH IS ENABLE
        if($tfa == "active"){
         $mail = new PHPMailer();
         //$mail->isSMTP();
         $mail->Host = $smtp_host;
         $mail->SMTPAuth = true;
         $mail->CharSet = "UTF-8";
         $mail->Username = $smtp_username; 
         $mail->Password = $smtp_password;
         $mail->SMTPSecure = $smtp_auth;
         $mail->Port = $smtp_port;
         $ipa = $_SERVER['REMOTE_ADDR'];
         $mail->setFrom($smtp_username, $display_name);
         $mail->addReplyTo($smtp_username, $display_name);
         $auth_code = randomNumber(4);
         $_SESSION['auth_code'] = $auth_code;
         $url = $site_url; $link = randomString(56); $addr = "/secure/index?action=verify2fa&source=$link";
         $auth_url = "$url$addr";
         $ua = getBrowser();
         $browser= " " . $ua['name'] . " on ".$ua['platform']."";
         $mail->addAddress($_SESSION['email']);
          //subject
         $mail->Subject = "New device confirmation";
         $mail->isHTML(true);
         require_once('../email/tfa.php');
         $mail->Body= $otpBody;
         if(!$mail->Send())
         {  
        $_SESSION['verifiedTfa'] = hash('sha256', 'verified');
        echo "<script> window.location.href='../personal-banking/dashboard?viewSource=".$_SESSION['loggedToken']."';
        </script>";
        }

       else
       { 
        echo"
       <script> window.location.href='index?action=verify&viewSource=".$_SESSION['loggedToken']."';
       </script>
       ";
     } 
        }
        else{
            $_SESSION['verifiedTfa'] = hash('sha256', 'verified');
            echo "<script>
            window.location.href='../personal-banking/dashboard.php?viewSource=$loggedtoken';
            </script>";
           }

        }
    }

}

}
} 

if($_GET['action'] == "userVerify2fa") {

 if(isset($_POST)){   
 $code = "".$_POST['codeBox1']."".$_POST['codeBox2']."".$_POST['codeBox3']."".$_POST['codeBox4']."";   
 $errorMsg = 0;
 if(strlen($code < 4)){
 feedback("toast", "error", "All fields are required", "Error");
 borderError("red", "codeBox1"); borderError("red", "codeBox2");
 borderError("red", "codeBox3"); borderError("red", "codeBox4");
 die();
 }
 else{
 borderError("green", "codeBox1"); borderError("green", "codeBox2");
 borderError("green", "codeBox3"); borderError("green", "codeBox4");
 }

 if($_SESSION['auth_code'] == $code){
 borderError("green", "codeBox1"); borderError("green", "codeBox2");
 borderError("green", "codeBox3"); borderError("green", "codeBox4");  
 $_SESSION['verifiedTfa'] = hash('sha256', 'verified');
 print redirect(1, "../personal-banking/dashboard.php?viewSource=".$_SESSION['loggedToken']."");
 }else{
 feedback("toast", "error", "Invalid code", "Error");
 borderError("red", "codeBox1"); borderError("red", "codeBox2");
 borderError("red", "codeBox3"); borderError("red", "codeBox4");   
 }


}

}

if($_GET['action'] == "userPassReset"){
if(isset($_POST)){   
$captcha = $_GET['code'];
$accountID = filterString($_POST['id']);
$code = $_POST['captcha'];
$errorMsg = 0;

if(empty($captcha)){
 borderError("red", "captcha");   
}else{borderError("green", "captcha");}

if(empty($accountID)){
 borderError("red", "id");   
}else{borderError("green", "id");}

if(empty($accountID) || empty($captcha)){
$errorMsg = 1;
feedback("toast", "error", "All fields are required", "Error");
die();
}

if($code != $captcha){
$errorMsg = 1;
feedback("toast", "error", "Invalid code supplied", "Error");
borderError("red", "captcha");
die();
   
}else{borderError("green", "captcha");}

if($errorMsg == 0){
    $accountID = str_replace(" ", "", $accountID);
    $query = $conn->query("SELECT * FROM register WHERE accountnumber = '$accountID' ");
    echo mysqli_error($conn);
    if(mysqli_num_rows($query) < 1){
    feedback("sweet", "error", "Sorry, we are unable to find any account that is associated with $accountID", "Account Not Found!");   
    }else{borderError("red", "id");}

    if(mysqli_num_rows($query) >= 1){
        borderError("green", "id");
        $r = mysqli_fetch_array($query);
        $user_id = $r['id'];
        $email = $r['email'];
        $fname = $r['firstname'];
        $lname = $r['lastname'];
        $mname = $r['middlename'];

        //SEND LINK
        $mail = new PHPMailer();
        //$mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->CharSet = "UTF-8";
        $mail->Username = $smtp_username; 
        $mail->Password = $smtp_password;
        $mail->SMTPSecure = $smtp_auth;
        $mail->Port = $smtp_port;
        $mail->setFrom($smtp_username, $display_name);
        $mail->addReplyTo($smtp_username, $display_name);
        $token = randomString(62);
        $reset_link = "$site_url/secure/index?action=resetPass&userToken=$token";
        $ua = getBrowser();
        $browser= " " . $ua['name'] . " on ".$ua['platform']."";
        $mail->addAddress($email);
        //subject
        $mail->Subject = "Password reset link";
        $mail->isHTML(true);
        require_once('../email/password_reset.php');
        $mail->Body= $resetBody;
        if(!$mail->Send())
         {  
        feedback("sweet", "error", "We are temporarily unable to reset your password. Please try again later.", "Error Occured!");  
         }
         else
           {
           feedback("sweet", "success", "A new password reset link have been forwarded to the email address associated with the account number you provided.", "Password reset link forwarded!");   
             $dated = date("Y-m-d h:i:s");
             $expiry_date =  add_time(date("Y-m-d h:i:s"),25);
             $queryyy = $conn->query("INSERT INTO password_resets (user_id, dated, expiry_date, token) VALUES ('$user_id', '$dated', '$expiry_date', '$token')");
 
           }
         }
        }

      }
     }

if($_GET['action'] == "userPassResetConfirm"){
    if(isset($_POST)){
       $token = $_GET['token'];
       $code = $_GET['code'];
       $npassword = filterString($_POST['npassword']);
       $cnpassword = filterString($_POST['cnpassword']);
       $captcha = $_POST['captcha'];
       $errorMsg = 0;

       if($code != $captcha){
        $errorMsg = 1;
        feedback("toast", "error", "Invalid captcha code", "Error");
        borderError("red", "captcha");
        die();
       }else{borderError("green", "captcha");}

       if(strlen($npassword) < 6){
        $errorMsg = 1;
        feedback("toast", "error", "Minimum of six alpha-numeric characters required", "Error");
        borderError("red", "npassword");
        die();
        } 

       if($npassword != $cnpassword){
        $errorMsg = 1;
        feedback("toast", "error", "Passwords does not match", "Error");
        borderError("red", "cnpassword");
        die();
       }

       $query = $conn->query("SELECT * FROM password_resets WHERE token = '$token'");
       $r = mysqli_fetch_array($query);
       $user = $r['user_id'];
       
       $query2 = $conn->query("SELECT * FROM users WHERE id = '$user'");
       $rr = mysqli_fetch_array($query2);

       if($rr['password'] == $npassword){
        $errorMsg = 1;
        sleep(3);
        feedback("toast", "error", "Choose a diiferent password combination", "Password already used by you");
        borderError("red", "npassword");
        die();
       }

       if($errorMsg == 0){
        $passy = $npassword;
        $query = $conn->query("UPDATE users SET password = '$passy' WHERE id = '$user'");
        $queryb = $conn->query("DELETE FROM password_resets WHERE token = '$token'");
        feedback("sweet", "success", "You can now login with your new password", "Password reset Successful");
        borderError("green", "cnpassword");
        borderError("green", "npassword");
        print redirect(4, "index");
       }
       }
    }
     
 if($_GET['action'] == "registerUserAccount") {
    if(isset($_POST)){
    $firstname = filterString($_POST['firstname']); $middlename = filterString($_POST['middlename']);
    $lastname = filterString($_POST['lastname']); $zipcode = filterString($_POST['zipcode']);
    $dob = filterString($_POST['dob']); $address = filterString($_POST['address']);
    $country = filterString($_POST['country']); $state = filterString($_POST['state']);
    $city = filterString($_POST['city']); $phone = filterString($_POST['phone']);
    $email = filterString($_POST['email']); $occupation = filterString($_POST['occupation']);
    $income = filterString($_POST['income']); $secretCode = filterString($_POST['secretCode']);
    $password = filterString($_POST['password']); $cpassword = filterString($_POST['cpassword']);
    $ssn = filterString($_POST['ssn']); $accounttype = filterString($_POST['accounttype']);
    $usercurrency = filterString($_POST['usercurrency']);

    borderError("green", "firstname"); borderError("green", "lastname"); borderError("green", "middlename");
    borderError("green", "zipcode"); borderError("green", "dob"); borderError("green", "address");
    borderError("green", "countryId"); borderError("green", "stateId"); borderError("green", "cityId");
    borderError("green", "phone"); borderError("green", "email"); borderError("green", "occupation");
    borderError("green", "income"); borderError("green", "secretCode"); borderError("green", "password");
    borderError("green", "cpassword"); borderError("green", "ssn"); borderError("green", "accounttype");
    borderError("green", "usercurrency");
    $errorMsg = 0; 

    if(strlen($phone) < 8){
    $errorMsg = 1;
    feedback("toast", "error", "Valid phone number is required!", "Error");
    borderError("red", "phone"); 
    }else { borderError("green", "phone"); }

    $query1 = $conn->query("SELECT * FROM users WHERE phone = '$phone'");
    $query2 = $conn->query("SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($query1) >=1 ){
    $errorMsg = 1;
    feedback("toast", "error", "Phone number already in use", "Error");
    borderError("red", "phone");    
    }else { borderError("green", "phone"); }

    if(mysqli_num_rows($query2) >=1 ){
    $errorMsg = 1;
    feedback("toast", "error", "Email already already in use", "Error");
    borderError("red", "phone");    
    }else { borderError("green", "phone"); }

    if($password != $cpassword){
    $errorMsg = 1;
    feedback("toast", "error", "Password does not match!", "Error");
    borderError("red", "cpassword"); borderError("red", "password");
    }else { borderError("green", "cpassword"); borderError("green", "password"); }

    if(strlen($address) < 9){
    $errorMsg = 1;
    feedback("toast", "error", "Detailed Home address is required", "Error");
    borderError("red", "address");    
    }else { borderError("green", "address"); }

    if($errorMsg == 0){

    if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['passport']['tmp_name'])) {
    $sourcePath = $_FILES['passport']['tmp_name'];
    $targetPath = "../secure/passport/".$_FILES['passport']['name'];
    $imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
    feedback("toast", "error", "Please select an Image(png or jpg)", "Error");       
    die();
    }
    $newname = "".substr($sitename, 0,3)."IMG".date("YmdHi")."-".randomString(5)."";
    $newname =strtoupper($newname);
    $targetPath = "../secure/passport/$newname.$imageFileType";
    if(move_uploaded_file($sourcePath,$targetPath)) {
    $pic =  "$newname.$imageFileType";
    $accountnumber = randomNumber(10);
   // $pass = md5($password);
    $pass = $password;
    $dated = date(" d M Y H:i a"); 
    $imf = randomNumber(8);
    $cot = randomNumber(8);
    $accountbalance = 0.00;

    $query = $conn->query("INSERT INTO users (firstname, lastname, middlename, state, country, city, zipcode, dob, address, phone, email, accountnumber, accounttype, usercurrency, accountbalance, imf, cot, secretCode, password, approve, status, datecreated, income, occupation, passport) VALUES ('$firstname', '$middlename', '$lastname', '$state', '$country', '$city', '$zipcode', '$dob', '$address', '$phone', '$email', '$accountnumber', '$accounttype', '$usercurrency', '$accountbalance', '$imf', '$cot', '$secretCode', '$pass', '0', 'active', '$dated', '$income', '$occupation', '$pic')");
  
$query5 = $conn->query("SELECT * FROM users WHERE accountnumber = '$accountnumber'");
$r = mysqli_fetch_array($query5);
$email = $r['email'];
$fname = $r['firstname'];
$mname = $r['middlename'];
$lname = $r['lastname'];
$accounttype = $r['accounttype'];
$date = $r['datecreated'];
$currency = $r['usercurrency'];
$addressB = $r['address'];
$id = $r['id'];
$auth_code = randomNumber(4);
$link = $site_url; $num = randomString(56); $addr = "/index?action=confirmReg&source=$num";
$auth_url = "$link$addr";
$mail = new PHPMailer();
//$mail->isSMTP();
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;
$mail->CharSet = "UTF-8";
$mail->Username = $smtp_username; 
$mail->Password = $smtp_password;
$mail->SMTPSecure = $smtp_auth;
$mail->Port = $smtp_port;
$mail->setFrom($smtp_username, $display_name);
$mail->addReplyTo($smtp_username, $display_name);
$mail->addAddress($email);
$mail->Subject = "Email confirmation";
$mail->isHTML(true);
require_once('../email/registration_email.php');
$mail->Body=$regBody;
if(!$mail->Send())
 {  
    feedback("sweet", "success", "Your account have been successfully registered, A confirmation email have been forwarded to the email address provided (".$email.").", "Congratulaton");
       $query= $conn->query("UPDATE users SET email_verify = '1', email_code = '$num' WHERE accountnumber ='$accountnumber'");
       $queryy= $conn->query("UPDATE users SET email_code = '$num' WHERE accountnumber ='$accountnumber'");
       print redirect(7, "index");
 }
else
{
 feedback("sweet", "success", "Your account have been successfully registered, A confirmation email have been forwarded to the email address provided (".$email.").", "Congratulaton");
   $queryy= $conn->query("UPDATE users SET email_code = '$num' WHERE accountnumber ='$accountnumber'");
   print redirect(7, "index");
}   
}}}}}} 
?>