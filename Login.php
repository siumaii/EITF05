<?php
session_start();
?>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login test</h1>
      <form method="post" action="login.php"> 
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
		
		require_once("connect.php");

if(isset($_POST['commit'])){
$username = $_POST['inputlogin'];
$password = $_POST['inputpassword'];

$sql = "SELECT username FROM user WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
      
      $count = mysqli_num_rows($result);
			
		   if($count == 1) {
         
         $_SESSION['CurrentUser'] = $username;
         
         header("location: profile.php");
      }else {
         echo "Your Username or Password is invalid";
      }
}
?>
 
</body>
</html>