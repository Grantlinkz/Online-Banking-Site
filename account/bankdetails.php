<?php

// include("functions.php");
include("connect.php");
?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $sitename?></title>
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
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
<script type="text/javascript">
         		$("#modalAlert").modal("show");
                 jQuery("#modalAlert").on("shown.bs.modal", function() {
                 jQuery(this).data("bs.modal").options.backdrop = "static";
                 jQuery(this).data("bs.modal").options.keyboard = false;
                  });
         	</script>
<?php
// include('crypto23.php');
// include('intl-transfer.php');
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


 	$_SESSION['rbname'] = $bankname; $_SESSION['amt'] = $amt; $_SESSION['bname'] = $accountholder; $_SESSION['country'] = $bankcountry; $_SESSION['bemailadd'] = $bankemail; $_SESSION['routing'] = $routine; $_SESSION['swift'] = $swift;$_SESSION['iban'] = $iban; $_SESSION['accno'] = $accountNumber; $_SESSION['des'] = $description;
}
$userquery = $conn->query("SELECT * FROM setting");
while($userdetails = mysqli_fetch_array($userquery)){	
    $enable_cot_imf = $userdetails['enable_cot_imf'];
    $enable_tin_ic_tac = $userdetails['enable_tin_ic_tac'];
sleep(3);
   if ($enable_cot_imf =="Yes") {
    $link = "../personal-banking/auth?verification=imf&transferToken=".$_SESSION['transaction_session']."";
    // header("location: bankingdetails/imf.php");
    // $link = 'bankingdetails/auth.php';

   }
   elseif($enable_tin_ic_tac == "Yes"){
    $link = "../personal-banking/auth?verification=tac&transferToken=".$_SESSION['transaction_session'].""; 
    // header("location: bankingdetails/tin.php");  
   }
   else{
    $link="../email/otp-mail.php?transferToken=".$_SESSION['transaction_session']."";
   };
//    $link=link();

};
$id = $_SESSION['USER']->id;
$userquery = $conn->query("SELECT * FROM register WHERE id='$id' ");
while($userdetails = mysqli_fetch_array($userquery)){
    $accounttype = $userdetails['acctype'];
    $accountcurrency = $userdetails['currency'];
    $acctno = $userdetails['acctno'];

    $errorMsg = 0;
    if($accountbalance <= $amt){
        // return false;
        $errorMsg = 1;
        echo "
                <script>    
                  toastr.error('Amount Exceed's Balance!', 'Insufficient Funds', {\"progressBar\": true});
                  document.getElementByClassName('amt').style.borderColor='red';
                 </script>";
                //  return false;
                //  die;
    }
// sleep(3);
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
                                    <span class=\"pm-title\">$accountcurrency ".$_SESSION['amt']."</span>
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
                                <a href=\"bankdetails.php\" data-dismiss=\"modal\" class=\"link link-danger\">Cancel transaction</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
";}

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
      onClose: 
        window.location.href='".$link."'
      
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
     <!-- <meta http-equiv="refresh" content="3; url=../personal-banking/auth?verification=cot&transferToken=<?php echo$_SESSION['transaction_session']?> "> -->
       <?php

// window.location.href='".$link."';
?>
 <script type='text/javascript'>
    $("#modalAlert").modal("show"); 
 </script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62825a1eb0d10b6f3e726e90/1g36j02mr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript" src="assets/js/main.js"></script></body>
<script type="text/javascript" src="assets/js/mains.js"></script></body>

</html>