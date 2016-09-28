
<html>
<head>
  <title>Login</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login test</h1>
      <form method="post" action="loginprocess.php"> 
        <p><input type="text" name="inputlogin" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="inputpassword" value="" placeholder="Password"></p>
       
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Not a member? <a href="index.html">Click here to register</a>.</p>
    </div>
  </section>
  
<?php
if(isset($_POST['commit'])){
$username = $_POST['inputlogin'];
$password = $_POST['inputpassword'];
echo "Welcome back, " . $username;
}else{
echo 'Please enter your username';	
}
?>
 
</body>
</html>