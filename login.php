<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "db.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['user']);
	$password = clean($_POST['password']);
	
	//Create query

	$qry1="SELECT * FROM users WHERE username='$login' AND password='$password' AND Role='Administrator'";
	$result1=mysql_query($qry1);
	$r1 = $result1['Realname'];
	//Check whether the query was successful or not
	if($result1) {
		if(mysql_num_rows($result1) > 0) {
			//Login Successful
			session_regenerate_id();
			$member1 = mysql_fetch_assoc($result);
			mysql_query("UPDATE currentuser SET Email='".$member1['Email']."', Realname='".$member1['Realname']."',Contact='".$member1['Contact']."',Address='".$member1['Address']."'");
			session_write_close();
			
			header("location: admin.php");
			
			exit();
		
		}
	}else {
		die("Query failed");
	}
	
	
	$qry="SELECT * FROM users WHERE username='$login' AND password='$password'";
	$result=mysql_query($qry);
	$r = $result['Realname'];
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			mysql_query("UPDATE currentuser SET Email='".$member['Email']."', Realname='".$member['Realname']."',Contact='".$member['Contact']."',Address='".$member['Address']."'");
			session_write_close();
			
			header("location: productsuser.php");
			
			exit();
		}else {
			//Login failed
			header("location: products.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>