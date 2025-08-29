<?php
include("register.php");
include("../scripts/functions.php");
?>
 <!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/BANK-REDO-01.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/reg_style.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<div class="reg-top h-100 py-5">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-10 col-lg-8 mx-auto">
<div class="shadow">
<div class="bg-light rounded">

<div class="pl-2 pl-md-5 mt-2 pb-3 sticky-top bg-light d-flex pt-2">
<a href="../index-2.php" class=" mb-0 d-flex align-items-center navbar-brand">
                                <center><img src="../images/<?php echo$logo ?>" width="200" height="60" alt="SEB_logo"></center>
                                

                            </a>
<div class="ml-auto mr-5 mt-2 ">
<a href="log.php" class="btn btn-outline-purple px-lg-3">Login</a>
</div>


</div>

<form class="p-4" id="myForm" action="#" method="POST" enctype="multipart/form-data" >
<div class="text-center pb-3">
<h3 class="text-purple">Account Opening</h3>
<p>Fill the account opening form to get onboard with Express Banking at a go.
</p>
</div>
<h5>Personal Information</h5>
<div class="form-row">
<div class="col-md-4 form-group">
<label for="firstname">First Name</label>
<input type="text" name="firstname" id="firstname" class="form-control" value="<?php if (isset($_POST ['firstname'])) echo($_POST ['firstname']);?>" required>
<span class="help-block text-danger ml-2" id="firsname_error" style="font-size: 0.9rem;"></span>
</div>
<div class="col-md-4 form-group">
<label for="lastname">Last Name</label>
<input type="text" name="lastname" id="lastname" class="form-control" value="<?php if (isset($_POST ['lastname'])) echo($_POST ['lastname']);?>" required>
<span class="help-block text-danger ml-2" id="firsname_error" style="font-size: 0.9rem;"></span>
</div>
<div class="col-md-4 form-group">
<label for="middlename">Other Name</label>
<input type="text" name="middlename" id="middlename" class="form-control" value="<?php if (isset($_POST ['middlename'])) echo($_POST ['middlename']);?>" required>
<span class="help-block text-danger ml-2" id="firsname_error" style="font-size: 0.9rem;"></span>
</div>
</div>

<div class="form-row">
<div class="col-md-6">
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control" value="<?php if (isset($_POST ['email'])) echo($_POST ['email']);?>" required>
<span class="help-block text-danger ml-2" id="firsname_error" style="font-size: 0.9rem;"></span>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="phone">Phone Number</label>
<input type="tel" name="phone" id="phone" class="form-control" value="<?php if (isset($_POST ['phone'])) echo($_POST ['phone']);?>" placeholder=" e.g  +14146767896">
<span class="help-block text-danger ml-2" id="firsname_error" style="font-size: 0.9rem;"></span>
</div>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="gender">Gender</label>
<select name="gender" id="gender" class="form-control" value="<?php if (isset($_POST ['gender'])) echo($_POST ['gender']);?>" required>
<option value="">Select Gender</option>
<option value="male" >Male</option>
<option value="female" >Female</option>
</select>
<span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
</div>
<div class="form-group col-md-6">
<label for="dob">Date of Birth</label>
<input type="date" name="dob" id="dob" class="form-control" value="<?php if (isset($_POST ['dob'])) echo($_POST ['dob']);?>" required>
<span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="account_type">Account Type</label>
<select name="acctype" id="account_type" class="form-control" value="<?php if (isset($_POST ['acctype'])) echo($_POST ['acctype']);?>" required>
<option value="">Select Account Type</option>
<option value="savings" >Savings Account</option>
<option value="checking" >Checking Account</option>
<option value="money market" >Money Market</option>
</select>
<span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
</div>
<div class="form-group col-md-6">
<label for="account_type">Account Currency</label>
<select name="currency" id="account_type" class="form-control" value="<?php if (isset($_POST ['currency'])) echo($_POST ['currency']);?>" required>
<option selected value="">Select Account Currency</option>
<option value="USD">America (United States) Dollars – USD</option>
<option value="AFN">Afghanistan Afghanis – AFN</option>
<option value="ALL">Albania Leke – ALL</option>
<option value="DZD">Algeria Dinars – DZD</option>
<option value="ARS">Argentina Pesos – ARS</option>
<option value="AUD">Australia Dollars – AUD</option>
<option value="ATS">Austria Schillings – ATS</OPTION>

<option value="BSD">Bahamas Dollars – BSD</option>
<option value="BHD">Bahrain Dinars – BHD</option>
<option value="BDT">Bangladesh Taka – BDT</option>
<option value="BBD">Barbados Dollars – BBD</option>
<option value="BEF">Belgium Francs – BEF</OPTION>
<option value="BMD">Bermuda Dollars – BMD</option>

