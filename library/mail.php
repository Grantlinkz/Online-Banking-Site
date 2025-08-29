<?php

require_once 'config.php';
require_once 'database.php';

function send_email($data) {
	$to = $data['to'];
	$sub = $data['sub'];
	$msg = $data['msg'];
	$message = get_email_msg($data);
	$header = "From: lichfieldfinanceonline@email.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail($to,$sub,$message,$header);
	
  
	
}

function get_email_msg($data) {
	$msg_text = "";
	
	switch($data['msg']) {
		
		case 'acc_open':
			$msg_text = '';
		break;
		
		case 'otp':
			$msg_text = sprintf(" 
			
		 
                            
                     Your Lichfield Finance Trust Bank One Time Transaction Authorization (OTP) Code  : %u", $data['token'] );
                     
                    
			
			
		break;
		
		case 'change_pwd':
			$msg_text = sprintf(" 
			
			
			
			
		Your Lichfield Finance Trust Bank password is successfully changed. New Password is : %s", $data['pwd']);
		break; 
		
		case 'change_pin':
			$msg_text = sprintf(" 
			
			Dear Customer, </br>
			
			A user A user has access your Lichfield Finance Trust Bank and has requested for the change of account Personal Identification Number,
			
			Your Account PIN is successfully changed to New Personal Identification Number (PIN) to : %u", $data['pin']);
		break;		
		
		case 'transfer':
			$msg_text = $data['body'];
		break;
		
		case 'register':
			$msg_text = $data['body'];
		break;
		
	}//switch
	return $msg_text;
}

?>