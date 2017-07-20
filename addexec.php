<?php
	include('db.php');
	$id = $_POST['id'];
	$prod = $_POST['prod'];
	$desc = $_POST['desc'];
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	
	
	$sql = "INSERT INTO products (ID,Product,Description,Category,Price)
	VALUES('$id','$prod','$desc','$cat','$price')";
	
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	$row = mysql_num_rows($query);
	if($row['ID'] == $id){
		echo "Record existed";
		echo "<br><a href='admin.php' style='color:black;'>Back</a>";
	}
	
	header("location: admin.php");
	exit();
?>