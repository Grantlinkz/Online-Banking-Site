<?php
function greetings(){
  date_default_timezone_set('Africa/Lagos');

 
 if(date("H") < 12){

   return "Good Morning!";

 }elseif(date("H") > 11 && date("H") < 18){

   return "Good Afternoon!";

 }elseif(date("H") > 17){

   return "Good Evening!";

 }

} 


?>