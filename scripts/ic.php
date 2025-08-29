<?php
include("functions.php");
usserAccessCheck();
include("userdata.php");
if(isset($_POST)){
  sleep(3);
  $icCode = filterString($_POST['ic']);
  if (empty($icCode)) {
    echo "<script>    
              toastr.error('Insurance Code is required!', 'Empty field', {\"progressBar\": true});
              document.getElementById('ic').style.borderColor='red';
             </script>";
             die();
  }
  if($_SESSION['icCounter'] <= 1){
       echo "<script>
               Swal.fire('Maximum Insurance code attempts exceeded!', '$cot_error', 'error');
                  document.getElementById('ic').style.borderColor='red';
                  document.getElementById('ic').style.color='red';
                  </script>";
                  $query = $conn->query("UPDATE users SET status = 'blocked' WHERE id = '$userid'");
                  session_destroy();
                  ?>
                  <meta http-equiv="refresh" content="5; url=../">
                  <?php
                  
         die();
  }
    
    if ($usersic != $icCode) {
            $count = $_SESSION['icCounter'];
            $newcount = $count - 1;
              echo "<script>
               Swal.fire('Invalid Insurance code !!', 'For security purpose, Your account will be suspended once you exceed the maximum trial limit. You  have $newcount attempts left.', 'error');
                  document.getElementById('ic').style.borderColor='red';
                  document.getElementById('ic').style.color='red';
                  </script>";
              $_SESSION['icCounter'] = $newcount;    
             die();
    }
    
    if ($usersic == $icCode) {
      echo "<script>
               Swal.fire('Valid Insurance Code supplied!', 'Your transaction will be continued. Redirecting...', 'success');
                document.getElementById('ic').style.borderColor='green';
                  document.getElementById('ic').style.color='green';
                  </script>";   
       ?>
       <meta http-equiv="refresh" content="5; url=../personal-banking/auth?verification=tin&transferToken=?>">
      <!-- <meta http-equiv="refresh" content="3; url=../personal-banking/auth?verification=tin&transferToken=<?php echo $_SESSION['transaction_session']?>"> -->
       <?php
    }
 
}
?>
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