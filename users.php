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
			<img src="images/header3.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="admin.php" class="but1" style="text-decoration:none">Products</a></li>
				<li><a href="#" class="but2_active" style="text-decoration:none">Users</a></li>
				<li><a href="orders.php" class="but3" style="text-decoration:none">Orders</a></li>
				<li><a href="search.php" class="but4" style="text-decoration:none">Update Product</a></li>
				<li><a href="index.php" class="but5" style="text-decoration:none">Logout</a></li>
			</ul>
		</div>
	</div>
      <!-- end of menu -->
	  <div id="wrapper">																																																																											
		<div id="content_inside">
          <div id="main_block2">
          <img src="images/title14.gif" alt="" width="190" height="30" /><br /><br>	
		  
		  
		  <?php
				include('db.php');
				
					$result = mysql_query("SELECT * FROM users where Role not like 'Administrator'");
				
				echo'<table border="1" bgcolor="f3f1e9" cellpadding="0" cellspacing="0" width="100%">
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr>
							<td>'.$row['Username'].'</td>
							<td>'.$row['Password'].'</td>
							<td>'.$row['Role'].'</td>
							<td>'.$row['Realname'].'</td>
							<td>'.$row['Address'].'</td>
							<td>'.$row['Contact'].'</td>
							<td>'.$row['Email'].'</td>
							<td align="center"><a href="deleteuser.php?Username='.$row['Username'].'" style="color:red;" onclick = "return myFunction()">DELETE</a></td>
						</tr>';
				}
				echo '</table>';
				
				?>
		  
          </div>
          </div>
        </div>
		<script>
		function myFunction() {
			var del=confirm("Are you sure you want to delete this record?");
        if(del) {
            return true;
        }
		else {
            return false;
        }
		}
		</script>
        <!-- end of ocntent left -->
		<div id="footer">
		<div id="footer_inside">
			<ul class="footer_menu">
				<li><a href="admin.php">Products</a>|</li>
				<li><a href="users.php">Users</a>|</li>
				<li><a href="orders.php">Orders</a>|</li>
				<li><a href="search.php">Update Product</a></li>
			</ul><br /><br />
			<p>Copyright &copy;. All rights reserved.</p>																																																											
		</div>
	</div>
    <map name="Map">
       <area shape="rect" coords="78,45,312,119" href="admin.php">
       <area shape="poly" coords="670,87,719,78,727,123,677,130" href="admin.php">
       <area shape="poly" coords="776,124,818,152,793,189,751,160" href="index.php">
       <area shape="poly" coords="834,52,885,61,878,105,828,96" href="#">
	</map>
    </script>
  </body>
</html>
