<?php
require 'connect.php';

$query="SELECT * FROM 'user'";
$sql = "INSERT INTO user (id, username, password, address)
VALUES (null, 'Erik', '123' , 'Lund')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if($query){
echo 'it wooooorked';
}
else{
echo "Did not work";
}

?>