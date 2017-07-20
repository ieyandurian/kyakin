<?php
	include('db.php');
	$uName = $_POST['uName'];
	$pWord = $_POST['pWord'];
	$rName = $_POST['rName'];
	$Contact = $_POST['cNum'];
	$Address = $_POST['addr'];
	$Email = $_POST['email'];
	
	
	mysql_query("INSERT INTO users (Username,Password,Realname,Contact,Address,Email,Role)
	VALUES('$uName','$pWord','$rName','$Contact','$Address','$Email','User')");
	
	header("location: products.php");
	exit();
?>
