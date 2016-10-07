<html>
<head><title>Register</title></head>
<body>

<section class="container">
    <div class="login">
      <h1>Register test</h1>
      <form method="post" action="register2.php"> 
      <p>Username<br><input type="text" align="left" name="RName" value="" required="required" ><br></P>
        <p>Address<br><input type="text" name="RAddress" value="" required="required" ><br></p>
		<p>Password<br><input type="password" name="RPass" value="" required="required" ><br></p>
       Retype Password<br><input type="password" name="RRePass" value="" required="required" ><br>
        </p><p><input type="submit" name="register" value="Register"><p>
      </form>
    </div>

    <div class="login-help">
    <form action="login.php">
    <input type="submit" value="Go back" />
</form>
    </div>
  </section>
<?php
  require_once("connect.php");

if(isset($_POST['register'])){
$registerName = $_POST['RName'];
$registerAddress = $_POST['RAddress'];
$registerPassword = $_POST['RPass'];
$registerRePassword = $_POST['RRePass'];
if($registerPassword == $registerRePassword){
$query="SELECT * FROM 'user'";
$sql = "INSERT INTO user (username, password, address)
VALUES ('$registerName', '$registerPassword' , '$registerAddress')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Username already exist.";
}

}else{
echo "Password did not match.";	
}
 }
 
 ?> 
</body>
</html>

