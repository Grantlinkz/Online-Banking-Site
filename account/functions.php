<?php 
// include("../scripts/functions.php");
include("connect.php");
require_once '../scripts/functions.php';
// session_start();

// function signup($data)
// {
// 	$errors = array();
 
// 	//validate 
// 	if(!preg_match('/^[a-zA-Z]+$/', $data['username'])){
// 		$errors[] = "Please enter a valid username";
// 	}

// 	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
// 		$errors[] = "Please enter a valid email";
// 	}

// 	if(strlen(trim($data['password'])) < 4){
// 		$errors[] = "Password must be atleast 4 chars long";
// 	}

// 	if($data['password'] != $data['password2']){
// 		$errors[] = "Passwords must match";
// 	}

// 	$check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
// 	if(is_array($check)){
// 		$errors[] = "That email already exists";
// 	}

// 	//save
// 	if(count($errors) == 0){

// 		$arr['username'] = $data['username'];
// 		$arr['email'] = $data['email'];
// 		$arr['password'] = hash('sha256',$data['password']);
// 		$arr['date'] = date("Y-m-d H:i:s");

// 		$query = "insert into users (username,email,password,date) values 
// 		(:username,:email,:password,:date)";

// 		database_run($query,$arr);
// 	}
// 	return $errors;
// }

// function loggedToken() {
//     $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890";
//     $usertoken = array();
//     $alphaLength = strlen($alphabet) - 1; 
//     for ($i = 0; $i < 82; $i++) {
//     $n = rand(0, $alphaLength);
//     $usertoken[] = $alphabet[$n];
//     }
//     return implode($usertoken); 
//     }


    /*
    * End of user login token
    *
    */

    //Url getter function
    // function url(){
    // include("url.php"); 
    // }
    //end of url getter function

	
function login($data)
{
	$errors = array();
 
	//validate 
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}
 
	//check
	if(count($errors) == 0){

		$arr['email'] = $data['email'];
		$password = $data['password'];

		$query = "select * from register where email = :email limit 1";

		$row = database_run($query,$arr);

		if(is_array($row)){
			$row = $row[0];

			if($password === $row->password){
				
				$_SESSION['USER'] = $row;
				$_SESSION['LOGGED_IN'] = true;
				// login Activities
				$loggedtoken = loggedToken();
				$_SESSION["loggedToken"] = $loggedtoken;
				$userid = $_SESSION["USER"]->id;
				$ip = $_SERVER["REMOTE_ADDR"];
				$dated = date("d M y, H:i a");
				$browser = $_SERVER["HTTP_USER_AGENT"];
				include("connect.php");
				$queryyy = $conn->query("INSERT INTO login(ip, browser, dated, token, userid) VALUES ('$ip', '$browser', '$dated', '$loggedtoken', '$userid')");
			}else{
				$errors[] = "wrong email or password";
			}

		}else{
			$errors[] = "wrong email or password";
		}
	}
	return $errors;
}


function database_run($query,$vars = array())
{
	include("connect.php");
	$string = "mysql:host=localhost;dbname=m&tb";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: log.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){

	$id = $_SESSION['USER']->id;
	$query = "select * from register where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];

		if($row->email == $row->email_verified){

			return true;
		}
	}
 
	return false;
 	
}

