<html> 
<head>
  <title>Receipt</title>
</head>
<body>
<?php
session_start();
	
	
		
	
	echo '<p align"center">Order completed.</p>';
	echo 'Buyer: ' . $_SESSION['CurrentUser'];
	if($_SESSION['counterBanana']>0){
	echo '<p>' . $_SESSION['counterBanana'] . 'x bananas</p>';
	}
	if($_SESSION['counterCookie']>0){
	echo '<p>' . $_SESSION['counterCookie'] . 'x cookies</p>';
	}
	echo 'Total: ' . $_SESSION['sumTotal'] . ' kr';

?>
<p><form action="index.php"><input type="submit" value="Finish" /></form></p>
<?php
$_SESSION['counterBanana']=0;
$_SESSION['counterCookie']=0;
?>
</body>
</head>
</html>
