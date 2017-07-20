<?php
	include('db.php');
	$ID=$_GET['ID'];
	mysql_query("DELETE FROM products WHERE ID = '$ID'");
	header("location: admin.php");
	exit();
?>
