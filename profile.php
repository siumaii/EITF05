<html>
<head>
  <title>profile</title>
</head>
<body>
<div class="login-help"  align="center">
      <p><a href="store.php">Shop</a></p>
	  
	  
    </div>
</body>
<?php
session_start();
if(isset($_SESSION['CurrentUser'])){
	echo 'Welcome ' . $_SESSION['CurrentUser'] . "!";
}
?>
<p><a href="logout.php">Click here to log out</a></p>
</HTML>