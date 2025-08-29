<?php 
include('connect.php');
include('header.php');
?>
    <link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
  <p style="height:5px;"></p>
    <div class="nk-content" style="background-color:white;">
       <div class="container-xl wide-lg">
        <div class="nk-content-body">
        <div class="nk-block-head">
         <div class="nk-block-head-sub">
         </div>
           <div class="nk-block-between-md g-4 card-bordered">
             <div class="nk-block-head-content">
              <h4 class="nk-block-title fw-normal">Manage Digital Assets.</h4>
                <div class="nk-block-des">
                  <p>
                    <?php echo$servername ?> Crypto assets management tool enables users to tie in multiple crypto accounts and wallets so that they can easily keep an eye on all of their cryptocurrency holdings using a single dashboard.  
                   </p>
                      </div>
                       </div>
                            <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="crypto" class="btn btn-light text-primary"><span><em class="icon ni ni-bitcoin"></em> Crypto Currencies</span></a></li>     
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!isset($_GET['action'])) {  ?>
                        <div class="container-fluid">
                      <div class="nk-block-head-xs">
                               <div class="nk-block-between-md">
                                                   <div class="nk-block-head-content">
                                                        <h5 class="nk-block-title title">Digital Wallets</h5>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="row g-2">
                                            	<?php $query = $conn->query("SELECT * FROM cryptos WHERE status = 1");
                                                 while ($rows = mysqli_fetch_array($query)) {
                                                 	$coin = $rows['code'];
                                                    $userid = $rows['code']; 
                                                 	$query2 = $conn->query("SELECT * FROM wallets WHERE userid = '$userid' and coin = '$coin'");
                                                     if(mysqli_num_rows($query2) < 1){
                                                     	$bal = 0.00000;
                                                     	$dollar = 0;

                                                     }else{
                                                     	$r = mysqli_fetch_array($query2);
                                                     	$bal = $r['balance'];
                                                     }
                                                  
                                            	 ?>
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="#">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                       <?php echo$rows['symbol'] ?>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title"><?php echo$rows['crypto_name'] ?></h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div class="amount"><?php echo round($bal, 5); ?><span class="currency currency-nio"><?php echo$rows['code'] ?></span><br></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> <?php  } ?>
                                            </div><!-- .row -->
                                                                          
                          
                        <ul class="nk-nav nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Deposit History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto?action=deposit">Deposit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto?action=withdraw">Withdraw Fiat<span class="badge badge-primary"></span></a>
                                </li>
                            </ul>
                            <?php $query = $conn->query("SELECT * FROM crypto_deposits WHERE userid = '$userid'");
                            while($rows = mysqli_fetch_array($query)){
                            	if($rows['status'] == "pending"){
                            		$status = "<small class='badge badge-warning'>Pending</small>";
                            	}
                            	if($rows['status'] == "success"){
                            		$status = "<small class='badge badge-success'>Successful</small>";
                            	}
                            	if($rows['status'] == "fail"){
                            		$status = "<small class='badge badge-danger'>Failed</small>";
                                }

                            	$coin = $rows['coin'];
                            	$query2 = $conn->query("SELECT * FROM cryptos WHERE code = '$coin'");
                            	$r = mysqli_fetch_array($query2);
                             ?>
                             <p></p>
                            
                            <div class="tranx-list tranx-list-stretch card card-bordered">
                                    <div class="tranx-item">
                                        <div class="tranx-col">
                                            <div class="tranx-info">
                                                <div class="tranx-badge">
                                                    <span class="tranx-icon ">
                                                      <h6 style="font-size:30px;" class="text-primary"><?php echo$r['symbol'] ?></h6>
                                                    </span>
                                                </div>
                                                <div class="tranx-data">
                                                    <div class="tranx-label"><?php echo $r['crypto_name'] ?></div>
                                                    <div class="tranx-date"><?php echo $rows['datecreated'] ?></div>
                                                    <?php echo$status ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tranx-col">
                                            <div class="tranx-amount">
                                                <div class="number"><?php echo$rows['amount'] ?> <span class="currency currency-btc"><?php echo$rows['coin'] ?></span></div>
                                            <div class="number-sm"><?php echo round(cryptoConverterB($rows['amount'], $r['code']), 2); ?> <span class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-tranx-item -->
                                </div>
                            <?php } ?>
                    <?php } elseif($_GET['action'] == "deposit"){ ?>
  <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                     
                                <div class="buysell-title text-center">
                                    <h2 class="title">Which Crypto Asset will you like to Deposit? </h2>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                                    <form action="../scripts/auth?action=deposit_crypto" id="buy_form" method="post" class="buysell-form">
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Choose your preffered asset</label>
                                            </div>
                                            <div class="form-control-group">
                                                <select type="number" class="form-control form-control-lg form-control-number" id="coin" name="coin">
                                                <div class="form-dropdown">
                                                    <div class="text">USD<span></span></div>
                                                </div>
                                                <option selected value="">Choose Crypto Asset</option>
                                               <?php $query = $conn->query("SELECT * FROM cryptos WHERE status = 1");
                                                 while ($rows = mysqli_fetch_array($query)) {
                                            	 ?>
                                            	 <option value="<?php echo$rows['code'] ?>"><?php echo$rows['crypto_name'] ?></option>
                                            	<?php } ?>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Amount to Deposit</label>
                                            </div>
                                            <p></p>
                                            <div class="form-control-group">
                                                <input type="number" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="150.00">
                                                <div class="form-dropdown">
                                                    <div class="text">USD<span></span></div>
                                                </div>
                                            </div>
                                            <div id="buy_result"></div>
                                            <div class="form-note-group">
                                                <span class="buysell-min form-note-alt">Minimum: 10.00 USD</span>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-action">
                                            <button type="submit" class="btn btn-lg btn-block btn-primary" id="btn1">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            <?php  } elseif(isset($_GET['amount'])) { unset($_SESSION['deposit_crypto']); ?>

            <div class="container-fluid p-2">
       <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Successful!</h4>
                        <div class="nk-modal-text">
                            <p class="caption-text">Crypto deposit of <strong><?php echo $_GET['coin'] ?> <?php echo $_GET['amount'] ?></strong>  on  your <strong><?php echo "$shortname $accounttype"; ?></strong> Have been received. You will receive an authomatic notification once your transaction was confirmed on the blockchain Network. This usually take upto 15 minutes.</p>
                        </div>
               
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group gx-4">
                                <li><a href="crypto" class="btn btn-lg btn-mw btn-primary">Done</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
       </div>
     <?php  } elseif($_GET['action'] == "withdraw") { ?>
       <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                     
                                <div class="buysell-title text-center">
                                    <h2 class="title">Which Crypto Asset will you like to Withdraw? </h2>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                                    <form action="../scripts/auth?action=withdraw_crypto" id="withdraw_form" method="post" class="buysell-form">
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Withdraw Crypto asset</label>
                                            </div>
                                            <div class="form-control-group">
                                                <select type="number" class="form-control form-control-lg form-control-number" id="coin" name="coin">
                                                <div class="form-dropdown">
                                                    <div class="text">USD<span></span></div>
                                                </div>
                                                <option selected value="">Choose Crypto Asset to withdraw</option>
                                               <?php $query = $conn->query("SELECT * FROM cryptos WHERE status = 1");
                                                 while ($rows = mysqli_fetch_array($query)) {
                                                 	$coin = $rows['code']; 
                                                 	$query2 = $conn->query("SELECT * FROM wallets WHERE userid = '$userid' and coin = '$coin'");
                                                     if(mysqli_num_rows($query2) < 1){
                                                     	$bal = 0.00000;
                                                     	$dollar = 0;

                                                     }else{
                                                     	$r = mysqli_fetch_array($query2);
                                                     	$bal = $r['balance'];
                                                     }
                                                  
                                            	 ?>
                                            	 <option value="<?php echo$rows['code'] ?>"><?php echo$rows['crypto_name'] ?> (<?php echo$rows['code'] ?> <?php echo round($bal, 5) ?>)</option>
                                            	<?php } ?>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Amount to Withdraw</label>
                                            </div>
                                            <p></p>
                                            <div class="form-control-group">
                                                <input type="number" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="150.00">
                                                <div class="form-dropdown">
                                                    <div class="text">USD<span></span></div>
                                                </div>
                                            </div>
                                            <div id="buy_result"></div>
                                            <div class="form-note-group">
                                                <span class="buysell-min form-note-alt">Minimum: 10.00 USD</span>
                                            </div>
                                        </div><!-- .buysell-field -->

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">
                                                <p>Kindly Specify the wallet address and crypto currency you would like to withdraw. In the case of Fiat Currency, Kindly provide Account Number, Account Holder, Bank Name, Swift Code/Sort code, Bank Address and any other  information you find applicable. For more information, Kindly <a href="contact">contact</a> our 24/7 online customer care representative.</p></label>
                                            </div>
                                            <p></p>
                                            <div class="form-control-group">
                                                <textarea class="form-control form-control-lg form-control-number" id="destination" name="destination" placeholder="Crypto Wallet or Bank Account Details"></textarea>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-action">
                                            <button type="submit" class="btn btn-lg btn-block btn-primary" id="btn2">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
     <?php } else{} ?>
 <script src="../js/jquery.min.js"></script>                  
  <script type="text/javascript">
    $(document).ready(function (e) {
    $("#buy_form").on('submit',(function(e) {
         document.getElementById("btn1").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "../scripts/auth?action=deposit_crypto",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            document.getElementById("btn1").disabled = false;
            $("#buy_result").html(data);
            },
            error: function() 
            {
            }           
       });
    }));
});

 //WITHDRAW CRYPTO
   
    $(document).ready(function (e) {
    $("#withdraw_form").on('submit',(function(e) {
         document.getElementById("btn2").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "../scripts/auth?action=withdraw_crypto",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            document.getElementById("btn2").disabled = false;
            $("#buy_result").html(data);
            },
            error: function() 
            {
            }           
       });
    }));
}); 
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
<!-- main 24 -->
<?php

