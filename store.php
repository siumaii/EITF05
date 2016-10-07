<html>
<head>
  <title>Store</title>
</head>
<?php
require_once("connect.php");
session_start();

	echo 'Logged in as ' . $_SESSION['CurrentUser'];
	echo '<p><a href="logout.php">Click here to log out</a></p>';
	echo '<p><a href="cart.php">Go to cart</a>';
	if(isset($_POST['cart'])){
		echo ' (!)</p>';
	}
	// if counter is not set, set to zero
if(!isset($_SESSION['Cookies'])) {
    $_SESSION['Cookies'] = 0;
    $_SESSION['counterCookie'] = 0;
}
if(!isset($_SESSION['Bananas'])) {
    $_SESSION['Bananas'] = 0;
    $_SESSION['counterBanana'] = 0;
}



// if button is pressed, increment counter
if(isset($_POST['button+b'])) {
    ++$_SESSION['Bananas'];
}
if(isset($_POST['button-b']) && $_SESSION['Bananas'] > 0){
    --$_SESSION['Bananas'];
}    
if(isset($_POST['button+c'])) {
    ++$_SESSION['Cookies'];
}
if(isset($_POST['button-c'])  && $_SESSION['Cookies'] > 0) {
    --$_SESSION['Cookies'];
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
<th>Stock: tba</th>
<th>Stock: tba</th>
</tr>
<tr>
<th>5kr/each</th>
<th>10kr/each</th>
</tr>
<tr>
<th> <input type="submit" name="button-b" value="-" /><?php echo " " . $_SESSION['Bananas'] . " "; ?><input type="submit" name="button+b" value="+" /></th>
<th> <input type="submit" name="button-c" value="-" /><?php echo " " . $_SESSION['Cookies'] . " "; ?><input type="submit" name="button+c" value="+" /></th>
</tr>
</table>
 <p align="right"><input type="submit" name="cart" value="Add to cart" /></p>
</form>
<?php
 if(isset($_POST['cart'])){
	 $_SESSION['counterBanana'] += $_SESSION['Bananas'];
	 $_SESSION['counterCookie'] += $_SESSION['Cookies'];
	 unset($_SESSION['Bananas']);
	 unset($_SESSION['Cookies']);
 }



//<input type="text" name="cookieCount" value="" placeholder="">
// <input type="text" name="bananaCount" value="" placeholder=""> 
?>
</body>



</html>