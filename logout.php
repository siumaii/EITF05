<?php
session_start();
unset($_SESSION["CurrentUser"]); 
unset($_SESSION["counterCookie"]); 
unset($_SESSION["counterBanana"]);  
header("Location: index.php");
?>