<?php 
include("header.php");
?>
<?php
    $id = $_GET['id'];
    $userquery = $conn->query("SELECT * FROM register WHERE id = '$id'");
    while($userdetails = mysqli_fetch_array($userquery)){
      $userid = $userdetails["id"];
      $firstname = $userdetails['firstname']; 
      $lastname = $userdetails['lastname'];
      $middlename = $userdetails['middlename']; 
      $fullname = "$firstname $middlename $lastname";
      $email = $userdetails['email'];
      $emailVerify = $userdetails['email_verified'];
      $email_verify = $userdetails['email_verified'];
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
      $q1 = $userdetails['q1'];
      $ans1 = $userdetails['ans1'];
      $q2 = $userdetails['q2'];
      $ans2 = $userdetails['ans2'];
      $image = $userdetails['image'];
      $accountbalance = $userdetails["accountbalance"];
      $allowtransfer = $userdetails['allowtransfer'];
      $blocktransfer = $userdetails['blocktransfer'];
      $tfa = $userdetails['tfa'];
    if($email_verify != 0){
        $emailVerify = '<li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>';
    }else{$emailVerify = '  <li><em class="icon text-danger ni ni-alert-circle"></em> <span>Email</span></li>';}

    if($userdetails['status'] == 'pending'){
        $suspend = ' <li><a class="" href="unblock?id='.$userid.'"><em class="icon ni ni-user-fill-c"></em><span>Unblock account</span></a></li>';
        $stat = '<span class="tb-status text-danger">Suspended</span>';
    }else {$stat = '<span class="tb-status text-success">Active</span>';
     $suspend = ' <li><a class="" href="suspend?id='.$userid.'"><em class="icon ni ni-user-fill-c"></em><span>Suspend account</span></a></li>';
    }
}

?>
<div class="nk-content">
 <div class="container-xl wide-lg">
        <div class="nk-content-body">
        <div class="nk-block-head">
         <div class="nk-block-head-sub">
         </div>
           <div class="nk-block-between-md g-4 card-bordered">
             <div class="nk-block-head-content">
              <h4 class="nk-block-title fw-normal">Log In/Register activites by (<?php echo$fullname ?>)</h4>
                <div class="nk-block-des">
                  <p>
                   </p>
                      </div>
                       </div>
                            <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a onclick="window.history.go(-1);" class="btn btn-primary"><span>Back</span> <em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="fund_user" class="btn btn-success"><span>Fund an account</span> <em class="icon ni ni-invest"></em></a></li>
                                        </ul>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                        </div>
                    </div>
                 <div class="card card-preview ">
              <div class="card-inner p-0">
                <table class="datatable-init table">
                  <thead>
                    <tr>
                     <th>Date</th>
                       <th>IP</th>
                      <th>Device Info</th>
                    <th>Action</th>
                  </tr>
                </thead>
                 <tbody>
                    <?php 
                    $query = $conn->query("SELECT * FROM login WHERE userid = '$userid' ORDER BY id DESC");
                     while ($rows = mysqli_fetch_array($query)) { 
                    ?>
                <tr>
                    <td><?php echo$rows['dated']; ?></td>    
                    <td><?php echo$rows['ip']; ?></td>  
                    <td><b><?php echo$rows['browser'] ?></td> 
                    <td><a class="btn btn-sm  btn-danger" href="delete_log?id=<?php echo$rows['id'] ?>"><em class="icon ni ni-delete"></em> Delete</a></td> 

                </tr> 
              <?php   }   ?>
          </tbody>
      </table>
      </div>
  </div>


</div>

     <?php include("footer.php"); ?>               