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
<?php
include("functions.php");
include("connect.php");
// include('../account/crypto23.php');
include('../account/intl-transfer.php');
$userquery = $conn->query("SELECT * FROM intltransfer");
while($userdetails = mysqli_fetch_array($userquery)){
    $bankname = $userdetails['rbname']; 
    $accountholder = $userdetails['bname'];
    $accountNumber = $userdetails['accno'];
    $bankcountry = $userdetails['country'];
    $bankemail = $userdetails['bemailadd'];
    $swift = $userdetails['swift'];
    $iban = $userdetails['iban'];
    $routine = $userdetails['routing'];
    $amt = $userdetails['amt'];
    $description = $userdetails['des'];


 	$_SESSION['rbname'] = $bankname; $_SESSION['bname'] = $accountholder; $_SESSION['country'] = $bankcountry; $_SESSION['bemailadd'] = $bankemail; $_SESSION['routing'] = $routine; $_SESSION['swift'] = $swift;$_SESSION['iban'] = $iban; $_SESSION['accno'] = $accountNumber; $_SESSION['des'] = $description;
}	
sleep(3);
   if ($enable_cot_imf == "Yes") {
    $link = "../personal-banking/auth?verification=imf&transferToken=".$_SESSION['transaction_session']."";
   }
   elseif($enable_tin_ic_tac == "Yes"){
    $link = "../personal-banking/auth?verification=tac&transferToken=".$_SESSION['transaction_session']."";   
   }
   else{
    $link="../email/otp-mail.php?transferToken=".$_SESSION['transaction_session']."";
   }
echo "
 <script>$(\"#modalAlert\").modal(\"show\"); </script> 
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"modalAlert\">
        <div class=\"modal-dialog modal-dialog-centered modal-md\" role=\"document\">
            <div class=\"modal-content\">
                <a href=\"#\" class=\"close\" data-dismiss=\"modal\"><em class=\"icon ni ni-cross-sm\"></em></a>
                <div class=\"modal-body modal-body-lg\">
                    <div class=\"nk-block-head nk-block-head-xs text-center\">
                        <h5 class=\"nk-block-title\">Review transaction</h5>
                        <div class=\"nk-block-text\">
                            <div class=\"caption-text text-primary display-4\">Kindly review this transaction before proceeding.</div>
                        </div>
                    </div>
                    <div class=\"nk-block\">
                        <div class=\"buysell-overview\">
                            <ul class=\"buysell-overview-list\">
                                <li class=\"buysell-overview-item\">
                                <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> <span>Amount</span></span>
                                    <span class=\"pm-title\">$accountcurrency ".$_SESSION['amount']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Bank Name</span>
                                    <span class=\"pm-currency\">".$_SESSION['rbname']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Account Number</span>
                                    <span class=\"pm-currency\">".$_SESSION['accno']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Account Holder</span>
                                    <span class=\"pm-currency\">".$_SESSION['bname']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Bank Country</span>
                                    <span class=\"pm-currency\">".$_SESSION['country']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Routine Number</span>
                                    <span class=\"pm-currency\">".$_SESSION["routing"]."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Swift Number</span>
                                <span class=\"pm-currency\">".$_SESSION["swift"]."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Iban Number</span>
                                <span class=\"pm-currency\">".$_SESSION["iban"]."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Recepient Email</span>
                                    <span class=\"pm-currency\">".$_SESSION['bemailadd']."</span>
                                </li>
                                <li class=\"buysell-overview-item\">
                                    <span class=\"pm-title\"><em class=\"icon ni ni-alert-circle\"></em> Description</span>
                                    <span class=\"pm-currency\">".$_SESSION['des']."</span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class=\"buysell-field form-group\">
                            <div class=\"form-label-group\">
                                <label class=\"form-label\">Sending from:</label>
                            </div>
                            <input type=\"hidden\" value=\"btc\" name=\"bs-currency\" id=\"buysell-choose-currency-modal\">
                            <div class=\"dropdown buysell-cc-dropdown\">
                                <a href=\"#\" class=\"buysell-cc-choosen dropdown-indicator\" data-toggle=\"dropdown\">
                                    <div class=\"coin-item coin-btc\">
                                        <div class=\"coin-icon\">
                                            <em class=\"icon ni ni-wallet-out\"></em>
                                        </div>
                                        <div class=\"coin-info\">
                                            <span class=\"coin-name\">".strtoupper($accounttype)."</span>
                                            <span class=\"coin-text\">".substr($acctno, 0,4)."******</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"sub-text-sm text-primary\">* Our transaction fee are included.</div>
                        </div><!-- .buysell-field -->
                        <div class=\"buysell-field form-action text-center\">
                            <div>
                                <form action='' method='post'>
                                <input type='hidden' value='1'>
                                <button href=\"#\" class=\"btn btn-primary btn-block btn-lg eg-swal-av5\" data-dismiss=\"modal\" name='confirm' data-toggle=\"modal\" data-target=\"#confirm-coin\"> continue transaction</button>
                                </form>
                            </div>
                            <div class=\"pt-3\">
                                <a href=\"#\" data-dismiss=\"modal\" class=\"link link-danger\">Cancel transaction</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
";

 echo "
<script>
$('.eg-swal-av5').on(\"click\", function (e) {
 var timerInterval;
    Swal.fire({
      title: 'Proccessing Transaction!',
      html: 'Please wait...',
      timer: 5000,
      timerProgressBar: true,
      onBeforeOpen: function onBeforeOpen() {
        Swal.showLoading();
        timerInterval = setInterval(function () {
          Swal.getContent().querySelector('b').textContent = Swal.getTimerLeft();
        }, 100);
      },
      onClose: function onClose() {
        clearInterval(timerInterval);
        window.location.href='".$link."';
      }
    }).then(function (result) {
      if (
    
      result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer'); // eslint-disable-line
      }
    });
    e.preventDefault();
    });
    </script>
";




?>
 <script>$("#modalAlert").modal("show"); </script>