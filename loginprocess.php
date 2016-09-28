<?php

	
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
 	header("Location: login.php"); 

?>