<?php 
include("header.php");
// include('../account/connect.php');
?>
<link rel="stylesheet" href="../assets2/css/dashlite.css?ver=2.4.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <div class="nk-content"> -->
 <div class="card card-preview" >
              <div class="card-inner p-0" >
                <table class="datatable-init table">
                  <thead>
                    <tr>
                    <th>Ref/FullName </th>
                     <th>Type</th>
                       <th>Scope</th>
                      <th>Amount</th>
                      <th>Date </th>
                      <th>Description</th>
                      <th>Status</th>
                  </tr>
                </thead>
                 <tbody>
                    <?php 
                    $userid = $_SESSION['USER']->id;
                    $query = $conn->query("SELECT * FROM transactions WHERE userid = $userid ORDER BY id DESC");
                     while ($rows = mysqli_fetch_array($query)) {
                        if($rows['status'] == 1){
                            $stat = "<strong class='text-success'>Completed</strong>";
                        }else{ $stat = "<strong class='text-danger'>Pending</strong>"; }       
                    ?>
                    <tr>
                      <td><?php echo$rows['refNumber']; ?></td>    
                      <td><?php echo$rows['type']; ?></td>  
                      <td><?php echo$rows['scope']; ?></td> 
                      <td><b><?php echo$accountcurrency; ?></b> <?php echo$rows['amt'] ?></td>    
                      <td><?php echo$rows['dated']; ?></td>  
                     <td><?php echo$rows['des']; ?></td>     
                      <td><?php echo$stat; ?></td> 
                      </tr> 
                      <?php   }   ?>
                      <?php 
                      $userid = $_SESSION['USER']->id;
                     $query = $conn->query("SELECT * FROM crypto_deposits WHERE userid = $userid ORDER BY id DESC");
                     while ($rows = mysqli_fetch_array($query)) {
                      if($rows['status'] == 'success'){
                        $stat = "<strong class='text-success'>Completed</strong>";
                    }else{ $stat = "<strong class='text-danger'>Pending</strong>"; }
                     ?>
                      <tr>
                      <td><?php echo$rows['fullname']; ?></td>    
                      <td><?php echo$rows['coin']; ?></td>  
                      <td>Crypto Deposit </td> 
                      <td><b><?php echo$accountcurrency ?></b> <?php echo$rows['amount'] ?></td>    
                      <td><?php echo$rows['datecreated']; ?></td>  
                     <td><?php echo$rows['address']; ?></td>     
                      <td><?php echo$stat; ?></td> 
                      </tr> 
                      <?php   }   ?>
          </tbody>
      </table>
      </div>
  </div>
</div>
<?php 
include("footer.php");

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

<script type="text/javascript" src="../assets/js/main.js"></script></body>
<script type="text/javascript" src="../assets/js/mains.js"></script></body>

</html>