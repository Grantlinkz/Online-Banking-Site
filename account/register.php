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
include("connect.php");
$ten = rand();
global $firstname;
global $lastname;
global $ten;
global $acctno;
sleep(3);
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
    $cpassword = ($_POST['cpassword']);
    $pin = ($_POST['pin']);
    $cpin = ($_POST['cpin']);
    $acctno = ($_POST['acctno']);
    $cot = ($_POST['cot']);
    $tax = ($_POST['tax']);
    $imf = ($_POST['imf']);
    $atc = ($_POST['atc']);
    $telex_code = ($_POST['telex_code']);
    // $image = ($_POST['image']);
    $image = $_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'image/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$image);
    $q1 = ($_POST['q1']);
    $ans1 = ($_POST['ans1']);
    $q2 = ($_POST['q2']);
    $ans2 = ($_POST['ans2']);
    // $sql =("INSERT INTO register(firstname, lastname, middlename, email, phone, gender, dob, acctype, currency, address, apartment, zipcode, country, state, city, emptype, salary, empname, bname, boccu, badd, password, pin,acctno,image,q1,ans1,q2,ans2) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$phone', '$gender', '$dob', '$accounttype', '$accountcurrency', '$street', '$apartment', '$zipcode', '$country', '$state', '$city', '$EmploymentType', '$salary', '$EmploymentName', '$BenName', '$BenOccu', '$kin', '$password','$pin', '$acctno', '$image', '$q1', '$ans1', '$q2', '$ans2')");
    // //echo mysqli_error($conn);
    // $result = mysqli_query($conn,$sql);
    //     if($result){
    //       header("Location:log.php");
    //     }
    // //}else{
    // }

if(empty($firstname)){
	echo"<script>document.getElementByClassName('firstname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('firstname').style.borderColor='green';</script>";}
if(empty($lastname)){
	echo"<script>document.getElementByClassName('lastname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('lastname').style.borderColor='green';</script>";}
if(empty( $middlename)){
	echo"<script>document.getElementByClassName('middlename').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('middlename').style.borderColor='green';</script>";}
if(empty($email)){
	echo"<script>document.getElementByClassName('email').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('email').style.borderColor='green';</script>";}
if(empty($phone)){
	echo"<script>document.getElementByClassName('phone').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('phone').style.borderColor='green';</script>";}
if(empty($gender)){
	echo"<script>document.getElementByClassName('gender').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('gender').style.borderColor='green';</script>";}
if(empty($dob)){
	echo"<script>document.getElementByClassName('dob').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('dob').style.borderColor='green';</script>";}
if(empty($accounttype)){
	echo"<script>document.getElementByClassName('acctype').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('acctype').style.borderColor='green';</script>";}
if(empty($accountcurrency)){
	echo"<script>document.getElementByClassName('currency').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('currency').style.borderColor='green';</script>";}
if(empty($street)){
	echo"<script>document.getElementByClassName('address').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('address').style.borderColor='green';</script>";}
if(empty($apartment)){
	echo"<script>document.getElementByClassName('apartment').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('apartment').style.borderColor='green';</script>";}
if(empty($zipcode)){
	echo"<script>document.getElementByClassName('zip').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('zip').style.borderColor='green';</script>";}
if(empty($country)){
	echo"<script>document.getElementByClassName('country').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('country').style.borderColor='green';</script>";}
if(empty($state)){
	echo"<script>document.getElementByClassName('state').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('state').style.borderColor='green';</script>";}
if(empty($city)){
	echo"<script>document.getElementByClassName('city').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('city').style.borderColor='green';</script>";}
if(empty($EmploymentType)){
	echo"<script>document.getElementByClassName('emptype').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('emptype').style.borderColor='green';</script>";}
if(empty($salary)){
	echo"<script>document.getElementByClassName('salary').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('salary').style.borderColor='green';</script>";}
if(empty($EmploymentName)){
	echo"<script>document.getElementByClassName('empname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('empname').style.borderColor='green';</script>";}
if(empty($BenName)){
	echo"<script>document.getElementByClassName('bname').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('bname').style.borderColor='green';</script>";}
if(empty($BenOccu)){
	echo"<script>document.getElementByClassName('boccu').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('boccu').style.borderColor='green';</script>";}
