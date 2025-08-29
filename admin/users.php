<?php include("header.php");
checkInstallUrl($site_url);
 ?>
<div class="nk-content">
 <div class="container-xl wide-lg">
        <div class="nk-content-body">
        <div class="nk-block-head">
         <div class="nk-block-head-sub">
         </div>
           <div class="nk-block-between-md g-4 card-bordered">
             <div class="nk-block-head-content">
              <h4 class="nk-block-title fw-normal">Manage users account.</h4>
                <div class="nk-block-des">
                  <p>
                   </p>
                      </div>
                       </div>
                            <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="open_user_account" class="btn btn-primary"><span>Open an account</span> <em class="icon ni ni-user-add-fill"></em></a></li>
                                            
                                        </ul>

                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                        </div>
                    </div>
                 <div class="nk-block nk-block-lg">
                  <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Registered Users</h4>
                                            <div class="nk-block-des">
                                                <p>Below is the list of registered users and there account information</code> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Fullname</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Account Number</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Account Type</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
   <?php 

    $query = $conn->query("SELECT * FROM register ORDER BY id DESC");
    while($userdetails = mysqli_fetch_array($query)){
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
    $accountbalance = $userdetails["accountbalance"];
    $allowtransfer = $userdetails['allowtransfer'];
    $blocktransfer = $userdetails['blocktransfer'];
    $tfa = $userdetails['tfa'];

    $query2 = $conn->query("SELECT * FROM register WHERE id='$userid' ORDER BY id DESC");
    while($userdetails2 = mysqli_fetch_array($query2)){
    
    if($email_verify != ""){
    	$emailVerify = '<li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>';
    }else{$emailVerify = '  <li><em class="icon text-danger ni ni-alert-circle"></em> <span>Email</span></li>';}

    if($userdetails['status'] == 'blocked'){
    	$suspend = '<a data-toggle="modal" data-target="#unblockAccount'.$userid.'" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Unblock account">
                    <em class="icon ni ni-user text-success"></em>
                    
                      </a>';
    	$stat = '<span class="tb-status text-danger">Suspended</span>';
    }else {$stat = '<span class="tb-status text-success">Active</span>';
     $suspend = '<a data-toggle="modal" data-target="#suspendAccount'.$userid.'" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend User Account">
                     <em class="icon ni ni-user text-success"></em>
                      </a>';
        // $conn->query("UPDATE register SET status = 'active' WHERE id = '$userid' ORDER BY id DESC");                  
    }
    if($userdetails2['allowtransfer'] =='1'){
        $suspendTranfer = '<a data-toggle="modal" data-target="#suspendTranfer'.$userid.'" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Block Funds Transfer">
                        <em class="icon ni ni-tranx text-success"></em>
                      </a>';
            // $conn->query("UPDATE register SET allowtransfer = 1 WHERE id = '$userid' ORDER BY id DESC"); 
    }else {
     $suspendTranfer = '<a data-toggle="modal" data-target="#unblockTranfer'.$userid.'" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Unblock Funds Transfer">
                     <em class="icon ni ni-tranx text-danger"></em>
                      </a>';          
    }

    // if($userdetails['tfa'] == 'active'){
    //     $twofa = '
    //       <li class="nk-tb-action-hidden">
    //        <a href="user2fa?id='.$userid.'&action=disable" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Disable 2FA">
    //         <em class="icon ni ni-security text-danger"></em>
    //        </a>
    //     </li>
    //     ';
    // } else{
    //  $twofa = '
    //       <li class="nk-tb-action-hidden">
    //        <a href="user2fa?id='.$userid.'&action=enable" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Enable 2FA">
    //         <em class="icon ni ni-security text-success"></em>
    //        </a>
    //     </li>
    //     ';  
     
    // }
$twofa = '
    <li class="nk-tb-action-hidden">
        <a href="../scripts/auth?action=delete_trx&id='.$userid.'" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Delete Account" id="delete_result'.$userid.'">
        <em class="icon ni ni-delete text-danger"></em>
        </a>
    </li> ';  
     
    
                                        ?>
                                                 <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="<?php echo$userid ?>">
                                                                <label class="custom-control-label" for="<?php echo$userid ?>"></label>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                    <span><?php echo substr($fullname, 0, 2); ?></span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo$fullname ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span><?php echo$email ?></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo$accountbalance ?> <span class="currency"><?php echo$accountcurrency ?></span></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo$acctno?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                            <ul class="list-status">
                                                                <?php echo$emailVerify; ?>
                                                            </ul>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo$accounttype ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php echo$stat; ?>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="fund_user?accountnumber=<?php echo$acctno ?>&id=<?php echo$userid?>" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Fund account">
                                                                        <em class="icon ni ni-wallet-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="email_user?email=<?php echo$email ?>" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                               
                                                                 <!-- <?php echo$approveB ?> -->
 
                                                                 <?php  echo $twofa ?>
                                                           
                                                                <li class="nk-tb-action-hidden">
                                                                    <?php echo$suspend; ?>
                                                                </li>
                                                                 <li class="nk-tb-action-hidden">
                                                                    <?php echo$suspendTranfer; ?>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="user_profile?id=<?php echo$userid ?>"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="user_transaction?id=<?php echo$userid ?>"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                <li><a href="user_activity?id=<?php echo$userid ?>"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                <li class="divider"></li>
                                                                                <li><a href="user_password_reset?id=<?php echo$userid; ?>"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <!--- Suspend Transfer Modal------->
<div class="modal fade" tabindex="-1" id="suspendTranfer<?php echo$userid ?>" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close text-white" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header text-white" style="background-color:#033d75; color: white;">
                <h5 class="modal-title">Suspend Funds Transfer</h5>
            </div>
            <div class="modal-body">
               <strong>You are about to suspend <?php echo$fullname ?> from carrying out further transfer. The next transfer will be allowed to go through with a pending payment status, subsequent transfer after this won't go through at all. </strong>
              </div>
                <div class="suspendTranferResult<?php echo$userid ?>"></div>
                 <div class="modal-footer">
                    <form action="" method="post">
                        <input type="hidden" name="suspendTranfer<?php echo$userid?>" value="<?php echo$userid?>" id="suspendTranfer<?php echo$userid?>">
                   <button type="submit" class="btn btn-primary btn-sm closeBtn<?php echo$userid ?>">Suspend</button>
                   <button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                   </form>
                        </div>     
                     </div>
                 </div>
             </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function () {
    $('.closeBtn<?php echo$userid ?>').click(function (e) {
      e.preventDefault();
      var suspendTranfer<?php echo$userid?> = $('#suspendTranfer<?php echo$userid?>').val();
       $.ajax
        ({
          type: "POST",
          url: "../scripts/suspend_transfer.php?id=<?php echo$userid ?>",
          data: {"suspendTranfer<?php echo$userid?>": suspendTranfer<?php echo$userid?>, },
          success: function (data) {
            $('.suspendTranferResult<?php echo$userid ?>').html(data);
          }
        });
    });
  });
    </script>
    <!--- Unblock Transfer Modal------->
<div class="modal fade" tabindex="-1" id="unblockTranfer<?php echo$userid ?>" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close text-white" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header text-white" style="background-color:#033d75; color: white;">
                <h5 class="modal-title">Unblock Funds Transfer</h5>
            </div>
            <div class="modal-body">
               <strong>You are about to Unblock <?php echo$fullname ?> to carry out further transfer. The next transfer will be allowed to go through after unblocking this user. </strong>
              </div>
                <div class="unblockTranferResult<?php echo$userid ?>"></div>
                 <div class="modal-footer">
                    <form action="" method="post">
                        <input type="hidden" name="unblockTranfer<?php echo$userid?>" value="<?php echo$userid?>" id="unblockTranfer<?php echo$userid?>">
                   <button type="submit" class="btn btn-primary btn-sm unblockTranferBtn<?php echo$userid ?>">Unblock</button>
                   <button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                   </form>
                        </div>     
                     </div>
                 </div>
             </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript">
     $(document).ready(function () {
    $('.unblockTranferBtn<?php echo$userid ?>').click(function (e) {
      e.preventDefault();
      var unblockTranfer<?php echo$userid?> = $('#unblockTranfer<?php echo$userid?>').val();
       $.ajax
        ({
          type: "POST",
          url: "../scripts/unblock_transfer.php?id=<?php echo$userid ?>",
          data: {"unblockTranfer<?php echo$userid?>": unblockTranfer<?php echo$userid?>, },
          success: function (data) {
            $('.unblockTranferResult<?php echo$userid ?>').html(data);
          }
        });
    });
  });
    </script>

 <!--- Account Suspension Modal------->
<div class="modal fade" tabindex="-1" id="suspendAccount<?php echo$userid ?>" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close text-white" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header text-white" style="background-color:#033d75; color: white;">
                <h5 class="modal-title">Suspend User Account</h5>
            </div>
            <div class="modal-body">
               <strong>You are about to Suspend <?php echo$fullname ?> from the system. The user will be restricted from accessing his/her account if you proceed with this action.</strong>
              </div>
                <div class="suspendResult<?php echo$userid ?>"></div>
                 <div class="modal-footer">
                    <form action="" method="post">
                        <input type="hidden" name="suspend<?php echo$userid?>" value="<?php echo$userid?>" id="suspend<?php echo$userid?>">
                   <button type="submit" class="btn btn-primary btn-sm suspendBtn<?php echo$userid ?>">Suspend</button>
                   <button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                   </form>
                        </div>     
                     </div>
                 </div>
             </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript">
     $(document).ready(function () {
    $('.suspendBtn<?php echo$userid ?>').click(function (e) {
      e.preventDefault();
      var suspend<?php echo$userid?> = $('#suspend<?php echo$userid?>').val();
       $.ajax
        ({
          type: "POST",
          url: "../scripts/restriction.php?id=<?php echo$userid ?>&action=suspend",
          data: {"suspend<?php echo$userid?>": suspend<?php echo$userid?>, },
          success: function (data) {
            $('.suspendResult<?php echo$userid ?>').html(data);
          }
        });
    });
  });
    </script>
    <!---Unblock User account Modal------->
<div class="modal fade" tabindex="-1" id="unblockAccount<?php echo$userid ?>" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close text-white" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header text-white" style="background-color:#033d75; color: white;">
                <h5 class="modal-title">Unblock User Account</h5>
            </div>
            <div class="modal-body">
               <strong>You are about to unblock <?php echo$fullname ?> whose account was currently restricted from the system. The user will be able to  access his/her account onwards if you proceed with this action.</strong>
              </div>
                <div class="unblockResult<?php echo$userid ?>"></div>
                 <div class="modal-footer">
                    <form action="" method="post">
                        <input type="hidden" name="unblock<?php echo$userid?>" value="<?php echo$userid?>" id="unblock<?php echo$userid?>">
                   <button type="submit" class="btn btn-primary btn-sm unblockBtn<?php echo$userid ?>">Unblock</button>
                   <button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                   </form>
                        </div>     
                     </div>
                 </div>
             </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript">
     $(document).ready(function () {
    $('.unblockBtn<?php echo$userid ?>').click(function (e) {
      e.preventDefault();
      var unblock<?php echo$userid?> = $('#unblock<?php echo$userid?>').val();
       $.ajax
        ({
          type: "POST",
          url: "../scripts/restriction.php?id=<?php echo$userid ?>&action=unblock",
          data: {"unblock<?php echo$userid?>": unblock<?php echo$userid?>, },
          success: function (data) {
            $('.unblockResult<?php echo$userid ?>').html(data);
          }
        });
    });
  });
    </script>
                                                <?php } }?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                            </div><!-- .components-preview -->
                 

<?php include("footer.php"); ?>