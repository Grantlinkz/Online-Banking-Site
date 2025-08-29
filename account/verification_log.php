<?php
include('connect.php');
include('functions.php');
check_login();
$id=$_SESSION['USER']->id;
$pin=$_SESSION['USER']->pin;
$userquery = $conn->query("SELECT * FROM register where id='$id' ");
while($userdetails = mysqli_fetch_array($userquery)){ 
    $id = $userdetails['id']; 
    $firstname = $userdetails['firstname']; 
    $lastname = $userdetails['lastname'];
    $middlename = $userdetails['middlename']; 
    $email = $userdetails['email'];
    $phone = $userdetails['phone'];
    $gender = $userdetails['gender'];
    $dob = $userdetails['dob'];
    $accounttype = $userdetails['acctype'];
    $accountcurrency = $userdetails['currency'];
    $street = $userdetails['address'];
    $apartment = $userdetails['apartment'];
    $zipcode = $userdetails['zipcode'];
	$country = $userdetails['country'];
    $state = $userdetails['state'];
    $city = $userdetails['city'];
    $EmploymentType = $userdetails['emptype'];
    $salary = $userdetails['salary'];
    $EmploymentName = $userdetails['empname'];
    $BenName = $userdetails['bname'];
    $BenOccu =$userdetails['boccu'];
    $kin =$userdetails['badd'];
    $password = $userdetails['password'];
    $pin = $userdetails['pin'];
    $acctno = $userdetails['acctno'];
    $image = $userdetails['image'];
    echo mysqli_error($conn);
}

if (isset($_POST['pin'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    // $id = ($_GET['id']);
    $pin = validate($_POST['pin']);

    // $pass = validate($_POST['password']);

    if (empty($pin)) {

        header("Location: verification_log.php?error=Pin is required");

        exit();

    }else{

       $sql = "SELECT * FROM register WHERE id=$id AND pin='$pin'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['pin'] === $pin ) {

                echo "Logged in!";

                $_SESSION['pin'] = $row['pin'];

                // $_SESSION['password'] = $row['password'];

                $_SESSION['id'] = $row['id'];

                header("Location: dashboard.php");

                exit();

            }
        }else{

            header("Location: verification_log.php?error=Incorect Pin");

            exit();

        }

    }
}

?>
 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from standardexpressbank.com/account/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 22:34:51 GMT --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/BANK-REDO-01.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/reg_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $sitename?> - Secure Portal</title>
</head>

