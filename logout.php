<?php
session_start();
unset($_SESSION["CurrentUser"]);  
header("Location: index.php");
?>