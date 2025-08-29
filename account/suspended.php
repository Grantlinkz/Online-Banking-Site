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
// include("../scripts/functions.php");
// if(empty($_GET['id'])){
// 	header("location:index");
// }

// $id = $_GET['id'];
// $query=$conn->query("UPDATE register SET blocktransfer =0  WHERE id = '$id'");

echo "<script>
      Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Your Account Is Under Restriction Kindly Contact Support',
      title: 'Your account is temporarily restricted from carrying out transactions via our online banking channel, Kindly visit any of our nearest branches to resolve this issue. For more information, kindly contact our online customer care representatives.',
      showConfirmButton: false,
      timer: 10000
      });
       var delayInMilliseconds = 7000;
          setTimeout(function() {
          window.location.href='intl-transfer.php';
          }, delayInMilliseconds);
    </script>";

?>