include('../scripts/function3.php');
// include('../scripts/auth.php');

include('connect.php');
// include('header.php');
// include('../account/header2.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" tabindex="-1" role="dialog" id="myModal" data-keyboard="false" data-backdrop="static"> -->
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">Confirm Deposit</h5>
                        <div class="nk-block-text">
                            <div class="caption-text">You are about to get <strong><?php cryptoConverter2($amount, $coin) ?></strong> <?php echo$coin ?> for <strong><?php echo$amount ?></strong> USD*</div>
                            <span class="sub-text-sm">Exchange rate: 1 <?php echo$coin ?> = <?php cryptoConverter(1, $coin);  ?> USD</span>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="buysell-overview">
                            <ul class="buysell-overview-list">
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Deposit To</span>
                                    <span class="pm-currency"><?php echo$coindata['symbol'] ?> <span><?php echo$coindata['crypto_name'] ?></span></span>
                                </li>
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Total</span>
                                    <span class="pm-currency"><?php echo number_format($amount); ?> USD</span>
                                </li>
                            </ul>
                            <div class="sub-text-sm">* Our transaction fee are included.</div>
                        </div>
                      <div class="text text-center">
                      	<strong>Carefully follow the procedures below for successful investment.</strong>
                      </div>
                       <center>
                                 <div style="padding-top: 10px; height: 200px; width: 230px;" class="bg-primary">
                                      	<img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo strtolower($coindata['crypto_name']) ?>%3A<?php echo$coindata['address'] ?>%3Famount%3D<?php cryptoConverter2($amount, $coin); ?>&chs=200x180&choe=UTF-8&chld=L|2' rel='nofollow' alt='qr code'><a href='#' border='0' style='cursor:default'  rel='nofollow'></a>
                                      </div>
                                      </center>
                                        <p class="text-center">
                                    	<strong>Amount: <?php echo $coindata['code'] ?> <?php cryptoConverter2($amount, $coin); ?><br></strong>
                                        Scan the QR code above or copy and pay <span id="atPay"></span> to this <strong><code><?php echo strtoupper($coindata['crypto_name']) ?></code></strong> address below: </br>
                                        <div class="nk-refwg-url">
                                                <div class="form-control-wrap">
                                                    <div class="form-clip clipboard-init" data-clipboard-target="#add" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy</span></div>
                                                    <div class="form-icon">
                                                        <em class="icon ni ni-link-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control copy-text" id="add" value="<?php echo$coindata['address'] ?>">
                                                </div>
                                            </div>
                                        </div>
                   
                                    </p>
                                     <strong class="text-danger">Please Note*<br></strong>
                                 <p class="text-left text-muted"><em class="icon ni ni-info-fill"></em> Please ensure you deposit the exact amount of cryptocurrency before confirming your transaction.</p>
                                   <p class="text-left text-muted"><em class="icon ni ni-info-fill"></em> Incase the current session closed after you made payment, you can always start a new transaction with the exact amount you deposited.</p>
                                    <p class="text-left text-muted"><em class="icon ni ni-info-fill"></em> Our customer care representatives are always available for support.</p>
                                    <strong>Already made payment of <?php echo $coindata['code'] ?> <?php cryptoConverter2($amount, $coin); ?> to the wallet address above<em class="icon ni ni-help-fill"></em></strong>
                                    <form action="../scripts/auth?action=confirm_crypto" method="post" id="confirm_crypto">
                                    <div class="form-group">
                                    	<input type="hidden" name="coin" value="<?php echo$coin ?>">
                                    	<input type="hidden" name="amount" value="<?php cryptoConverter2($amount, $coin); ?>">
                                    	<strong for="address">Click the button below to confirm transaction.</strong>
                                    	<input type="text" class="form-control" name="address" id="address" placeholder="Sender Wallet address(Optional)">
                                    </div>
                                    <div id="depositResult"></div>
                                <div class="form-actions right">
                                    <button type="submit" id="btn1" class="btn btn-raised btn-primary btn-block actionBtn" href="crypto24.php">
                                         Confirm Transaction
                                    </button>
                                </form>
                        <div class="buysell-field form-action text-center">
                            <div class="pt-3">
                                <a href="#" data-dismiss="modal" class="link link-danger">Cancel Order</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    <!-- </div>.modal  -->
</body>
  </html>
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