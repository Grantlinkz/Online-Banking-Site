<?php
//  session_start();

 require_once '../vendor/autoload.php';
 use Jaybizzle\CrawlerDetect\CrawlerDetect;
 require_once("connect.php");
//  include('../account/crypto.php');
 $userquery = $conn->query("SELECT * FROM register ");
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
    $image = $userdetails['image'];
    echo mysqli_error($conn);
}
 //WEBSITE SETTINGS
 $query = $conn->query("SELECT * FROM setting WHERE id = 1") or die(mysqli_error($conn));
 while($rows = mysqli_fetch_array($query)){
    $sitename = $rows["name"];
    $logo = $rows["logo"];
    $tagline = $rows["tagline"];
    $favicon = $rows["favicon"];
    $register = $rows["register"];
    $sitephone = $rows["phone"];
    $siteemail = $rows["email"];
    $siteaddress = $rows["address"];
    $description = $rows["description"];
    $seo = $rows["seo"];
    $darklogo = $rows["darklogo"];
    $rate1 = $rows["stockrate"];
    $rate2 = $rows['stockrate2'];
    $money = $rows["money"];
    $sitecountry = $rows["country"];
    $visa_picture = $rows["visa_picture"];
    $tawk  = $rows['tawk'];
    $shortname = $rows['shortname'];
    $blocked_msg = $rows['blocked_msg'];
    //$blocked_icon = $rows['blocked_icon'];
    $blocked_title = $rows['blocked_title'];
    $imfMsg = $rows['imfmsg'];
    $cotMsg = $rows['cotmsg'];
    $icMsg = $rows['icmsg'];
    $tacMsg = $rows['tacmsg'];
    $tinMsg = $rows['tinmsg'];
    $userstac = $rows['userstac'];
    $usersic = $rows['usersic'];
    $userstin = $rows['userstin'];
    $transfercharge = $rows['charges'];
    $localmsg = $rows['localmsg'];
    $wiremsg = $rows['wiremsg'];
    $footerlogo = $rows['footerlogo'];
    $imf_cot_counter = $rows['cot_imf_counter'];
    $cot_error = $rows['cot_error'];
    $imf_error = $rows['imf_error'];
    $enable_cot_imf = $rows['enable_cot_imf'];
    $sitedescription = $rows['description'];
    $rest_msg = $rows['rest_msg'];
    $enable_tin_ic_tac = $rows['enable_tin_ic_tac'];
    $enable_tin = $rows['enable_tin'];
    $enable_ic = $rows['enable_ic'];
    $crypto = $rows['crypto'];
    $bots = $rows['bots'];
    $site_url = $rows['site_url'];
    if ($sitecountry == "United Kingdom") {
        $routine = "Sort code";
    }
    else{
        $routine = "Routing number";
    }
    if ($rows['stock'] == 1) {
        $stockrate = $rate1;
    }else {$stockrate = $rate2;}
}

///CHECK IF SITE IS BEING INDEXED BY A BOT/CRAWLER VIA HTTP USER AGENT

if($bots == 1){


  $CrawlerDetect = new CrawlerDetect;

  // Check the user agent of the current 'visitor'
  if($CrawlerDetect->isCrawler()) {
   echo "<br>Error</br>";
  }else{}

}



//ADMIN DETAILS

 $adminquery = $conn->query("SELECT * FROM users WHERE id = 1");

 while($roo = mysqli_fetch_array($adminquery)){
    $adfirstname = $roo["firstname"];
    $admiddlename = $roo["middlename"];
    $adlastname = $roo["lastname"];
    $ademail = $roo["email"];
    $adaccounttype = $roo["accounttype"];
    $adpassport = $roo["passport"];
    $addayOFBirth = $roo["dayOFBirth"];
    $adaccountbalance = $roo["accountbalance"];
    $adaddress = $roo["address"];
    $adstate = $roo["state"];
    $adcountry = $roo["country"];
    $adphone = $roo["phone"];
    $adsecretCode = $roo["secretCode"];
    $adzipcode = $roo["zipcode"];
    $adincome = $roo["income"];
    $adoccupation = $roo["occupation"];
    $adnickname = $roo["nickname"];
    $adsecurityQuestion = $roo["securityquestion"];
    $adanswer = $roo["answer"];
    $aduserid = $roo["id"];

}

//SMTP SETTINGS

$smtpquery = $conn->query("SELECT * FROM smtp_setting WHERE id = 1");
    while($rowsmtp = mysqli_fetch_assoc($smtpquery)){
    $smtp_host = $rowsmtp["host"];
    $smtp_username = $rowsmtp["username"];
    $smtp_password = $rowsmtp["password"];
    $smtp_port = $rowsmtp["port"];
    $display_name = $rowsmtp["display_name"];
    $smtp_auth = $rowsmtp["smtp_auth"];
    $emaillogo = $rowsmtp['emaillogo'];

}

?>