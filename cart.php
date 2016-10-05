<html> 
<head>
  <title>Cart</title>
</head>
<body>
<?php
session_start();
	$sumBanana = $_SESSION['counterBanana']*5;
	$sumCookie = $_SESSION['counterCookie']*10;
	$_SESSION['sumTotal'] = $sumBanana+$sumCookie;
	
	echo 'Logged in as ' . $_SESSION['CurrentUser'];
	echo '<p><a href="logout.php">Click here to log out</a></p>';
	echo '<p><a href="store.php">Shop</a></p>';
	echo '<form action="resetBanana.php">Bananas: ' . $_SESSION['counterBanana'] . ' (' . $sumBanana . ' kr) <input type="submit" value="X" /></form>';
	echo '<form action="resetCookie.php">Cookies: ' . $_SESSION['counterCookie'] . ' (' . $sumCookie . ' kr) <input type="submit" value="X" /></form>';
	echo 'Total: ' . $_SESSION['sumTotal'] . ' kr';
	
	if($_SESSION['counterCookie'] > 0 || $_SESSION['counterBanana'] > 0){
		echo '<form action="receipt.php" align="right"><input type="submit" value="Buy" /></form>';
	}
?>
</body>
</head>
</html>
