<?php
	include('db.php');
	$ID=$_GET['ID'];
	$temp=mysql_query("SELECT * FROM products where ID = '$ID'");
	$p=mysql_fetch_assoc($temp);
	$Product=$p['Product'];
	$Price=$p['Price'];
	mysql_query("INSERT INTO cart (Product,Price) VALUES('$Product','$Price')");
	header("location: cart.php");
	exit();
?>