<option value="BRL">Brazil Reais – BRL</option>
<option value="BGN">Bulgaria Leva – BGN</option>
<option value="CAD">Canada Dollars – CAD</option>
<option value="XOF">CFA BCEAO Francs – XOF</option>
<option value="XAF">CFA BEAC Francs – XAF</option>
<option value="CLP">Chile Pesos – CLP</option>

<option value="CNY">China Yuan Renminbi – CNY</option>
<option value="CNY">RMB (China Yuan Renminbi) – CNY</option>
<option value="COP">Colombia Pesos – COP</option>
<option value="XPF">CFP Francs – XPF</option>
<option value="CRC">Costa Rica Colones – CRC</option>
<option value="HRK">Croatia Kuna – HRK</option>

<option value="CYP">Cyprus Pounds – CYP</option>
<option value="CZK">Czech Republic Koruny – CZK</option>
<option value="DKK">Denmark Kroner – DKK</option>
<option value="DEM">Deutsche (Germany) Marks – DEM</OPTION>
<option value="DOP">Dominican Republic Pesos – DOP</option>
<option value="NLG">Dutch (Netherlands) Guilders – NLG</OPTION>

<option value="XCD">Eastern Caribbean Dollars – XCD</option>
<option value="EGP">Egypt Pounds – EGP</option>
<option value="EEK">Estonia Krooni – EEK</option>
<option value="EUR">Euro – EUR</option>
<option value="FJD">Fiji Dollars – FJD</option>
<option value="FIM">Finland Markkaa – FIM</OPTION>

