<html>
<head>
  <title>Home</title>
</head>
<body>

</body>

<?php
session_start();

	if(isset($_SESSION['CurrentUser'])){
		echo 'Logged in as ' . $_SESSION['CurrentUser'];
		echo '<p><a href="logout.php">Click here to log out</a></p>';
		echo '<p><a href="store.php">Shop</a></p>';
	} else {
		echo '<p><a href="login.php">Click here to login</a>.</p>';
	}
	
?>

</html>