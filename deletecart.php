<?php
	include('db.php');
	$ID=$_GET['ID'];
	mysql_query("DELETE FROM cart WHERE ID = $ID");
	header("location: cart.php");
	exit();
?>