<option value="FRF*">France Francs – FRF*</OPTION>
<option value="DEM">Germany Deutsche Marks – DEM</OPTION>
<option value="XAU">Gold Ounces – XAU</option>
<option value="GRD">Greece Drachmae – GRD</OPTION>
<option value="GTQ">Guatemalan Quetzal – GTQ</OPTION>
<option value="NLG">Holland (Netherlands) Guilders – NLG</OPTION>
    <option value="HKD">Hong Kong Dollars – HKD</option>

    <option value="HUF">Hungary Forint – HUF</option>
    <option value="ISK">Iceland Kronur – ISK</option>
    <option value="XDR">IMF Special Drawing Right – XDR</option>
    <option value="INR">India Rupees – INR</option>
    <option value="IDR">Indonesia Rupiahs – IDR</option>
    <option value="IRR">Iran Rials – IRR</option>

    <option value="IQD">Iraq Dinars – IQD</option>
    <option value="IEP*">Ireland Pounds – IEP*</OPTION>
        <option value="ILS">Israel New Shekels – ILS</option>
        <option value="ITL*">Italy Lire – ITL*</OPTION>
            <option value="JMD">Jamaica Dollars – JMD</option>
            <option value="JPY">Japan Yen – JPY</option>

            <option value="JOD">Jordan Dinars – JOD</option>
            <option value="KES">Kenya Shillings – KES</option>
            <option value="KRW">Korea (South) Won – KRW</option>
            <option value="KWD">Kuwait Dinars – KWD</option>
            <option value="LBP">Lebanon Pounds – LBP</option>
            <option value="LUF">Luxembourg Francs – LUF</OPTION>

                <option value="MYR">Malaysia Ringgits – MYR</option>
                <option value="MTL">Malta Liri – MTL</option>
                <option value="MUR">Mauritius Rupees – MUR</option>
                <option value="MXN">Mexico Pesos – MXN</option>
                <option value="MAD">Morocco Dirhams – MAD</option>
                <option value="NLG">Netherlands Guilders – NLG</OPTION>

                    <option value="NZD">New Zealand Dollars – NZD</option>
                    <option value="NOK">Norway Kroner – NOK</option>
                    <option value="OMR">Oman Rials – OMR</option>
                    <option value="PKR">Pakistan Rupees – PKR</option>
                    <option value="XPD">Palladium Ounces – XPD</option>
                    <option value="PEN">Peru Nuevos Soles – PEN</option>

                    <option value="PHP">Philippines Pesos – PHP</option>
                    <option value="XPT">Platinum Ounces – XPT</option>
                    <option value="PLN">Poland Zlotych – PLN</option>
                    <option value="PTE">Portugal Escudos – PTE</OPTION>
                        <option value="QAR">Qatar Riyals – QAR</option>
                        <option value="RON">Romania New Lei – RON</option>

                        <option value="ROL">Romania Lei – ROL</option>
                        <option value="RUB">Russia Rubles – RUB</option>
                        <option value="SAR">Saudi Arabia Riyals – SAR</option>
                        <option value="XAG">Silver Ounces – XAG</option>
                        <option value="SGD">Singapore Dollars – SGD</option>
                        <option value="SKK">Slovakia Koruny – SKK</option>

                        <option value="SIT">Slovenia Tolars – SIT</option>
                        <option value="ZAR">South Africa Rand – ZAR</option>
                        <option value="KRW">South Korea Won – KRW</option>
                        <option value="ESP">Spain Pesetas – ESP</OPTION> 

                            <option value="SDD">Sudan Dinars – SDD</option>
                            <option value="SEK">Sweden Kronor – SEK</option>
                            <option value="CHF">Switzerland Francs – CHF</option>
                            <option value="TWD">Taiwan New Dollars – TWD</option>
                            <option value="THB">Thailand Baht – THB</option>
                            <option value="TTD">Trinidad and Tobago Dollars – TTD</option>

                            <option value="TND">Tunisia Dinars – TND</option>
                            <option value="TRY">Turkey New Lira – TRY</option>
                            <option value="AED">United Arab Emirates Dirhams – AED</option>
                            <option value="GBP">United Kingdom Pounds – GBP</option>
                            <option value="USD">United States Dollars – USD</option>
                            <option value="VEB">Venezuela Bolivares – VEB</option>

                            <option value="VND">Vietnam Dong – VND</option>
                            <option value="ZMK">Zambia Kwacha – ZMK</option>
                        </select>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>
                <h5>Address</h5>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="street">Street</label>
                            <input type="text" name="address" id="street" class="form-control" placeholder="e.g 1, 15th Street" value="<?php if (isset($_POST ['address'])) echo($_POST ['address']);?>" required>
                            <span class="help-block text-danger ml-2" style="font-size: 0.9rem;"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="apartment">Apartment</label>
                            <input type="text" name="apartment" id="apartment" class="form-control" placeholder="e.g 209"value="<?php if (isset($_POST ['apartment'])) echo($_POST ['apartment']);?>" required>
                            <span class="help-block text-danger ml-2" style="font-size: 0.9rem;"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="zip">ZIP</label>
                            <input type="text" name="zipcode" id="zip" class="form-control" placeholder="e.g 1123234" value="<?php if (isset($_POST ['zipcode'])) echo($_POST ['zipcode']);?>" required>
                            <!-- <input type="hidden" name="acctno" id="acctno" class="form-control" placeholder="e.g 1123234" value="<?php echo $ten ?>" required> -->
                            <span class="help-block text-danger ml-2" style="font-size: 0.9rem;"></span>
                        </div>
                    </div>
                </div>
                <!-- ACCTNUMBER -->
                <label for="acctno"></label>
                <input type="hidden" name="acctno" id="acctno" class="form-control" placeholder="e.g 1123234" value="<?php echo $ten ?>" required>

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Enter Country" value="<?php if (isset($_POST ['country'])) echo($_POST ['country']);?>"required>
                            <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control" placeholder="State" value="<?php if (isset($_POST ['state'])) echo($_POST ['state']);?>" required>
                            <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" value="<?php if (isset($_POST ['city'])) echo($_POST ['city']);?>" required>
                            <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                        </div>
                    </div>

                </div>

                <h5>Employment Details</h5>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Type of Employment</label>
                        <select name="emptype" id="account_type" class="form-control" value="<?php if (isset($_POST ['emptype'])) echo($_POST ['emptype']);?>">
                            <option value="">Type of Employment</option>
                            <option value="Self Employed">Self Employed</option>  
                            <option value="Public/Government Office">Public/Government Office</option>  
                            <option value="Private/Partnership Office">Private/Partnership Office</option>  
                            <option value="Business/Sales">Business/Sales</option>  
                            <option value="Trading/Market">Trading/Market</option>  
                            <option value="Military/Paramilitary">Military/Paramilitary</option>  
                            <option value="Politician/Celebrity">Politician/Celebrity</option>   
                        </select>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Select Your Salary Range</label>
                        <select class="form-control" name="salary" value="<?php if (isset($_POST ['salary'])) echo($_POST ['salary']);?>">
                            <option value="">Select Your Salary Range</option>
                            <option value="$100.00 - $500.00">$100.00 - $500.00</option> 
                            <option value="$700.00 - $1,000.00">$700.00 - $1,000.00</option> 
                            <option value="$1,000.00 - $2,000.00">$1,000.00 - $2,000.00</option> 
                            <option value="$2,000.00 - $5,000.00">$2,000.00 - $5,000.00</option> 
                            <option value="$5,000.00 - $10,000.00">$5,000.00 - $10,000.00</option> 
                            <option value="$15,000.00 - $20,000.00">$15,000.00 - $20,000.00</option> 
                            <option value="$25,000.00 - $30,000.00">$25,000.00 - $30,000.00</option> 
                            <option value="$30,000.00 - $70,000.00">$30,000.00 - $70,000.00</option> 
                            <option value="$80,000.00 - $140,000.00">$80,000.00 - $140,000.00</option> 
                            <option value="$150,000.00 - $300,000.00">$150,000.00 - $300,000.00</option> 
                            <option value="$300,000.00 - $1,000,000.00">$300,000.00 - $1,000,000.00</option> 
                        </select>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Name and Address of Employer</label>
                        <input type="text" name="empname" id="ssn" class="form-control" value="<?php if (isset($_POST ['empname'])) echo($_POST ['empname']);?>">
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Beneficiary Legal Name</label>
                        <input type="text" name="bname" id="ssn" class="form-control" value="<?php if (isset($_POST ['bname'])) echo($_POST ['bname']);?>">
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Beneficiary Occupation</label>
                        <input type="text" name="boccu" id="ssn" class="form-control" value="<?php if (isset($_POST ['boccu'])) echo($_POST ['boccu']);?>">
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Next of Kin Residential Address</label>
                        <input type="text" name="badd" id="ssn" class="form-control" value="<?php if (isset($_POST ['badd'])) echo($_POST ['badd']);?>">
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>



                <h5>Security Question</h5>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Select Question One</label>
                        <select name="q1" id="account_type" class="form-control"value="<?php if (isset($_POST ['q1'])) echo($_POST ['q1']);?>"required>
                            <option value="">Select Question One</option>
                            <option value="What is your pet name?">What is your pet name?</option>    
                            <option value="What is your nick name?">What is your nick name?</option>    
                            <option value="What is the name of your first car?">What is the name of your first car?</option>    
                            <option value="when did you finish high school?">when did you finish high school?</option>    
                            <option value="your favorite music?">your favorite music?</option>    
                            <option value="your favorite movie?">your favorite movie</option>    
                            <option value="your favorite roll model?">your favorite role model</option>    
                            <option value="favorite state?">favorite state?</option>   
                        </select>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Answer Question One</label>
                        <input type="text" name="ans1" id="ssn" class="form-control" value="<?php if (isset($_POST ['ans1'])) echo($_POST ['ans1']);?>"required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Select Question Two</label>
                        <select name="q2" id="account_type" class="form-control" value="<?php if (isset($_POST ['q2'])) echo($_POST ['q2']);?>"required>
                            <option value="">Select Question Two</option>
                            <option value="What is your pet name?">What is your pet name?</option>    
                            <option value="What is your nick name?">What is your nick name?</option>    
                            <option value="What is the name of your first car?">What is the name of your first car?</option>    
                            <option value="when did you finish high school?">when did you finish high school?</option>    
                            <option value="your favorite music?">your favorite music?</option>    
                            <option value="your favorite movie?">your favorite movie</option>    
                            <option value="your favorite roll model?">your favorite role model</option>    
                            <option value="favorite state?">favorite state?</option>   
                        </select>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Answer Question Two</label>
                        <input type="text" name="ans2" id="ssn" class="form-control" value="<?php if (isset($_POST ['ans2'])) echo($_POST ['ans2']);?>"required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <h5>Account Password</h5>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ssn">Password</label>
                        <input type="password" name="password" id="ssn" class="form-control" value="" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Comfirm Password</label>
                        <input type="password" name="cpassword" id="ssn" class="form-control" value="" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <h5>Account Pin</h5>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ssn">Pin</label>
                        <input type="password" name="pin" id="ssn" class="form-control" value="" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Comfirm Pin</label>
                        <input type="password" name="cpin" id="ssn" class="form-control" value="" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="account_type">Account Image</label>
                        <input type="file" name="image" id="ssn" class="form-control" value="<?php if (isset($_POST ['image'])) echo($_POST ['image']);?>"required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>



                <input type="hidden" value="CT22579692"  name="cot" />              
                <input type="hidden" value="TX96194248"  name="tax" />  
                <input type="hidden" value="IM36909682"  name="imf" />
                <input type="hidden" value="AT41340498"  name="atc" />
                <input type="hidden" value="TLX13463914"  name="telex_code" />

                <div class="text-center my-3">
                    <button type="submit" name="createAccount" class="btn bg-purple btn-purple text-white w-75" id="formSubmit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>




 <!-- geodata js -->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://geodata.solutions/cgi-sys/suspendedpage.cgi"></script>


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


<script src="../assets/js/main.js"></script>    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("input, select").removeAttr("required");
            $("#phone").mask('+0000000000000');
        });
    </script>
    <!-- <script>
        formSubmit.addEventListener("click", function (event) {
        event.preventDefault();
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
