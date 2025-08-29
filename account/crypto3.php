<?php 
include('connect.php');
require_once('header.php');
?>


<link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
  <p style="height:50px;"></p>
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
                                                <select type="number" class="form-control form-control-lg form-control-number" id="coin" name="coin"  required>
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
                                                <input type="number" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="150.00" required>
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
                                                <p>Kindly Specify the wallet address and crypto currency you would like to withdraw. In the case of Fiat Currency, Kindly provide Account Number, Account Holder, Bank Name, Swift Code/Sort code, Bank Address and any other  information you find applicable. For more information, Kindly <a href="../contact.html">contact</a> our 24/7 online customer care representative.</p></label>
                                            </div>
                                            <p></p>
                                            <div class="form-control-group">
                                                <textarea class="form-control form-control-lg form-control-number" id="destination" name="destination" placeholder="Crypto Wallet or Bank Account Details" required></textarea>
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

                <script>
                    $('#btn2').on('click',function(){
                   Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
                   })
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