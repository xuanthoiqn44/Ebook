<?php
include('include/dbcon.php');
include('session.php');
$db = new Database();
$logout_query=$db->db_query("select * from admin where admin_id=$id_session");
$row=$db->db_fetch_array($logout_query);
$user=$row['firstname']." ".$row['lastname'];
session_start();
session_destroy();

header('location:index.php');

?>