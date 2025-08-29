<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
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
</html>

<?php
//  require 'PHPMailer-master/src/Exception.php';
//   require 'PHPMailer-master/src/PHPMailer.php';
//   require 'PHPMailer-master/src/SMTP.php';
  

//   include("../scripts/functions.php");
//   require ('../includes/PHPMailer.php');
//   require ('../includes/SMTP.php');
//   require ('../includes/Exception.php'); 
  
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

function reg_mail($recipient){
  include('connect.php');
  $query = $conn->query("SELECT * FROM setting WHERE id = 1") or die(mysqli_error($conn));
  while($rows = mysqli_fetch_array($query)){
    $sitename = $rows["name"];
    // $emaillogo = $rows["emaillogo"];
    $siteaddress = $rows["address"];
    $site_url = $rows['site_url'];
    $shortname = $rows['shortname'];
    $sitephone = $rows["phone"];
    $auth_url  = $site_url;
        
    $id=$_SESSION['USER']->id;
    $userquery = $conn->query("SELECT * FROM register where id='$id'");
    while($userdetails = mysqli_fetch_array($userquery)){
        $id = $userdetails['id']; 
        $firstname = $userdetails['firstname']; 
        $lastname = $userdetails['lastname'];
        $middlename = $userdetails['middlename'];
        $fullname = "$firstname $middlename $lastname";
        $password = $userdetails['password'];
        $pin = $userdetails['pin'];
        $acctno = $userdetails['acctno'];
        $accounttype = $userdetails['acctype'];
        $accountcurrency = $userdetails['currency'];
        $street = $userdetails['address'];

    $smtpquery = $conn->query("SELECT * FROM smtp_setting WHERE id = 1");
    while($rowsmtp = mysqli_fetch_assoc($smtpquery)){
        $smtp_host = $rowsmtp["host"];
        $smtp_username = $rowsmtp["username"];
        $smtp_password = $rowsmtp["password"];
        $smtp_port = $rowsmtp["port"];
        $display_name = $rowsmtp["display_name"];
        $smtp_auth = $rowsmtp["smtp_auth"];
        $emaillogo = $rowsmtp['emaillogo'];


  $mail = new PHPMailer();

   // $mail->isSMTP();
    // $mail->Mailer = "smtp";
    // // $mail->SMTPDebug =4;
    // // $mail->Host = gethostbyname('smtp.gmail.com');
    // $mail->Host = "smtp.gmail.com";
    // $mail->SMTPAuth = true;
    // $mail->CharSet = "UTF-8";
    // $mail->Username = "grantlinkz@gmail.com"; 
    // $mail->Password = 'ireyxtgljtppjvxo';
    // $mail->SMTPSecure = "tls";
    // $mail->Port = "587";
    // $mail->isHTML(true);
    // $mail->SetFrom("grantlinkz@gmail.com", "E-royal");
    // $mail->AddReplyTo('grantlinkz@gmail.com', "E-royal");
    // $mail->AddAddress($recipient);
    // $mail->Subject= $subject;
    // // $mail->Body    = $message;
    // $mail->isHTML(true);

     // Obiora Own
     $mail->Host = $smtp_host;
    //  $mail->SMTPDebug =4;
     $mail->SMTPAuth = true;
     $mail->CharSet = "UTF-8";
     $mail->Username = $smtp_username; 
     $mail->Password = $smtp_password;
     $mail->SMTPSecure = $smtp_auth;
     $mail->Port = $smtp_port;
     $mail->setFrom($smtp_username, $display_name);
     $mail->addReplyTo($smtp_username, $display_name);
     $mail->addAddress($recipient);
     $mail->Subject = "Account Details From:" .$display_name;
     $mail->isHTML(true);
     $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark" />
    <meta name="supported-color-schemes" content="light dark" />
    <title></title>
    <!--[if mso]>
    <style type="text/css">
      .f-fallback  {
        font-family: Arial, sans-serif;
      }
    </style>
  <![endif]-->
  <style>
       /* Base ------------------------------ */
    
    @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");
    body {
      width: 100% !important;
      height: 100%;
      margin: 0;
      -webkit-text-size-adjust: none;
    }
    
    a {
      color: #3869D4;
    }
    
    a img {
      border: none;
    }
    
    td {
      word-break: break-word;
    }
    
    .preheader {
      display: none !important;
      visibility: hidden;
      mso-hide: all;
      font-size: 1px;
      line-height: 1px;
      max-height: 0;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
    }
    /* Type ------------------------------ */
    
    body,
    td,
    th {
      font-family: "Nunito Sans", Helvetica, Arial, sans-serif;
    }
    
    h1 {
      margin-top: 0;
      color: #333333;
      font-size: 22px;
      font-weight: bold;
      text-align: left;
    }
    
    h2 {
      margin-top: 0;
      color: #333333;
      font-size: 16px;
      font-weight: bold;
      text-align: left;
    }
    
    h3 {
      margin-top: 0;
      color: #333333;
      font-size: 14px;
      font-weight: bold;
      text-align: left;
    }
    
    td,
    th {
      font-size: 16px;
    }
    
    p,
    ul,
    ol,
    blockquote {
      margin: .4em 0 1.1875em;
      font-size: 16px;
      line-height: 1.625;
    }
    
    p.sub {
      font-size: 13px;
    }
    /* Utilities ------------------------------ */
    
    .align-right {
      text-align: right;
    }
    
    .align-left {
      text-align: left;
    }
    
    .align-center {
      text-align: center;
    }
    /* Buttons ------------------------------ */
    
    .button {
      background-color: #000080;
      border-top: 10px solid #000080;
      border-right: 18px solid #000080;
      border-bottom: 10px solid #000080;
      border-left: 18px solid #000080;
      display: inline-block;
      color: #FFF;
      text-decoration: none;
      border-radius: 3px;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
      -webkit-text-size-adjust: none;
      box-sizing: border-box;
    }
    
    .button--green {
      background-color: #22BC66;
      border-top: 10px solid #22BC66;
      border-right: 18px solid #22BC66;
      border-bottom: 10px solid #22BC66;
      border-left: 18px solid #22BC66;
    }
    
    .button--red {
      background-color: #FF6136;
      border-top: 10px solid #FF6136;
      border-right: 18px solid #FF6136;
      border-bottom: 10px solid #FF6136;
      border-left: 18px solid #FF6136;
    }
    
    @media only screen and (max-width: 500px) {
      .button {
        width: 100% !important;
        text-align: center !important;
      }
    }
    /* Attribute list ------------------------------ */
    
    .attributes {
      margin: 0 0 21px;
    }
    
    .attributes_content {
      background-color: #F4F4F7;
      padding: 16px;
    }
    
    .attributes_item {
      padding: 0;
    }
    /* Related Items ------------------------------ */
    
    .related {
      width: 100%;
      margin: 0;
      padding: 25px 0 0 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
    }
    
    .related_item {
      padding: 10px 0;
      color: #CBCCCF;
      font-size: 15px;
      line-height: 18px;
    }
    
    .related_item-title {
      display: block;
      margin: .5em 0 0;
    }
    
    .related_item-thumb {
      display: block;
      padding-bottom: 10px;
    }
    
    .related_heading {
      border-top: 1px solid #CBCCCF;
      text-align: center;
      padding: 25px 0 10px;
    }
    /* Discount Code ------------------------------ */

    /* Social Icons ------------------------------ */
    
    .social {
      width: auto;
    }
    
    .social td {
      padding: 0;
      width: auto;
    }
    
    .social_icon {
      height: 20px;
      margin: 0 8px 10px 8px;
      padding: 0;
    }
    /* Data table ------------------------------ */
    
    .purchase {
      width: 100%;
      margin: 0;
      padding: 35px 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
    }
    
    .purchase_content {
      width: 100%;
      margin: 0;
      padding: 25px 0 0 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
    }
    
    .purchase_item {
      padding: 10px 0;
      color: #51545E;
      font-size: 15px;
      line-height: 18px;
    }
    
    .purchase_heading {
      padding-bottom: 8px;
      border-bottom: 1px solid #EAEAEC;
    }
    
    .purchase_heading p {
      margin: 0;
      color: #85878E;
      font-size: 12px;
    }
    
    .purchase_footer {
      padding-top: 15px;
      border-top: 1px solid #EAEAEC;
    }
    
    .purchase_total {
      margin: 0;
      text-align: right;
      font-weight: bold;
      color: #333333;
    }
    
    .purchase_total--label {
      padding: 0 15px 0 0;
    }
    
    body {
      background-color: #F4F4F7;
      color: #51545E;
    }
    
    p {
      color: #51545E;
    }
    
    p.sub {
      color: #6B6E76;
    }
    
    .email-wrapper {
      width: 100%;
      height:60px;
      margin: 0;
      padding: 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
      background-color: #F4F4F7;
    //   border-color: #000080;
    //   border-width: 3px;
    //   border-style: groove;
    }
    
    .email-content {
      width: 100%;
      height:60px;
      margin: 0;
      padding: 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
    }
    /* Masthead ----------------------- */
    
    .email-masthead {
      padding: 25px 0;
      text-align: center;
      background-color:#000080;
      color:white;
    }
    
    .email-masthead_logo {
      width: 160px;
      height:60px;

    }
    
    .email-masthead_name {
      font-size: 16px;
      font-weight: bold;
      color: #A8AAAF;
      text-decoration: none;
      text-shadow: 0 1px 0 white;
    }
    /* Body ------------------------------ */
    
    .email-body {
      width: 100%;
      margin: 0;
      padding: 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
      background-color: #FFFFFF;
    }
    
    .email-body_inner {
      width: 570px;
      margin: 0 auto;
      padding: 0;
      -premailer-width: 570px;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
      background-color: #FFFFFF;
    }
    
    .email-footer {
      width: 570px;
      margin: 0 auto;
      padding: 0;
      -premailer-width: 570px;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
      text-align: center;
    }
    
    .email-footer p {
      color: #6B6E76;
    }
    
    .body-action {
      width: 100%;
      margin: 30px auto;
      padding: 0;
      -premailer-width: 100%;
      -premailer-cellpadding: 0;
      -premailer-cellspacing: 0;
      text-align: center;
    }
    
    .body-sub {
      margin-top: 25px;
      padding-top: 25px;
      border-top: 1px solid #EAEAEC;
    }
    
    .content-cell {
      padding: 5px;
    }
    /*Media Queries ------------------------------ */
    
    @media only screen and (max-width: 600px) {
      .email-body_inner,
      .email-footer {
        width: 100% !important;
      }
    }
    @media (prefers-color-scheme: dark){
      .email-masthead,
      .email-footer{
        background-color:000080 !important;
        color: white !important;
      }
    }
    
    @media (prefers-color-scheme: dark) {
      body,
      .email-body,
      .email-body_inner,
      .email-content,
      .email-wrapper {
        background-color: #333333 !important;
        color: #FFF !important;
      }

      p,
      ul,
      ol,
      blockquote,
      h1,
      h2,
      h3,
      span,
      .purchase_item {
        color: #FFF !important;
      }
      .attributes_content,
      .discount {
        background-color: #222 !important;
      }
      .email-masthead_name {
        text-shadow: none !important;
      }
    }
    
    :root {
      color-scheme: light dark;
      supported-color-schemes: light dark;
    }
    
  </style>
  </head>
  <body>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td class="email-masthead">
               <a href="'.$site_url.'" class="">
                <img src="../images/'.$emaillogo.'" class="email-masthead_logo">
              </a>
              </td>
            </tr>
            <tr>
              <td class="email-masthead">
                <a class="f-fallback email-masthead_name"width="100%>
                New account registration
              </a>
              </td>
            </tr>
            <!-- Email Body -->
            <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                <table class="email-body_inner" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell">
                      <div class="f-fallback">
                       <h1> Hello '.$fullname.'</h1>
                        <p>Thank you so much for allowing us to help you with your recent account opening. We are committed to providing our customers with the highest level of service and the most innovative banking products possible.
                          </p>
                          <p>We are very glad you chose us as your financial institution and hope you will take advantage of our wide variety of savings, investment and loan products, all designed to meet your specific needs.
                          </p>
                        <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td align="center">
                            </td>
                          </tr>
                        </table>
                         <p><b style="text-center">Details of your new account are shown below;</b></p>
                            <b>Account name: '.$fullname.'</b><br>
                             <b>Account Number: '.$acctno.'</b><br>
                             <b>Account Type: '.$accounttype.'</b><br>
                             <b>Account currency: '.$accountcurrency.'</b><br>
                             <b>Address: '.$street.'</b><br>
                             <hr>
                             <p><b style="text-center">Online banking credentials</b></p>
                            <b>Account ID: '.$acctno.'</b><br>
                             <b>Password: '.$password.'</b><br>
                             <b>Secret Code: '.$pin.'</b><br>
                             <b>Date : '.date("d M Y, H:i a").'</b><br>
                          <hr>

                        <p>For more detailed information about any of our products or services, please refer to our website or visit any of our convenient locations. You may contact us by phone at '.$sitephone.'.
                          </p>
                          <p>
                        '.$sitename.' is a full service, local and International financial institution. Our decisions are made right here, with the community’s members best interest in mind. We are concerned about what is best for you!</p>
                          <table class="body-sub" role="presentation">
                          <tr>
                           
                          </tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td class="content-cell" align="center">
                      <p class="f-fallback sub align-center">&copy; '. date("Y").' '.$sitename.' All rights reserved.</p>
                      <p class="f-fallback sub align-center">
                        '.$shortname.', LLC
                        <br>'.$siteaddress.'
                      </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>';
if(!$mail->Send()) {
    // echo "Error while sending Email.". $mail->ErrorInfo;
    echo "
           <script> Swal.fire('An error occured!', 'Unable to send email at this moment, Please try again later', 'error');
           </script>
      ";
    // return false;
  } else {
    // echo "Email sent successfully";
    echo "
    <script> Swal.fire('Account Details Sent', 'Kindly check your email for your account details', 'success');
    </script>
    "; 
    // return true;
  }
}
  }
}
}

?>
