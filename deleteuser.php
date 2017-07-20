<?php
	include('db.php');
	$Username=$_GET['Username'];
	mysql_query("DELETE FROM users WHERE Username = '$Username'");
	header("location: users.php");
	exit();
?>
