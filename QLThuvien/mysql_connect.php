<?php
$servername = "localhost";
$username ="root";
$password ="12345678";
$db ="doan1";
global $conn;
$conn = new mysqli($servername,$username, $password, $db);
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
?>