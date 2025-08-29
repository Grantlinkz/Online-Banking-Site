
<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="Cater Allen awarded Best Financial Service Provider 2018. We have over 200 years of experience working with financial advisers and intermediaries in the UK." />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#022151">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>Admin Cpanel </title>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <!-- Favicon -->
    <link rel="icon" type="image/png" href="../../img/icon.png" />
          
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light fixed">
            <a  href="../../index-2.php" class="navbar-brand"><img src="../images/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
             <a href="admin_cpanel.php" style="color:#006eb8; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
                    <div class="container-fluid mt-5">
                        <div class="col-12"><!--
                             <!-- Contact Message -->
                                <center>
                                    <a href="contact_mail.php" target="_self" class="btn btn-primary">
                                        <i class="far fa-share-square"></i>
                                        VIEW CONTACT MESSAGE FROM CONTACT FORM ON yourWEBSITE
                                    </a>
                                    <hr>
                                    <br>
                                </center>
            <br>
                        </div>
                          <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                        <br>
                        <h3>Customer's Table</h3>
                        <div class="table-responsive">
                      <table class="table table-striped">
                          <thead style="font-size: 12px;">
                          <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">ACCOUNT NAME</th>
                            <th scope="col">Sign In ID</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">LAST Login</th>
                            <th scope="col">ADD HISTORY</th>
                            <th scope="col">EDIT USER INFO</th>
                            <th scope="col">EDIT ACCOUNT STATEMENT</th>
                            <th scope="col">DELETE CUSTOMER</th>
                            <th scope="col">ACTIVATE ACCOUNT</th>
                            <th scope="col">ACCOUNT STATUS</th>
                          </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                                                          <tr>
                           
                               <td>1</td>
                            <td>Charis Hilton</td>
                            <td>1660644951</td>
                            <td>Nigeria1960</td>
                            <td>21st Sep, 2022 06:16pm</td>
                            <td><a href="customer_profile.php?client=85" class="btn btn-success"><i class="fas fa-eye" style="font-size: 12px"></i> ADD</a></td>
                            <td><a href="edit.php?client=85" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                             <td><a href="choose.php?client=85" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                            <td> <a href='../includes/delete_client.php?del=85' type='button' class='btn btn-danger' style='margin-right: 5px; background: red !important'><i class='fas fa-trash-alt'></i> Delete</a></td>
                            <td style="font-size: 10px">
                                <button class="btn-sm btn-success" type="button" class=""><a style="color: #fff" href="complete.php?val=85">Active</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-danger" type="button" class=""><a style="color: #fff;" href="error.php?val=85">Dormant</a></button>
                                <br><br>
                                <button class="btn-sm btn-primary" type="button" class=""><a style="color: #fff" href="pending.php?val=85">Pending</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-warning" type="button" class=""><a style="color: #fff" href="transfer_code.php?val=85">Transfer Code</a></button>
                                <br><br>
                                <button class="btn-sm btn-danger" type="button" class="" style="background: red"><a style="color: #fff;" href="suspended.php?val=85">Suspended</a></button>
                                <br><br>
                                <button class="btn-sm btn-warning" type="button" class="" style="background: orangered"><a style="color: #fff" href="blocked.php?val=85">Blocked</a></button>
                                <br><br>
                             
                                 <button class="btn-sm" type="button" style="background: #333; border-radius: 5px;"><a style="color: #fff;" href="dormant.php?val=85">Error</a></button>
                                <br>
                               
                            </td>
                               <td>pending</td>
                          </tr>
                          
                                                        <tr>
                           
                               <td>2</td>
                            <td>Brianne Bugbee</td>
                            <td>1660661629</td>
                            <td>Ilivegail2!</td>
                            <td>15th Sep, 2022 01:46pm</td>
                            <td><a href="customer_profile.php?client=86" class="btn btn-success"><i class="fas fa-eye" style="font-size: 12px"></i> ADD</a></td>
                            <td><a href="edit.php?client=86" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                             <td><a href="choose.php?client=86" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                            <td> <a href='../includes/delete_client.php?del=86' type='button' class='btn btn-danger' style='margin-right: 5px; background: red !important'><i class='fas fa-trash-alt'></i> Delete</a></td>
                            <td style="font-size: 10px">
                                <button class="btn-sm btn-success" type="button" class=""><a style="color: #fff" href="complete.php?val=86">Active</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-danger" type="button" class=""><a style="color: #fff;" href="error.php?val=86">Dormant</a></button>
                                <br><br>
                                <button class="btn-sm btn-primary" type="button" class=""><a style="color: #fff" href="pending.php?val=86">Pending</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-warning" type="button" class=""><a style="color: #fff" href="transfer_code.php?val=86">Transfer Code</a></button>
                                <br><br>
                                <button class="btn-sm btn-danger" type="button" class="" style="background: red"><a style="color: #fff;" href="suspended.php?val=86">Suspended</a></button>
                                <br><br>
                                <button class="btn-sm btn-warning" type="button" class="" style="background: orangered"><a style="color: #fff" href="blocked.php?val=86">Blocked</a></button>
                                <br><br>
                             
                                 <button class="btn-sm" type="button" style="background: #333; border-radius: 5px;"><a style="color: #fff;" href="dormant.php?val=86">Error</a></button>
                                <br>
                               
                            </td>
                               <td>transfer code</td>
                          </tr>
                          
                                                        <tr>
                           
                               <td>3</td>
                            <td>Sharon Laurain</td>
                            <td>1663795150</td>
                            <td>Yellowdog182</td>
                            <td>28th Sep, 2022 10:28am</td>
                            <td><a href="customer_profile.php?client=87" class="btn btn-success"><i class="fas fa-eye" style="font-size: 12px"></i> ADD</a></td>
                            <td><a href="edit.php?client=87" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                             <td><a href="choose.php?client=87" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                            <td> <a href='../includes/delete_client.php?del=87' type='button' class='btn btn-danger' style='margin-right: 5px; background: red !important'><i class='fas fa-trash-alt'></i> Delete</a></td>
                            <td style="font-size: 10px">
                                <button class="btn-sm btn-success" type="button" class=""><a style="color: #fff" href="complete.php?val=87">Active</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-danger" type="button" class=""><a style="color: #fff;" href="error.php?val=87">Dormant</a></button>
                                <br><br>
                                <button class="btn-sm btn-primary" type="button" class=""><a style="color: #fff" href="pending.php?val=87">Pending</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-warning" type="button" class=""><a style="color: #fff" href="transfer_code.php?val=87">Transfer Code</a></button>
                                <br><br>
                                <button class="btn-sm btn-danger" type="button" class="" style="background: red"><a style="color: #fff;" href="suspended.php?val=87">Suspended</a></button>
                                <br><br>
                                <button class="btn-sm btn-warning" type="button" class="" style="background: orangered"><a style="color: #fff" href="blocked.php?val=87">Blocked</a></button>
                                <br><br>
                             
                                 <button class="btn-sm" type="button" style="background: #333; border-radius: 5px;"><a style="color: #fff;" href="dormant.php?val=87">Error</a></button>
                                <br>
                               
                            </td>
                               <td>pending</td>
                          </tr>
                          
                                                        <tr>
                           
                               <td>4</td>
                            <td>Kelvin Brown</td>
                            <td>1664987128</td>
                            <td>tylerfred</td>
                            <td></td>
                            <td><a href="customer_profile.php?client=88" class="btn btn-success"><i class="fas fa-eye" style="font-size: 12px"></i> ADD</a></td>
                            <td><a href="edit.php?client=88" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                             <td><a href="choose.php?client=88" class="btn btn-primary"><i class="fas fa-eye" style="font-size: 12px"></i> EDIT</a></td>
                            <td> <a href='../includes/delete_client.php?del=88' type='button' class='btn btn-danger' style='margin-right: 5px; background: red !important'><i class='fas fa-trash-alt'></i> Delete</a></td>
                            <td style="font-size: 10px">
                                <button class="btn-sm btn-success" type="button" class=""><a style="color: #fff" href="complete.php?val=88">Active</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-danger" type="button" class=""><a style="color: #fff;" href="error.php?val=88">Dormant</a></button>
                                <br><br>
                                <button class="btn-sm btn-primary" type="button" class=""><a style="color: #fff" href="pending.php?val=88">Pending</a></button>
                                <br>
                                <br>
                                <button class="btn-sm btn-warning" type="button" class=""><a style="color: #fff" href="transfer_code.php?val=88">Transfer Code</a></button>
                                <br><br>
                                <button class="btn-sm btn-danger" type="button" class="" style="background: red"><a style="color: #fff;" href="suspended.php?val=88">Suspended</a></button>
                                <br><br>
                                <button class="btn-sm btn-warning" type="button" class="" style="background: orangered"><a style="color: #fff" href="blocked.php?val=88">Blocked</a></button>
                                <br><br>
                             
                                 <button class="btn-sm" type="button" style="background: #333; border-radius: 5px;"><a style="color: #fff;" href="dormant.php?val=88">Error</a></button>
                                <br>
                               
                            </td>
                               <td></td>
                          </tr>
                          
                                                    </tbody>
                      </table>
                    </div>
           
        </div>
        
        
            
                <!-- jQuery library -->
         <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
         <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
         <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
