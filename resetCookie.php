<?php
session_start();
$_SESSION['counterCookie'] = 0;
header("Location: cart.php");
?>