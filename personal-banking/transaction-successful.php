<?php
include("header.php");
$token = $_GET["transferToken"];
include("../scripts/connect.php");
$query = $conn->query("SELECT * FROM transactions WHERE token = '$token'");
$rows = mysqli_fetch_assoc($query);
$amount = $rows['amt'];
$refNumber = $rows['refNumber'];
$accountholder = $rows['bname'];
$bankname = $rows['rbname'];
$dated = $rows['dated'];
$avalbal = $rows['accountbalance'];
?>           
        <?php 
        $userid=$_SESSION['USER']->id;
        $query = $conn->query("SELECT * FROM register WHERE id = '$userid'");
        while($userdetails = mysqli_fetch_array($query));
            // $allowtransfer = $userdetails['allowtransfer'];

            $userid=$_SESSION['USER']->id;
            $query=$conn->query("UPDATE transactions SET status = 0 WHERE refNumber = '$refNumber'");
            $query2=$conn->query("UPDATE register SET blocktransfer = 0 WHERE id = '$userid'");
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
         
    $id = $_SESSION['USER']->id;
    $userquery = $conn->query("SELECT * FROM register WHERE id= '$id' ");
    while($userdetails = mysqli_fetch_array($userquery));
        // $allowtransfer = $userdetails['allowtransfer'];
        if($allowtransfer =1) { ?>
            <link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
             <div class="nk-content nk-content-fluid">
              <div class="container-xl wide-lg">
               <div class="nk-content-body">
             <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Transaction successful!</h4>
                        <div class="nk-modal-text">
                            <p class="caption-text">You have successfully transfered <strong><?php echo $amt ?></strong> <?php echo "$accountcurrency"; ?> to <strong><?php echo $accountholder ?></strong>.</p>
                           <p class="sub-text-sm"><?php echo$localmsg ?></p>
                           <b>Details of your transaction are shown below;</b>
                        </div>
                        <ul class="buysell-overview-list">
                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Amount Debited</span></span>
                                    <span class="pm-title"><?php echo"$accountcurrency $amt"; ?></span>
                                </li>
                                 <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Transaction refrence:</span></span>
                                    <span class="pm-title"><?php echo "$refNumber"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Account holder:</span></span>
                                    <span class="pm-title"><?php echo "$accountholder"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Bank Name:</span></span>
                                    <span class="pm-title"><?php echo "$bankname"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Date:</span></span>
                                    <span class="pm-title"><?php echo "$dated"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Available Balance:</span></span>
                                    <span class="pm-title"><?php echo "$accountcurrency ".number_format($avalbal).""; ?></span>
                                </li>


                            </ul>
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group gx-4">
                                <li><a href="transfer" class="btn btn-lg btn-mw btn-primary">New transaction</a></li>
                                <li><a href="../account/dashboard.php" class="btn btn-lg btn-mw btn-secondary">Back to home</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p>All electronic fund transfers to or from your accounts at <?php echo$sitename ?> are governed by the Electronic Fund Transfer Disclosure provided to you when you established your account or when you requested other electronic fund transfer services.</p>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
<?php
} else { 
    $userid=$_SESSION['USER']->id;
   $query=$conn->query("UPDATE transactions SET status = 0 WHERE refNumber = '$refNumber'");
   $query2=$conn->query("UPDATE register SET blocktransfer = 0 WHERE id = '$userid'");
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
    ?>
    <link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
    <div class="nk-content nk-content-fluid">
              <div class="container-xl wide-lg">
               <div class="nk-content-body">
             <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Transaction pending!</h4>
                        <div class="nk-modal-text">
                            <p class="caption-text">Your transfer of <strong><?php echo $amt ?></strong> <?php echo "$accountcurrency"; ?> to <strong><?php echo $accountholder ?> cannot be completed at the moment.</strong>.</p>
                           <p class="sub-text-sm"><?php echo$localmsg ?></p>
                           <b>Details of your transaction are shown below;</b>
                        </div>
                        <ul class="buysell-overview-list">
                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Amount Debited</span></span>
                                    <span class="pm-title"><?php echo$accountcurrency ?><?php echo $amt ?></span>
                                </li>
                                 <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Transaction refrence:</span></span>
                                    <span class="pm-title"><?php echo "$refNumber"; ?></span>
                                </li>
                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Account holder:</span></span>
                                    <span class="pm-title"><?php echo "$accountholder"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Bank Name:</span></span>
                                    <span class="pm-title"><?php echo "$bankname"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Date:</span></span>
                                    <span class="pm-title"><?php echo "$dated"; ?></span>
                                </li>

                                <li class="buysell-overview-item">
                                <span class="pm-currency"><em class="icon ni ni-check-circle-fill"></em> <span>Available Balance:</span></span>
                                    <span class="pm-title"><?php echo "$accountcurrency ".number_format($avalbal).""; ?></span>
                                </li>
                            </ul>
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group gx-4">
                                <li><a href="../account/dashboard.php" class="btn btn-lg btn-mw btn-secondary">Back to home</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p>All electronic fund transfers to or from your accounts at <?php echo$sitename ?> are governed by the Electronic Fund Transfer Disclosure provided to you when you established your account or when you requested other electronic fund transfer services.</p>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
<?php } ?>
<?php
include("footer.php");
unset($_SESSION["transaction_session"]);
?>
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