<?php

	require_once("login.php"); 
 	require_once("connect.php"); 
  
 	
 	
 	if(!$conn){ 
 		header("Location: couldnotconnect.html"); 
 		exit(); 
 	} 
  
 	 // $userId = $_REQUEST['userId']; 
 	 // if (!$db->userExists($userId)) { 
 		 // $db->closeConnection(); 
 		 // header("Location: usernotfound.html"); 
		 // exit(); 
 	 // } 
 	// $db->closeConnection(); 
  
 	// session_start(); 
 	// $_SESSION['db'] = $db; 
 	// $_SESSION['userId'] = $userId; 
 	
// if(isset($_POST['commit'])){
// $username = $_POST['inputlogin'];
// $password = $_POST['inputpassword'];
// echo "Welcome back, " . $username;
// }else{
// echo 'Please enter your username';	
// }

if(isset($_POST['commit'])){

echo "Welcome back, " . $username;
}else{
echo 'Please enter your username';	
}
	 

?>