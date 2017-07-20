<?php
	include('db.php');
	$ID=$_GET['ID'];
	mysql_query("DELETE FROM orders WHERE ID = $ID");
	header("location: orders.php");
	exit();
?>
