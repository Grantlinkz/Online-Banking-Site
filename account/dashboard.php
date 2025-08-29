<?php
include('connect.php');
include('greeting.php');
include('functions.php');
check_login();
$id=$_SESSION['USER']->id;
$userquery = $conn->query("SELECT * FROM register where id='$id'");
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
    $accountbalance = $userdetails['accountbalance'];
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
                                <?php echo $firstname," ",$middlename," ",$lastname?>                                    </div>
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
                                    <a href="apply-loan.php">
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
                    <?php echo greetings()?> <?php echo $firstname," ",$middlename," ",$lastname?>                                       <div class="page-title-subheading"> Account Number: <strong class="badge badge-warning">
                                    <?php echo $acctno ?></strong>
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
          

<div class="row">


   <div class="col-md-6 col-xl-4">

    <div class="card mb-3 widget-content bg-grow-early">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Total Balance</div>
            </div><br>
            <div class="widget-content-right" >
                <div class="widget-numbers text-white"><span style="font-size:23px"> <?php echo $accountbalance,$accountcurrency?></span></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-arielle-smile">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Legder Balance</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span style="font-size:23px"> <?php echo $accountbalance,$accountcurrency?></span></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4">
   <div class="card mb-3 widget-content bg-midnight-bloom">
    <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
            <div class="widget-heading">Card Balance</div>
            <div class="widget-subheading">ATM only</div>
        </div>
        <div class="widget-content-right">
            <div class="widget-numbers text-white"><span> 0.00</span></div>
        </div>
    </div>
</div>
</div>
<div class="d-xl-none d-lg-block col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-premium-dark">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Loan Balance</div>
                <div class="widget-subheading">Avaliable </div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-warning"><span> 0.00</span></div>
            </div>
        </div>
    </div>
</div>
</div>




<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-danger">2,348,333.33%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 2,348,333.33%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Deposit Log</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-success">4,696,666.67%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 4,696,666.67%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Withdrawal Log</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">782,777.78%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 782,777.78%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">ATM Logs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">3,522,500.00%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 3,522,500.00%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Transaction Logs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Cash Transfer</div>
                        <div class="widget-subheading">all method </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">

                          503,214.29                                                    

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- <div class="row"> -->
  <div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Bank Deposit</div>
                    <div class="widget-subheading">Cash Deposited</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning">

                     391,388.89                                                    
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Wire Transfer</div>
                    <div class="widget-subheading">Offshore only</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger">469,666.67</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-xl-none d-lg-block col-md-6 col-xl-4">
    <div class="card mb-3 widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Telex Transfer</div>
                    <div class="widget-subheading">Quick Transfer</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-focus">140,900.00</div>
                </div>
            </div>
            <div class="widget-progress-wrapper">
                <div class="progress-bar-sm progress-bar-animated-alt progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="1" style="width: 1%;"></div>
                </div>
                <div class="progress-sub-label">
                    <div class="sub-label-left">Expenses</div>
                    <div class="sub-label-right">0%</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>















<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="mb-3 card">
            <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                    Transaction Statistics
                </div>

            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-eg-77">
                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                    <canvas id="canvas"></canvas>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Recent Transactions</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                    Loan Repayment Graph
                </div>
                <div class="btn-actions-pane-right">

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-eg-55">
                    <div class="widget-chart p-3">
                        <div style="height: 350px">
                            <canvas id="line-chart"></canvas>
                        </div>
                        <div class="widget-chart-content text-center mt-5">
                            <div class="widget-description mt-0 text-warning">
                                <i class="fa fa-arrow-left"></i>
                                <span class="pl-1">15.5%</span>
                                <span class="text-muted opacity-8 pl-1">Proceed to Loan Section</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


 <div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-right">
                <ul class="nav">
                    
                    <li class="nav-item">
                        <a href="ChangePwd.html" class="nav-link">
                         <i class='far fa-sun' style='font-size:20px;color:orange'></i>&nbsp; Change Account Password
                     </a>
                 </li>
                 <li class="nav-item">
                    <a href="ChangePin.html" class="nav-link">
                       <i class='far fa-sun' style='font-size:20px;color:orange'></i>&nbsp; Change Transaction PIN
                   </a>
               </li>
           </ul>
       </div>
       <div class="app-footer-right">
        <ul class="nav">
            <li class="nav-item">
                <a href="logout.php" class="nav-link">
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


<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/62825a1eb0d10b6f3e726e90/1g36j02mr';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->

<script src="tawkto.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/js/main.js"></script></body>
<script type="text/javascript" src="assets/js/mains.js"></script></body>

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
