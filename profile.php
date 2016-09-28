<html>
<head>
  <title>profile</title>
</head>
<body>
<div class="login-help"  align="center">
      <p><a href="index.html">Click here to log out</a>.</p>
    </div>
</body>
<?php
session_start();
if(isset($_SESSION['CurrentUser'])){
	echo 'Welcome ' . $_SESSION['CurrentUser'];
}
?>
</HTML>