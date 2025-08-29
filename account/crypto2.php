<?php 
include('connect.php');
require_once('header.php');
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0"> 
<p style="height:5px;"></p>
    <div class="nk-content">
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
                                            <button type="submit" class="btn btn-lg btn-block btn-primary" id="btn1" href="crypto23.php">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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