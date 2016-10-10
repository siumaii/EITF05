<html> 
<head>
  <title>Cart</title>
</head>
<body>
<?php
session_start();
require_once('connect.php');
	$sumBanana = $_SESSION['counterBanana']*5;
	$sumCookie = $_SESSION['counterCookie']*10;
	$_SESSION['sumTotal'] = $sumBanana+$sumCookie;
	
	echo 'Logged in as ' . $_SESSION['CurrentUser'];
	echo '<p><a href="logout.php?validation=' . $_SESSION["token"] . '">Click here to log out</a></p>';
	echo '<p><a href="store.php">Shop</a></p>';
	if($_SESSION['counterBanana']>0){
		echo '<form action="resetBanana.php">Bananas: ' . $_SESSION['counterBanana'] . ' (' . $sumBanana . ' kr) <input type="submit" value="X" /></form>';
	}
	if($_SESSION['counterCookie']>0){
		echo '<form action="resetCookie.php">Cookies: ' . $_SESSION['counterCookie'] . ' (' . $sumCookie . ' kr) <input type="submit" value="X" /></form>';
	}
	echo 'Total: ' . $_SESSION['sumTotal'] . ' kr';
	
	if($_SESSION['counterCookie'] > 0 || $_SESSION['counterBanana'] > 0){
		echo '<form method="post" action="cart.php" align="right"><input type="submit" name="BuyButton" value="Buy"></form>';
	}
	
if(isset($_POST['BuyButton'])){
	$boughtBanana = $_SESSION['counterBanana'];
	$boughtCookie = $_SESSION['counterCookie'];
	
	$sqlB = "UPDATE storage SET amount=GREATEST(0, amount - $boughtBanana ) WHERE product='banana'";
	$sqlC = "UPDATE storage SET amount=GREATEST(0, amount - $boughtCookie ) WHERE product='cookie'";
if ($conn->query($sqlB) === TRUE && $conn->query($sqlC) === TRUE) {
    echo "Record updated successfully";
	header("location: receipt.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}
?>
</body>
</head>
</html>
