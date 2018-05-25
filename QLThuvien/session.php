<?php 
session_start();
if (!isset($_SESSION['id'])){
	header('location:book.php');
	$_SESSION['id'] = 0;
}
else{
	$id_session=$_SESSION['id'];
}
?>