if(empty($kin)){
	echo"<script>document.getElementByClassName('badd').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('badd').style.borderColor='green';</script>";}
if(empty($password)){
	echo"<script>document.getElementByClassName('password').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('password').style.borderColor='green';</script>";}
if(empty($cpassword)){
	echo"<script>document.getElementByClassName('cpassword').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('cpassword').style.borderColor='green';</script>";}
if(empty($pin)){
	echo"<script>document.getElementByClassName('pin').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('pin').style.borderColor='green';</script>";}
if(empty($cpin)){
	echo"<script>document.getElementByClassName('cpin').style.borderColor='red';</script>";
}else{echo"<script>document.getElementByClassName('cpin').style.borderColor='green';</script>";}

//   $errorMsg = 0;  
//   if(empty($firstname) || empty($lastname) || empty($middlename) || empty($email) || empty($phone) || empty($gender) || empty($dob) || empty($accounttype) || empty($accountcurrency) ||empty($street) || empty($apartment) ||empty($zipcode) ||empty($country) || empty($state) || empty($city) || empty($EmploymentType) || empty($salary) || empty($EmploymentName) || empty($BenName) || empty($BenOccu) || empty($kin) || empty($password) || empty($cpassword) || empty($pin) || empty($cpin)){
//     $errorMsg = 1;  
//     echo "<script>
//               Swal.fire('All fields are required!', 'Kindly fill in all empty fields with the appropriate details.', 'error');
//       </script>";
//       return false;
//       exit();
//   }
   $select = mysqli_query($conn, "SELECT * FROM register WHERE email = '". $_POST['email']."'");
   if(mysqli_num_rows($select)) {
    $errorMsg = 1;
    echo "
    <script>    
    toastr.error('Please Change The Email', 'Email Already Exist!', {\"progressBar\": true});
    document.getElementByClassName('email').style.borderColor='red';
   </script>";}
  
  if($pin != $cpin){
    $errorMsg = 1;
    echo "
          <script>    
            toastr.error('Pin does not match!', 'Invalid password combination', {\"progressBar\": true});
            document.getElementByClassName('cpin').style.borderColor='red';
           </script>";}
    if($password != $cpassword){
      return false;
    	$errorMsg = 1;
    	echo "
            <script>    
              toastr.error('Password does not match!', 'Invalid password combination', {\"progressBar\": true});
              document.getElementByClassName('cpassword').style.borderColor='red';
             </script>";
            // }
              //  }else{
    // if($errorMsg=1){
    //   return false;
    //   exit();
    }else{
    $sql =("INSERT INTO register(firstname, lastname, middlename, email, phone, gender, dob, acctype, currency, address, apartment, zipcode, country, state, city, emptype, salary, empname, bname, boccu, badd, password, pin,acctno, cot,tax,imf,atc,telex_code,image,q1,ans1,q2,ans2) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$phone', '$gender', '$dob', '$accounttype', '$accountcurrency', '$street', '$apartment', '$zipcode', '$country', '$state', '$city', '$EmploymentType', '$salary', '$EmploymentName', '$BenName', '$BenOccu', '$kin', '$password','$pin', '$acctno', '$cot', '$tax', '$imf', '$atc', '$telex_code', '$image', '$q1', '$ans1', '$q2', '$ans2')");
    //echo mysqli_error($conn);
    $result = mysqli_query($conn,$sql);
        if($result){
          header("Location:log.php");
        }else{
      return false;
      exit();
    }
   }
  }
//   //  $errorMsg = 0;
//   //  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   //  	 echo "
//   //           <script>    
//   //             document.getElementById('green').style.borderColor='red';
//   //            </script>";
//   //   }else{ 
//   //   $errorMsg = 1;
//   //   echo "
//   //           <script>    
//   //             toastr.error('A valid email address is required!', 'Invalid email', {\"progressBar\": true});
//   //             document.getElementById('email').style.borderColor='red';
//   //            </script>";
//   //   }

//     if($password != $cpassword){
//     	$errorMsg = 1;
//     	echo "
//             <script>    
//               toastr.error('Password does not match!', 'Invalid password combination', {\"progressBar\": true});
//               document.getElementById('cpassword').style.borderColor='red';
//              </script>";
//            }

  //    if($errorMsg == 0){
  //    	$pass = md5($password);
  //    	$dated = date(" d M Y H:i a"); }
  

?>