<body>
     <div id="overlayer"></div>
 <div class="loader">
     <div class="loadingio-spinner-double-ring-kl1ac9u3aco">
         <div class="ldio-qf2q7ibdt8">
             <div></div>
             <div></div>
             <div>
                 <div></div>
             </div>
             <div>
                 <div></div>
             </div>
         </div>
     </div>
     <style type="text/css">
     @keyframes ldio-qf2q7ibdt8 {
         0% {
             transform: rotate(0)
         }

         100% {
             transform: rotate(360deg)
         }
     }

     .ldio-qf2q7ibdt8 div {
         box-sizing: border-box !important
     }

     .ldio-qf2q7ibdt8>div {
         position: absolute;
         width: 72px;
         height: 72px;
         top: 14px;
         left: 14px;
         border-radius: 50%;
         border: 8px solid #000;
         border-color: #6f42c1 transparent #6f42c1 transparent;
         animation: ldio-qf2q7ibdt8 1s linear infinite;
     }

     .ldio-qf2q7ibdt8>div:nth-child(2),
     .ldio-qf2q7ibdt8>div:nth-child(4) {
         width: 54px;
         height: 54px;
         top: 23px;
         left: 23px;
         animation: ldio-qf2q7ibdt8 1s linear infinite reverse;
     }

     .ldio-qf2q7ibdt8>div:nth-child(2) {
         border-color: transparent #826af8 transparent #826af8
     }

     .ldio-qf2q7ibdt8>div:nth-child(3) {
         border-color: transparent
     }

     .ldio-qf2q7ibdt8>div:nth-child(3) div {
         position: absolute;
         width: 100%;
         height: 100%;
         transform: rotate(45deg);
     }

     .ldio-qf2q7ibdt8>div:nth-child(3) div:before,
     .ldio-qf2q7ibdt8>div:nth-child(3) div:after {
         content: "";
         display: block;
         position: absolute;
         width: 8px;
         height: 8px;
         top: -8px;
         left: 24px;
         background: #6f42c1;
         border-radius: 50%;
         box-shadow: 0 64px 0 0 #6f42c1;
     }

     .ldio-qf2q7ibdt8>div:nth-child(3) div:after {
         left: -8px;
         top: 24px;
         box-shadow: 64px 0 0 0 #6f42c1;
     }

     .ldio-qf2q7ibdt8>div:nth-child(4) {
         border-color: transparent;
     }

     .ldio-qf2q7ibdt8>div:nth-child(4) div {
         position: absolute;
         width: 100%;
         height: 100%;
         transform: rotate(45deg);
     }

     .ldio-qf2q7ibdt8>div:nth-child(4) div:before,
     .ldio-qf2q7ibdt8>div:nth-child(4) div:after {
         content: "";
         display: block;
         position: absolute;
         width: 8px;
         height: 8px;
         top: -8px;
         left: 15px;
         background: #826af8;
         border-radius: 50%;
         box-shadow: 0 46px 0 0 #826af8;
     }

     .ldio-qf2q7ibdt8>div:nth-child(4) div:after {
         left: -8px;
         top: 15px;
         box-shadow: 46px 0 0 0 #826af8;
     }

     .loadingio-spinner-double-ring-kl1ac9u3aco {
         width: 98px;
         height: 98px;
         display: inline-block;
         overflow: hidden;
         background: #ffffff;
     }

     .ldio-qf2q7ibdt8 {
         width: 100%;
         height: 100%;
         position: relative;
         transform: translateZ(0) scale(0.98);
         backface-visibility: hidden;
         transform-origin: 0 0;
         /* see note above */
     }

     .ldio-qf2q7ibdt8 div {
         box-sizing: content-box;
     }

     .alert {
      padding: 20px;
      background-color: orange;
      color: white;
  }

  .alert-danger {
      padding: 20px;
      background-color: red;
      color: white;
  }

  .alert-success {
      padding: 20px;
      background-color: green;
      color: white;
  }

  .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
  }

  .closebtn:hover {
      color: black;
  }
     </style>
 </div>    <script type="text/javascript">
        (function (global) {

        if(typeof (global) === "undefined")
        {
            throw new Error("window is undefined");
        }

        var _hash = "!";
        var noBackPlease = function () {
            global.location.href += "#";

            // making sure we have the fruit available for juice....
            // 50 milliseconds for just once do not cost much (^__^)
            global.setTimeout(function () {
                global.location.href += "!";
            }, 50);
        };
        
        // Earlier we had setInerval here....
        global.onhashchange = function () {
            if (global.location.hash !== _hash) {
                global.location.hash = _hash;
            }
        };

        global.onload = function () {
            
            noBackPlease();

            // disables backspace on page except on input fields and textarea..
            document.body.onkeydown = function (e) {
                var elm = e.target.nodeName.toLowerCase();
                if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                    e.preventDefault();
                }
                // stopping event bubbling up the DOM tree..
                e.stopPropagation();
            };
            
        };

        })(window);
    </script>
 <div class="top-login">
        <div class="container h-100">
            <div class="h-100 d-flex justify-content-center align-items-center">
                <div class="shadow">
                    <div class="bg-light rounded">

                        <div class="pl-5 mt-2 py-3">
                            <a href="../index-2.php" class=" mb-0 d-flex align-items-center navbar-brand">
                                <center><img src="../images/<?php echo$logo ?>" width="200" height="60" alt="SEB_logo"></center>
                                

                            </a>
                        </div>

                        
            
                        <form class="px-4 pb-4 mt-2" action="#" method="POST">

                            <div class="form-group">
                                <label for="userid">Account Pin</label>
                                <div class="input-group">
                                    <div class="input-group-prepend d-flex align-items-center justify-content-center">
                                        <span class="input-group-text fa fa-lock text-purple" style="font-size: 1.5em;"></span>
                                    </div>
                                    <input type="password" name="pin" id="password" class="form-control" required>

                                </div>
                                <div class="span help-block text-danger"></div>
                            </div>

                            <div class="text-center my-4">
                                <button type="submit" name="verify" class="btn btn-block btn-outline-purple rounded">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- geodata js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystatecity.js"></script>


    <!-- !geodata js -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/jquery.easing.1.3.js"></script>
<script src="../assets/js/aos.js"></script>
<script src="../assets/js/jquery.fancybox.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>


<script src="../assets/js/main.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script>
        $(document).ready(function() {
            $("input, select").removeAttr("required");
            $("#phone").mask('+0000000000000');
        });
    </script> -->

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