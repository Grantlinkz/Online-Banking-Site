<?php
include('connect.php');
$ten = rand(1000000000,9999999999);
//echo $ten;

if (isset($_POST ['createAccount'])) {
  $firstname = ($_POST['firstname']); 
  $lastname = ($_POST['lastname']);
  $acctno = ($_POST['acctno']);

  $query = $conn->query("INSERT INTO register (firstname, lastname, acctno)VALUES('$firstname', '$lastname', '$acctno')");
  echo mysqli_error($conn);
}
?>
 
 <!doctype html>
    <html lang="en">

    <head>
        <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title> <?php echo $sitename?> - UserPanel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is the first mobile banking application from Digital Forest Team.">
        <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * 
Firstmonumentcreditunion Application  v1.0.0
    =========================================================
    * Product from: Digital Forest Team via digitalforest4@gmail.com 
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="assets/css/digital_forest_team_assets_main.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="https://kit.fontawesome.com/128925c979.js" crossorigin="anonymous"></script>

<style>
    .arrow {
      border: solid green;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
  }

  .down {
      transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
  }
</style>


<style>
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

  .img--wrapper {
      padding: 6px;
  }

  .image--cover {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 20px;
      align-items: center;

      object-fit: cover;
      object-position: center right;
  }


</style>

<script>
    function checkforblank(){
        var errormessage="";
        if(document.getElementById('firstname').value=""){
            errormessage +="enter your firstname \n";
            document.getElementById('firstname').style.borderColor='red';
        }
        if(document.getElementById('lastname').value=""){
            errormessage +="enter your phone \n";
            document.getElementById('lastname').style.borderColor='red';
        }
        if(errormessage!=""){
           alert (errormessage);
           return false;
        }
    }
</script>













</head>
<body>
<form class="" action="" method="POST" onsubmit="checkforblank()>
<br>
<label for="phone">Phone Number</label>
 <input type="text" name="lastname" id="firstname"  value="" placeholder=" e.g  +14146767896" >
 
<br>
<label for="phone">Name</label>
 <input type="text" name="firstname" id="lastname"  value="" placeholder=" e.g  +14146767896" >
 
<br>
<!-- <label for="phone">Phone Number</label> -->
 <input type="hidden" name="acctno" id="phone" class="form-control" value="<?php echo $ten ?>" placeholder=" e.g  +14146767896" required>

 <!-- <button type="submit" name="createAccount" class="btn bg-purple btn-purple text-white w-75">Submit</button> -->
 <button name="createAccount" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                        <i class='fas fa-globe' style='font-size:24px;color:orange'></i>&nbsp;
                                                        Proceed Transfer ></button>
</form>                                                        
</body>
</html>