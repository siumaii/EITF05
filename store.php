<html>
<head>
  <title>Store</title>
</head>
<?php
session_start();

	echo 'Logged in as ' . $_SESSION['CurrentUser'];
	echo '<p><a href="logout.php">Click here to log out</a></p>';
	echo '<p><a href="cart.php">Go to cart</a>';
	if(isset($_POST['cart'])){
		echo ' (!)</p>';
	}
	// if counter is not set, set to zero
if(!isset($_SESSION['counterCookie'])) {
    $_SESSION['counterCookie'] = 0;
}
if(!isset($_SESSION['counterBanana'])) {
    $_SESSION['counterBanana'] = 0;
}

// if button is pressed, increment counter
if(isset($_POST['button+b'])) {
    ++$_SESSION['counterBanana'];
}
if(isset($_POST['button-b']) && $_SESSION['counterBanana'] > 0){
    --$_SESSION['counterBanana'];
}    
if(isset($_POST['button+c'])) {
    ++$_SESSION['counterCookie'];
}
if(isset($_POST['button-c'])  && $_SESSION['counterCookie'] > 0) {
    --$_SESSION['counterCookie'];
} 
?>
<body>

<form method="POST">
<table style="width:100%">
<tr>
<th>Bananas</th>
<th>Cookies</th>
</tr>
<tr>
<th><img src="banana.jpg" alt="banana" style="width:304px;height:228px;"></th>
</th>
<th><img src="cookie.png" alt="cookie" style="width:304px;height:228px;"></th>

</tr>
<tr>
<th>5kr/each</th>
<th>10kr/each</th>
</tr>
<tr>
<th> <input type="submit" name="button-b" value="-" /><input type="text" name="bananaCount" value="" placeholder="<?php echo $_SESSION['counterBanana']; ?>"><input type="submit" name="button+b" value="+" /></th>
<th> <input type="submit" name="button-c" value="-" /><input type="text" name="cookieCount" value="" placeholder="<?php echo $_SESSION['counterCookie']; ?>"><input type="submit" name="button+c" value="+" /></th>
</tr>
</table>
 <p align="right"><input type="submit" name="cart" value="Add to cart" /></p>
</form>
</body>



</html>