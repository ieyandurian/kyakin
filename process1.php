<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
    <link href="style.css" rel="stylesheet" type="text/css">
	
  </head>
  <body>
  <div id="header">																																																																								
		<div id="header_inside">
			<img src="images/header.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="productsuser.php" class="but1" style="text-decoration:none">Products</a></li>
				<li><a href="cart.php" class="but2" style="text-decoration:none">Cart</a></li>
				<li><a href="customersorder.php" class="but4" style="text-decoration:none">Customer Orders</a></li>
				<li><a href="#" class="but3_active" style="text-decoration:none">Update Info</a></li>
				<li><a href="index.php" class="but5" style="text-decoration:none">Logout</a></li>
			</ul>
		</div>
	</div>
      <!-- end of menu -->
	  <div id="wrapper">																																																																											
		<div id="content_inside">
          <div id="sidebar">
				<img src="images/title1.gif" alt="" width="174" height="30" /><br />																																																																		
				<ul id="list">
					<li class="color"><a href="#">Living Room</a></li>
					<li><a style="text-decoration:none">Sofa</a></li>
					<li><a style="text-decoration:none">Chairs</a></li>
					<li><a style="text-decoration:none">Coffee Tables</a></li>
					<li><a style="text-decoration:none">Side Tables</a></li>
					<li class="color"><a href="#">Dining Room</a></li>
					<li><a style="text-decoration:none">Dining Tables</a></li>
					<li class="color"><a href="#">Bed Room</a></li>
					<li><a style="text-decoration:none">Beds</a></li>
					<li><a style="text-decoration:none">Cupboards</a></li>
					<li class="color"><a href="#">Outdoor Furniture</a></li>
					<li><a style="text-decoration:none">Benches</a></li>
				</ul>
			</div>
			<div id="main_block">
				<img src="images/title12.gif" alt="" width="190" height="30" /><br /><br>
		  		  
<?php
/* include db connection file */
include("db.php");

/* update process */
if(isset($_POST['Update'])){
	$Realname = $_POST['Realname'];
	$Contact = $_POST['Contact'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	
	$sql = "UPDATE users SET
			Contact = '$Contact',
			Address = '$Address',
			Email = '$Email'
			WHERE Realname = (select Realname from currentuser)";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Update success</h5>";
}
/* delete process */
if(isset($_POST['Delete'])){
	$Realname = $_POST['Realname'];
	$sql = "DELETE FROM products WHERE Realname = $Realname";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Delete success</h5>";
}

echo "<br><a href='cart.php' style='color:black;'>Back</a>";
/* close connection */
mysql_close($bd);
?>
		  
          </div>
          </div>
        </div>
        <!-- end of content right-->
        <div id="footer">
		<div id="footer_inside">
			<ul class="footer_menu">
				<li><a href="productsuser.php">Products</a>|</li>
				<li><a href="cart.php">Cart</a>|</li>
				<li><a href="customersorder.php">Customer Order</a>|</li>
				<li><a href="update.php">Update Info</a></li>
			</ul><br /><br />
			<p>Copyright &copy;. All rights reserved.</p>																																																											
		</div>
	</div>
    <map name="Map">
       <area shape="rect" coords="78,45,312,119" href="productsuser.php">
       <area shape="poly" coords="670,87,719,78,727,123,677,130" href="productsuser.php">
       <area shape="poly" coords="776,124,818,152,793,189,751,160" href="index.php">
       <area shape="poly" coords="834,52,885,61,878,105,828,96" href="cart.php">
	</map>
    </script>
  </body>
</html>