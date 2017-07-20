<?php
	include('db.php');
	
	$currentuser = mysql_query("SELECT * FROM currentuser");
	while($urow=mysql_fetch_assoc($currentuser))
	{
	
	$CName=$urow['Realname'];
	$Contact=$urow['Contact'];
	$Address=$urow['Address'];
	$Email=$urow['Email'];
	}
	
	$result=mysql_query("SELECT * FROM cart");
	while($row=mysql_fetch_assoc($result))
	{			
	$Prod = $row['Product'];
	$ItemCount = $_POST['t'.$row['ID'].''];
	$Price = $row['Price'];
	$TotalPrice = $row['Price'] * $ItemCount;
	mysql_query("INSERT INTO orders (Customer,Product,Price,Count,TotalPrice,Address,OrderDate)
	VALUES ('". $CName ."', '". $Prod ."', '". $Price ."', '". $ItemCount ."', '". $TotalPrice ."', '". $Address ."', now())");
	mysql_query("INSERT INTO invoice (InvoiceDate,Product,Price,Count,TotalPrice)
	VALUES (now(), '". $Prod ."', '". $Price ."', '". $ItemCount ."', '". $TotalPrice ."')");
	}
	mysql_query("DELETE FROM cart");
	
	header("location: customersorder.php");
	exit();
?>
