<?php
include("header.php");
?>

<div class="nk-content">
 <div class="container-xl wide-lg">
        <div class="nk-content-body">
        <div class="nk-block-head">
         <div class="nk-block-head-sub">
         </div>
           <div class="nk-block-between-md g-4 card-bordered">
             <div class="nk-block-head-content">
              <h4 class="nk-block-title fw-normal">Account Registration.</h4>
                <div class="nk-block-des">
                  <p>
                   </p>
                      </div>
                       </div>
                            <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="account_manager" class="btn btn-primary"><span>Home</span> <em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="fund_user" class="btn btn-success"><span>Fund an account</span> <em class="icon ni ni-invest"></em></a></li>
                                        </ul>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                        </div>
                    </div>
<div class="card card-bordered s-4 col-lg-12 p-0">
 <div class="card-header font-weight-bold text-light" style="background-color:#033d75;">
 	<h5 class="text-white"><em class="icon ni ni-user-add-fill"></em> Fill user details correctly</h5>
</div>	
<form action="" method="post">
<div class="card-body">
	<b>Personal Details</b>
	<hr>
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
<input type="tel" name="phone" id="phone" class="form-control" value="<?php if (isset($_POST ['phone'])) echo($_POST ['phone']);?>" placeholder=" e.g  +14146767896" required>
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
                        <select name="emptype" id="account_type" class="form-control" value="<?php if (isset($_POST ['emptype'])) echo($_POST ['emptype']);?>"required>
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
                        <select class="form-control" name="salary" value="<?php if (isset($_POST ['salary'])) echo($_POST ['salary']);?>"required>
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
                        <input type="text" name="empname" id="ssn" class="form-control" value="<?php if (isset($_POST ['empname'])) echo($_POST ['empname']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Beneficiary Legal Name</label>
                        <input type="text" name="bname" id="ssn" class="form-control" value="<?php if (isset($_POST ['bname'])) echo($_POST ['bname']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Beneficiary Occupation</label>
                        <input type="text" name="boccu" id="ssn" class="form-control" value="<?php if (isset($_POST ['boccu'])) echo($_POST ['boccu']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ssn">Next of Kin Residential Address</label>
                        <input type="text" name="badd" id="ssn" class="form-control" value="<?php if (isset($_POST ['badd'])) echo($_POST ['badd']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>



                <h5>Security Question</h5>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Select Question One</label>
                        <select name="q1" id="account_type" class="form-control"value="<?php if (isset($_POST ['q1'])) echo($_POST ['q1']);?>" required>
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
                        <input type="text" name="ans1" id="ssn" class="form-control" value="<?php if (isset($_POST ['ans1'])) echo($_POST ['ans1']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type">Select Question Two</label>
                        <select name="q2" id="account_type" class="form-control" value="<?php if (isset($_POST ['q2'])) echo($_POST ['q2']);?>" required>
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
                        <input type="text" name="ans2" id="ssn" class="form-control" value="<?php if (isset($_POST ['ans2'])) echo($_POST ['ans2']);?>" required>
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
                        <input type="file" name="image" id="ssn" class="form-control" value="<?php if (isset($_POST ['image'])) echo($_POST ['image']);?>" required>
                        <span class="help-block text-danger ml-2" style="font-size:0.9rem;"></span>
                    </div>
                </div>



                <input type="hidden" value="CT22579692"  name="cot" />              
                <input type="hidden" value="TX96194248"  name="tax" />  
                <input type="hidden" value="IM36909682"  name="imf" />
                <input type="hidden" value="AT41340498"  name="atc" />
                <input type="hidden" value="TLX13463914"  name="telex_code" />

    
<div class="regResult"></div>
</div>
<div class="card-footer">
	<button type="submit" class="btn btn-primary regUser">Submit</button>
	<button type="reset" class="btn btn-danger ">Reset</button>
</div>	
</form>	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">  
 //UPDATING USER DETAILS             	
 $(document).ready(function() {
 $('.regUser').on('click', function() {
 var $this = $(this);
 var loadingText = '<i class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></i>&nbsp;Processing...';
 if ($(this).html() !== loadingText) {
 $this.data('original-text', $(this).html());
 $this.html(loadingText);
 }
 setTimeout(function() {
 $this.html($this.data('original-text'));
 },3000);
 });
 })
$(document).ready(function () {
    $('.regUser').click(function (e) {
      e.preventDefault();
      var firstname = $('#firstname').val();
      var middlename = $('#middlename').val();
      var lastname = $('#lastname').val();
      var countryId = $('#countryId').val();
      var stateId = $('#stateId').val();
      var cityId = $('#cityId').val();
      var zipcode = $('#zipcode').val();
      var dob = $('#dob').val();
      var address = $('#address').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var accountnumber = $('#accountnumber').val();
      var accounttype = $('#accounttype').val();
      var usercurrency = $('#usercurrency').val();
      var accountbalance = $('#accountbalance').val();
      var imf = $('#imf').val();
      var cot = $('#cot').val();
      var secretCode = $('#secretCode').val();
      var password = $('#password').val();
      var cpassword = $('#cpassword').val();


      $.ajax
        ({
          type: "POST",
          url: "../scripts/register_account.php",
          data: {"firstname": firstname, "middlename": middlename, "lastname": lastname, "countryId": countryId, "stateId": stateId, "cityId": cityId, "zipcode": zipcode,
       "dob": dob, "address": address, "phone": phone, "email": email, "accountnumber": accountnumber, "accounttype": accounttype, "usercurrency": usercurrency,
       "accountbalance": accountbalance, "imf": imf, "cot": cot, "secretCode": secretCode, "password": password, "cpassword": cpassword
      },
          success: function (data) {
            $('.regResult').html(data);
            $('#form')[0].reset();
          }
        });
    });
  });
</script>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
  <script>
       $("#phone").intlTelInput({
          

        });
       </script>
<?php
include("footer.php")
	?>