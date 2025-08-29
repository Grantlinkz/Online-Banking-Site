    <?php
    include("connect.php");
    // $accountid = $_SESSION["loggedUser"];
    // accountnumber = '$accountid'
    // include('functions.php');
    // check_login();
    $id=$_SESSION['USER']->id;
    $userquery = $conn->query("SELECT * FROM register where id='$id'");
    while($userdetails = mysqli_fetch_array($userquery)){   
        $userid = $userdetails["id"];
        $id = $userdetails['id']; 
        $firstname = $userdetails['firstname']; 
        $lastname = $userdetails['lastname'];
        $middlename = $userdetails['middlename'];
        $fullname = "$firstname $middlename $lastname"; 
        $email = $userdetails['email'];
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
        $image = $userdetails['image'];
    }

?>