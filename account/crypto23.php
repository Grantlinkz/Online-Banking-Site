<?php
// include('../scripts/functions.php');
// include('../scripts/auth.php');

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