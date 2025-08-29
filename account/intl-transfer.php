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
include('connect.php');
include('greeting.php');
include('functions.php');
// include('bankdetails.php');
$id=$_SESSION['USER']->id;
$query1 = $conn->query("SELECT * FROM register WHERE id='$id'");
$rows = mysqli_fetch_array($query1);
$accountbalance = $rows['accountbalance'];
$blocktransfer = $rows['blocktransfer'];
$allowtransfer = $rows['allowtransfer'];

if (isset($_POST ['transfer'])){
    if($allowtransfer=='0'){
        die(include('suspended.php'));
        // die("You Have Been Susspended");
    }else{
    $rbname = ($_POST['rbname']); 
    $accno = ($_POST['accno']);
    $bname = ($_POST['bname']); 
    $bemailadd = ($_POST['bemailadd']);
    $swift = ($_POST['swift']);
    $iban =($_POST['iban']);
    $routing = ($_POST['routing']);
    $country = ($_POST['country']);
    $state = ($_POST['state']);
    $city = ($_POST['city']);
    $zip = ($_POST['zip']);
    $rstate = ($_POST['rstate']);
    $rcity = ($_POST['rcity']);
    $rzip = ($_POST['rzip']);
    $amt = ($_POST['amt']);
    $des = ($_POST['des']);
    $query = $conn->query("INSERT INTO intltransfer(rbname,accno,bname,bemailadd,swift,iban,routing,country,state,city,zip,rstate,rcity,rzip,amt,des) VALUES ('$rbname','$accno','$bname','$bemailadd','$swift','$iban','$routing','$country','$state','$city','$zip','$rstate','$rcity','$rzip','$amt','$des')");
    if($query){
        // header("location: ../scripts/bankdetails.php");
        // return header("location: bankdetails.php");
        include('bankdetails.php');       
}else{
    echo mysqli_error($conn);}
}
}
?>
<?php
include('connect.php');
// include('functions.php');
check_login();
$id=$_SESSION['USER']->id;
$userquery = $conn->query("SELECT * FROM register where id='$id'");
while($userdetails = mysqli_fetch_array($userquery)){
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

?>

<!doctype html>
<html lang="en">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> <?php echo $sitename?> - UserPanel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is the first mobile banking application from Digital Forest Team.">
    <meta name="msapplication-tap-highlight" content="no">
<!--
=========================================================
* 
Firstmonumentcreditunion Application  v1.0.0
=========================================================
* Product from: Digital Forest Team via digitalforest4@gmail.com 
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="assets/css/digital_forest_team_assets_main.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="https://kit.fontawesome.com/128925c979.js" crossorigin="anonymous"></script>

<style>
.arrow {
  border: solid green;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>


<style>
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

.img--wrapper {
  padding: 6px;
}

.image--cover {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin: 20px;
  align-items: center;

  object-fit: cover;
  object-position: center right;
}


</style>















</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow" style="background-color: #09dcdf;">
        <div class="app-header__logo">
            <div> </div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="header-menu nav">
                    <li class="nav-item">
                        <a href="../personal-banking/summary.php" class="nav-link">

                            <i class='fas fa-chart-line' style='font-size:20px;color:orange'></i>&nbsp;E-Estatement
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="loan-menu.php" class="nav-link">
                            <i class='fas fa-piggy-bank' style='font-size:20px;color:orange'></i>&nbsp;
                            Loans
                        </a>
                    </li>
                    <!-- <li class="dropdown nav-item">
                        <a href="pay-bills" class="nav-link">
                           <i class='fas fa-donate' style='font-size:20px;color:orange'></i>&nbsp;
                           Pay Bills
                       </a>
                   </li> -->
               </ul>        </div>
               <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                      <img width="60" class="rounded-circle" src="image/<?php echo $image ?>" alt="DP">

                                  </a>
                                  
                              </div>
                          </div>
                          <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                            <?php echo $firstname," ",$middlename," ",$lastname?>                                      </div>
                                <div class="widget-subheading">

                                    <?php echo $sitename?>
                                </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <a href="logout.php">  <i class='fas fa-power-off' style='font-size:28px;color:orange'></i></a>
                            </div>
                        </div>
                    </div>
                </div>        </div>
            </div>
        </div>        


        <div class="app-main">


    <!----only from Digital Forest--Side Bar----------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                
                <ul class="vertical-nav-menu responsive">
                    <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href="dashboard.php" class="mm-active">
                          <i class="fa fa-home" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                          Main Menu
                      </a>
                  </li>
                  <li class="app-sidebar__heading">User Menu</li>
                  <li >
                    <a href="#">
                        <i class="fa fa-bank" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                        My Account Menu
                        &nbsp;<i class="arrow down"></i>
                    </a>
                    <ul >
                        <li>
                            <a href="account.php">
                                <i class="metismenu-icon"></i>
                                Customer Profile
                            </a>
                        </li>
                        <li>
                            <a href="nok.php">
                                <i class="metismenu-icon">
                                </i>Next of kin
                            </a>
                        </li>
                        <li>
                            <a href="job.php">
                                <i class="metismenu-icon">
                                </i>Job History
                            </a>
                        </li>
                        <li>
                            <a href="summary.html">
                                <i class="metismenu-icon">
                                </i>Account Summary
                            </a>
                        </li>
                        <!--    <li>
                                <a href="transaction-codes">
                                    <i class="metismenu-icon">
                                    </i>Transaction Codes
                                </a>
                            </li>-->
                            
                        </ul>
                    </li>
                    <li >
                        <a href="#">
                           <i class="fa fa-exchange" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                           Money Transfer
                           &nbsp;<i class="arrow down"></i>
                       </a>
                       <ul >
                        <li>
                            <a href="intl-transfer.php">
                                <i class="metismenu-icon">
                                </i>Wire Transfer
                            </a>
                        </li>
                        <li>
                            <a href="samebank-transfer.php">
                                <i class="metismenu-icon">
                                </i>Same Bank Transfer
                            </a>
                        </li>

                        

                    </ul>
                </li>
                <li >
                                <a href="#">
                                    <i class="fa fa-btc" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                                    Crypto Currency
                                    &nbsp;<i class="arrow down"></i>
                                </a>
                                <ul >
                                    <li>
                                        <a href="crypto.php">
                                            <i class="metismenu-icon"></i>
                                            Manage Assets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="crypto2.php">
                                            <i class="metismenu-icon">
                                            </i>Deposit Crypto
                                        </a>
                                    </li>
                                    <li>
                                        <a href="crypto3.php">
                                            <i class="metismenu-icon">
                                            </i>Fiat Withdrawal
                                        </a>
                                    </li>
                                    </ul>






                <li >
                    <a href="#">
                        <i class="fa fa-list" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                        Account Statement
                        &nbsp;<i class="arrow down"></i>
                    </a>
                    <ul >
                        <li>
                            <a href="../personal-banking/summary.php">
                                <i class="metismenu-icon">
                                </i>View E-Estatement
                            </a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a href="#">
                     <i class="fa fa-money" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                     Loan & Mortage
                     &nbsp;<i class="arrow down"></i>
                 </a>
                 <ul >
                    <li>
                        <a href="apply-loan.php
                        ">
                            <i class="metismenu-icon">
                            </i>Request Loan
                        </a>
                    </li>
                    <li>
                        <a href="loan-menu.php">
                            <i class="metismenu-icon">
                            </i>Loan Status
                        </a>
                    </li>

                </ul>
            </li>
            <!-- <li >
                <a href="#">
                 <i class="fa fa-credit-card" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                 My Bank Card
                 &nbsp;<i class="arrow down"></i>
             </a>
             <ul >
                <li>

                    <a href="request-card">
                        <i class="metismenu-icon">
                        </i>Request Credit/Debit Card
                    </a>
                </li>
                <li>
                    <a href="card">
                        <i class="metismenu-icon">
                        </i>My Card Status
                    </a>
                </li>
                <li>
                    <a href="card">
                        <i class="metismenu-icon">
                        </i>My Approved Cards
                    </a>
                </li>


            </ul>
        </li> -->
                   <!--- <li><a href="deposit-funds">
                               <i class="fa fa-arrow-down" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                            Make Deposit
                        </a>
                    </li>-->
                    <!-- <li><a href="pay-bills">
                     <i class="fa fa-shopping-cart" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                     Pay Utility Bills
                 </a>
             </li> -->
             <li class="app-sidebar__heading">Support</li>
             <li >
                <a href="#">
                    <i class="fa fa-envelope-o" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                    Customer Support
                    &nbsp;<i class="arrow down"></i>
                </a>
                <ul >
                    <li>
                        <a href="support.php">
                            <i class="metismenu-icon">
                            </i>Contact Customer Services
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="#">
                   <i class="fa fa-cogs" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
                   Account Settings
                   &nbsp;<i class="arrow down"></i>
               </a>
               <ul >
                <li>
                    <a href="ChangePin.html">
                        <i class="metismenu-icon">
                        </i>Change Transaction PIN
                    </a>
                </li>
                <li>
                    <a href="ChangePwd.html">
                        <i class="metismenu-icon">
                        </i>Change Account Password
                    </a>
                </li>
                <li>
                    <a href="security_question.php">
                        <i class="metismenu-icon">
                        </i>My Security Questions
                    </a>
                </li>



            </ul>
        </li>

        <li  >
            <a href="logout.php">
              <i class="fa fa-sign-out" style='font-size:20px;color:orange' aria-hidden="true"></i>&nbsp;
              Logout
          </a>
      </li>

</ul>


</div>
</div>
</div>                                             	   
<!------Side Bar----------->







<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class='fas fa-comments-dollar' style='font-size:28px;color:orange'></i>&nbsp;
        </div>
        <div>
        <?php echo greetings()?> <?php echo $firstname," ",$middlename," ",$lastname?> 
            <div class="page-title-subheading"> Account Number:  <strong class="badge badge-warning">
                        <?php echo $acctno?>   </strong>
            </div>
        </div>

        &nbsp;&nbsp;&nbsp;




</div>
<div class="page-title-actions">

<div class="d-inline-block dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
    <span class="btn-icon-wrapper pr-2 opacity-7">
       <i class='far fa-money-bill-alt' style='font-size:20px;color:white'></i>&nbsp;
   </span>
   Quick Transfer
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<ul class="nav flex-column">
    <li class="nav-item">
        <a href="intl-transfer.php" class="nav-link">
            <i class="nav-link-icon lnr-inbox"></i>
            <span>
                Wire Transfer
            </span>
            <div class="ml-auto badge badge-pill badge-secondary">0</div>
        </a>
    </li>

    <li class="nav-item">
        <a href="samebank-transfer.php" class="nav-link">
            <i class="nav-link-icon lnr-picture"></i>
            <span>
                Same Bank Transfer
            </span>
        </a>
    </li>

</ul>
</div>
</div>
</div>    </div>
</div>  



<link href="../assets/css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../assets/js/SpryValidationTextField.js" type="text/javascript"></script>

<!-- <script src="/secure/admin/library/jquery.min.js" type="text/javascript"></script> -->

<link href="../assets/css/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="../assets/js/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="../assets/css/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="../assets/js/SpryValidationSelect.js" type="text/javascript"></script>

<div id="errorCls" style="color:#FF0000 !important;font-size:14px;font-weight:bold;">&nbsp;</div> 






<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">

<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
    <span><i class='fas fa-globe' style='font-size:24px;color:orange'></i> International Money Transfer</span>
</a>
</li> 
</ul>                   

<div class="tab-content">
<div class="form-desc" style="color:#05194B; text-align:justify;">
    The <?php echo $sitename?> International Money Transfer (IMT) is designed to enable both <?php echo $sitename?> account holders
    and non-account holders 
    send and receive 
    funds to and from any <?php echo $sitename?> subsidiary in America, Europe, Asia and West Africa. In line with a directive by the 
    International Money Funds and US Department of States,
    recipients of funds through <?php echo $sitename?> in United States
    must either be <?php echo $sitename?> account holders or must be identified by a <?php echo $sitename?> account holder.

</div>
<br>

<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
            <form class="" action="" method="POST" >
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Beneficiary Bank Name</label>
                            <input name="rbname" id="exampleEmail11" value="" placeholder="Receiver Bank Name" type="text" class="form-control" required ></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="examplePassword11" class="">Beneficiary Account Number</label>
                                <input name="accno" id="examplePassword11" value="" placeholder="Receiver Account Number" type="tel"  class="form-control" required ></div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Beneficiary FullName</label>
                                    <input name="bname" id="exampleEmail11" value="" placeholder="Receiver Fullname" type="text" class="form-control" required ></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Beneficiary Email Address</label>
                                        <input name="bemailadd" id="examplePassword11" value="" placeholder="Receiver Email Address" type="email"  class="form-control" required ></div>
                                    </div>
                                </div>
                                <br>
                                <font color="red"> Please fill only the one available to you ( Either Swiftcode, Routing or IBAN)</font><hr>
                                <div class="form-row">

                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Swift Code</label>
                                            <input name="swift" id="exampleEmail11" value="" placeholder="Swift Code" type="text" class="form-control"></div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Iban</label>
                                                <input name="iban" id="exampleEmail11" value="" placeholder="IBAN" type="text" class="form-control"></div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Routing</label>
                                                    <input name="routing" id="exampleEmail11" value="" placeholder="Routing" type="text" class="form-control"></div>
                                                </div>

                                            </div>
                                            <br>
                                            <font color="red"> Beneficiary Bank Address</font>
                                            <hr>

                                            <div class="form-row">

                                                <script type= "text/javascript" src="/secure/digital_forest_team_assets/Digital_forest_team_bankia_countries.js"></script>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Country</label>
                                                       <!-- <select id="country" class="form-control" required  name=""></select>   -->
                                                       <input type="text" name="country" id="country" class="form-control" required >
                                                        <!-- <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span> -->
                                                    </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">State</label>
                                                     <input class="form-control" required  name ="state" id ="state"  ></div>
                                                 </div>

                                                 <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">City</label>
                                                     <input class="form-control" required  name ="city" id ="city"  > </div>
                                                 </div>

                                                 <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Zipcode</label>
                                                     <input class="form-control" required  name ="zip" id ="zip"  > </div>
                                                 </div>
                                             </div>


                                             <br>
                                             <font color="red"> Beneficiary Address</font>
                                             <hr>

                                             <div class="form-row">

                                                <script type= "text/javascript" src="assets/js/Digital_forest_team_bankia_countries.js"></script>

                                                <div class="col-md-12">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">State</label>
                                                     <input class="form-control" required  name ="rstate" id ="state"  > </div>
                                                 </div>

                                                 <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">City</label>
                                                     <input class="form-control" required  name ="rcity" id ="rcity"  ></div>
                                                 </div>

                                                 <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Zipcode</label>
                                                     <input class="form-control" required  name ="rzip" id ="rzip"  > </div>
                                                 </div>
                                             </div>

                                             <br><hr>
                                             <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                                <div class="coin-item coin-btc">
                                                                    <div class="coin-icon">
                                                                        <em class="icon ni ni-sign-<?php echo strtolower($money); ?>"></em>
                                                                    </div>
                                                                    <div class="coin-info">
                                                                        <!-- <span class="coin-name"><?php echo "$accounttype";?> (<?php echo "$accountcurrency";?>)</span> -->
                                                                        <span class="coin-text">Available Balance:<?php echo "$accountcurrency ".number_format(currencyConverter($accountbalance))."";?></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                             <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Amount ():</label>
                                                        <input name="amt" id="amt" value="" placeholder="Amount" type="number" step="0.01"  class="form-control" required ></div>
                                                    </div>
                                                </div>


                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Reason for Wire</label>
                                                    <input name="des"  style="height:80px;" id="exampleAddress"  type="text" class="form-control" required></div>


                                                    <input type="hidden" value="1664381402" name="dot" > 
                                                    <input name="toption" type="hidden" readonly="true" value="IT"  class="form-control" required  />
                                                    <input name="saccno" type="hidden" readonly="true" value="2077453890"  id="saccno" class="form-control" required  />

                                                    <button name="transfer" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                        <i class='fas fa-globe' style='font-size:24px;color:orange'></i>&nbsp;
                                                        Proceed Transfer ></button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>





                                    <script language="javascript">
populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
populateCountries("country2");
populateCountries("country2");
</script>

<script type="text/javascript">

var sprytf_rbname = new Spry.Widget.ValidationTextField("sprytf_rbname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rname = new Spry.Widget.ValidationTextField("sprytf_rname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:10, maxChars: 15, validateOn:["blur", "change"]});
var sprytf_bemailadd = new Spry.Widget.ValidationTextField("sprytf_bemailadd", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rcountry = new Spry.Widget.ValidationTextField("sprytf_rcountry", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rstate = new Spry.Widget.ValidationTextField("sprytf_rstate", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:10, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {is:true, validateOn:["blur", "change"]});
//-->
</script>




<div class="app-wrapper-footer">
<div class="app-footer">
    <div class="app-footer__inner">
        <div class="app-footer-right">
            <ul class="nav">
                
                <li class="nav-item">
                    <a href="ChangePwd" class="nav-link">
                     <i class='far fa-sun' style='font-size:20px;color:orange'></i>&nbsp; Change Account Password
                 </a>
             </li>
             <li class="nav-item">
                <a href="ChangePin" class="nav-link">
                   <i class='far fa-sun' style='font-size:20px;color:orange'></i>&nbsp; Change Transaction PIN
               </a>
           </li>
       </ul>
   </div>
   <div class="app-footer-right">
    <ul class="nav">
        <li class="nav-item">
            <a href="logout" class="nav-link">
               <i class='fas fa-power-off' style='font-size:20px;color:orange'></i>&nbsp; Logout
           </a>
       </li>
       
   </ul>
</div>
</div>
</div>
</div>    </div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>


<script type="text/javascript" src="assets/js/main.js"></script></body>
<script type="text/javascript" src="assets/js/mains.js"></script></body>

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
