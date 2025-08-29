<?php 
include("functions.php");
if(empty($_GET['id'])){
	header("location:index");
}
$id = $_GET['id'];
$conn->query("UPDATE register SET allowtransfer = 1 WHERE id = '$id' ORDER BY id DESC");
echo "<script>
      Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Funds Transfer Unblocked',
      showConfirmButton: false,
      timer: 3000
      });
       var delayInMilliseconds = 3500;
          setTimeout(function() {
          window.location.reload();
          }, delayInMilliseconds);
    </script>";

?>