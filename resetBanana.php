<?php
session_start();
$_SESSION['counterBanana'] = 0;
header("Location: cart.php");
?>