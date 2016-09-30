<html>
<head>
  <title>Home</title>
</head>
<body>
<div class="login-help"  align="center">
      <p><a href="login.php">Click here to login</a>.</p>
    </div>
</body>

<?php
session_start();

	if(isset($_SESSION['CurrentUser'])){
		echo 'Welcome ' . $_SESSION['CurrentUser'];
	}
?>

</html>