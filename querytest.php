<?php
require 'connect.php';

$query="SELECT * FROM 'user'";
$sql = "INSERT INTO user (id, username, password, email)
VALUES (null, 'Erik', '12345' , 'ErikErik@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
if($query){
echo 'it wooooorked';
}
else{
echo "Did not work";
}

?>