<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Tennis-Website";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Username(UserNameID, UserName, pass)
VALUES ('2', 'test1', 'test2')";

if ($conn->query($sql) === TRUE) {
    


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>