<?php
include("connect.php");
 $ten = rand(1000000000, 9999999999);

if (isset($_POST ['createAccount'])) {
	  $firstname = ($_POST['firstname']); 
    $lastname = ($_POST['lastname']);
    $middlename = ($_POST['middlename']); 
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $gender = ($_POST['gender']);
    $dob = ($_POST['dob']);
    $accounttype = ($_POST['acctype']);
    $accountcurrency = ($_POST['currency']);
    $street = ($_POST['address']);
    $apartment = ($_POST['apartment']);
    $zipcode = ($_POST['zipcode']);
	  $country = ($_POST['country']);
    $state = ($_POST['state']);
    $city = ($_POST['city']);
    $EmploymentType = ($_POST['emptype']);
    $salary = ($_POST['salary']);
    $EmploymentName = ($_POST['empname']);
    $BenName = ($_POST['bname']);
    $BenOccu =($_POST['boccu']);
    $kin =($_POST['badd']);
    $password = ($_POST['password']);
    $pin = ($_POST['pin']);
    $acctno = ($_POST['acctno']);
    $query = $conn->query("INSERT INTO register (firstname, lastname, middlename, email, phone, gender, dob, acctype, currency, address, apartment, zipcode, country, state, city, emptype, salary, empname, bname, boccu, badd, password, pin, acctno) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$phone', '$gender', '$dob', '$accounttype', '$accountcurrency', '$street', '$apartment', '$zipcode', '$country', '$state', '$city', '$EmploymentType', '$salary', '$EmploymentName', '$BenName', '$BenOccu', '$kin', '$password','$pin', '$acctno')");

      echo mysqli_error($conn);
     }
?>


<!-- if(empty($firstname)){ -->
	<!-- echo"<script>document.getElementById('firstname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('firstname').style.borderColor='green';</script>";}
if(empty($lastname)){
	echo"<script>document.getElementById('lastname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('lastname').style.borderColor='green';</script>";}
if(empty( $middlename)){
	echo"<script>document.getElementById('middlename').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('middlename').style.borderColor='green';</script>";}
if(empty($email)){
	echo"<script>document.getElementById('email').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('email').style.borderColor='green';</script>";}
if(empty($phone)){
	echo"<script>document.getElementById('phone').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('phone').style.borderColor='green';</script>";}
if(empty($gender)){
	echo"<script>document.getElementById('gender').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('gender').style.borderColor='green';</script>";}
if(empty($dob)){
	echo"<script>document.getElementById('dob').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('dob').style.borderColor='green';</script>";}
if(empty($accounttype)){
	echo"<script>document.getElementById('acctype').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('acctype').style.borderColor='green';</script>";}
if(empty($accountcurrency)){
	echo"<script>document.getElementById('currency').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('currency').style.borderColor='green';</script>";}
if(empty($street)){
	echo"<script>document.getElementById('address').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('address').style.borderColor='green';</script>";}
if(empty($apartment)){
	echo"<script>document.getElementById('apartment').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('apartment').style.borderColor='green';</script>";}
if(empty($zipcode)){
	echo"<script>document.getElementById('zip').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('zip').style.borderColor='green';</script>";}
if(empty($country)){
	echo"<script>document.getElementById('country').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('country').style.borderColor='green';</script>";}
if(empty($state)){
	echo"<script>document.getElementById('state').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('state').style.borderColor='green';</script>";}
if(empty($city)){
	echo"<script>document.getElementById('city').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('city').style.borderColor='green';</script>";}
if(empty($EmploymentType)){
	echo"<script>document.getElementById('emptype').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('emptype').style.borderColor='green';</script>";}
if(empty($salary)){
	echo"<script>document.getElementById('salary').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('salary').style.borderColor='green';</script>";}
if(empty($EmploymentName)){
	echo"<script>document.getElementById('empname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('empname').style.borderColor='green';</script>";}
if(empty($BenName)){
	echo"<script>document.getElementById('bname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('bname').style.borderColor='green';</script>";}
if(empty($BenOccu)){
	echo"<script>document.getElementById('boccu').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('boccu').style.borderColor='green';</script>";}
if(empty($kin)){
	echo"<script>document.getElementById('badd').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('badd').style.borderColor='green';</script>";}
if(empty($password)){
	echo"<script>document.getElementById('password').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('password').style.borderColor='green';</script>";}
if(empty($pin)){
	echo"<script>document.getElementById('pin').style.borderColor='red';</script>";
}else{echo"<script>document.getElementById('pin').style.borderColor='green';</script>";}
     
   if(empty($firstname) || empty($lastname) || empty($middlename) || empty($email) || empty($phone) || empty($gender) || empty($dob) || empty($accounttype) || empty($accountcurrency) ||empty($street) || empty($apartment) ||empty($zipcode) ||empty($country) || empty($state) || empty($city) || empty($EmploymentType) || empty($salary) || empty($EmploymentName) || empty($BenName) || empty($BenOccu) || empty($kin) || empty($password) || empty($pin)){
   	  echo "<script>
               Swal.fire('All fields are required!', 'Kindly fill in all empty fields with the appropriate details.', 'error');
      </script>";
      die();
   }
   $errorMsg = 0;
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   	 echo "
            <script>    
              document.getElementById('green').style.borderColor='red';
             </script>";
    }
    }else{ 
    $errorMsg = 1;
    echo "
            <script>    
              toastr.error('A valid email address is required!', 'Invalid email', {\"progressBar\": true});
              document.getElementById('email').style.borderColor='red';
             </script>";
    }

    // if($password != $cpassword){
    	$errorMsg = 1;
    	echo "
            <script>    
              toastr.error('Password does not match!', 'Invalid password combination', {\"progressBar\": true});
              document.getElementById('cpassword').style.borderColor='red';
             </script>";
          // }

     if($errorMsg == 0){
     	$pass = md5($password);
     	$dated = date(" d M Y H:i a");  -->