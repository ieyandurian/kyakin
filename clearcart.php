<?php
	include('db.php');
	mysql_query("DELETE FROM cart");
	header("location: cart.php");
	exit();
?>
