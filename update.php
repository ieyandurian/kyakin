<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
    <link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
			function myFunction(){
				alert("Your personal details has been updated.");
			}
	</script>
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
					<li class="color"><a href="lr.php">Living Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="dr.php">Dining Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="br.php">Bed Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="of.php">Outdoor Furniture&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
				</ul>
			</div>
			<div id="main_block">
				<img src="images/title12.gif" alt="" width="190" height="30" /><br /><br>
			<?php
/* includ db connection file*/
include("db.php");
/* execute SQL statement */
	$currentuser = mysql_query("SELECT * FROM users where Realname like (select Realname from currentuser)");
	$urow=mysql_fetch_assoc($currentuser);

	$Realname = $urow['Realname'];
	$Contact = $urow['Contact'];
	$Address = $urow['Address'];
	$Email = $urow['Email'];
?>

		<form name="form" method="post" action="process1.php">
			<font size="3" face="Courier New"><table border="0">
				<tr><td>Name</td><td>:</td><td><input type="text" name="Realname" value="<?php echo $Realname; ?>" size="70" hidden><?php echo $Realname; ?></td></tr>
				<tr><td>Contact</td><td>:</td><td><input type="text" name="Contact" value="<?php echo $Contact; ?>" size="70"><sub>*can be updated</sub></td></tr>
				<tr><td>Address</td><td>:</td><td><textarea name="Address" value="<?php echo $Address; ?>" style="width: 435px; height: 17px;"><?php echo $Address; ?></textarea><sub>*can be updated</sub></td></tr>
				<tr><td>Email</td><td>: </td><td><input type="text" name="Email" value="<?php echo $Email; ?>" size="70"><sub>*can be updated</sub></td></tr>
				</tr>
			</table></font><br>
			<input type="submit" name="Update" value="Update" onclick="myFunction()">
			<a href="productsuser.php" style="color:black;">Back</a></td>
		</form>

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
<?php
mysql_close($bd);
?>