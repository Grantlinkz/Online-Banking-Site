<?php 
include("functions.php");
if(empty($_GET['id'])){
	header("location:index");
}

$id = $_GET['id'];
$conn->query("UPDATE register SET allowtransfer = 0 WHERE id = '$id' ORDER BY id DESC");

echo "<script>
      Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Funds Transfer Suspended',
      showConfirmButton: false,
      timer: 3000
      });
       var delayInMilliseconds = 3500;
          setTimeout(function() {
          window.location.reload();
          }, delayInMilliseconds);
    </script>";

?>