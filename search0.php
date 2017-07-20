<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
	<link rel="stylesheet" href="themes/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
	<link id="scrollUpTheme" rel="stylesheet" href="css/themes/tab.css">
	<script src="dist/lib/jquery-1.11.1.min.js"></script>
    <script src="dist/jquery.scrollUp.min.js"></script>
	<script>

            // Parse URL Queries Method
            (function ($) {
                $.getQuery = function (query) {
                    query = query.replace(/[\[]/, '\\\[').replace(/[\]]/, '\\\]');
                    var expr = '[\\?&]' + query + '=([^&#]*)';
                    var regex = new RegExp(expr);
                    var results = regex.exec(window.location.href);
                    if (results !== null) {
                        return results[1];
                    } else {
                        return false;
                    }
                };
            })(jQuery);

            $(function () {

                // Change URIs
                $('.tab-switch').click(function () {
                    window.location = '?theme=tab';
                });

                // Set theme based on URI
                    $(function () {
                        $.scrollUp({
                            animation: 'slide',
                            activeOverlay: '#00FFFF'
                        });
                    });
                    $('#scrollUpTheme').attr('href', 'css/themes/tab.css?1.1');
                    $('.tab-switch').addClass('active');
                

            });

        </script>
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
  </head>
  <body>
  <div id="header">																																																																								
		<div id="header_inside">
			<img src="images/header3.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="admin.php" class="but1" style="text-decoration:none">Products</a></li>
				<li><a href="users.php" class="but2" style="text-decoration:none">Users</a></li>
				<li><a href="orders.php" class="but3" style="text-decoration:none">Orders</a></li>
				<li><a href="#" class="but4_active" style="text-decoration:none">Update Product</a></li>
				<li><a href="index.php" class="but5" style="text-decoration:none">Logout</a></li>
			</ul>
		</div>
	</div>
      <!-- end of menu -->
	  <div id="wrapper">																																																																											
		<div id="content_inside">
          
			<div id="main_block2">
			<div class="lg-container2">
          <h2>Searched Product</h2>
		  	<?php
/* includ db connection file*/
include("db.php");


$ID = $_POST['search'];

/* execute SQL statement */
$sql = "SELECT * FROM products 
	WHERE ID = '$ID'";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
$row = mysql_num_rows($query);
if($row == 0){
	echo "No record found";
	echo "<br><a href='search.php' style='color:black;'>Back</a>";
}
else{
	$r = mysql_fetch_assoc($query);
	$ID = $r['ID'];
	$Product = $r['Product'];
	$Description = $r['Description'];
	$Price = $r['Price'];
?>
<form name="form" method="post" action="process0.php"><br>
<center><font size="3"><table border="0" width="600">
<tr><td>Product ID:</td><td><input type="text" name="ID" value="<?php echo $ID; ?>" size="50" hidden><?php echo $ID; ?></td></tr>
<tr></tr>
<tr><td>Product Name:</td><td><?php echo $Product; ?></td></tr>
<tr></tr>
<tr><td>Product Description:</td><td><textarea name="Description" value="<?php echo $Description; ?>" style="width: 435px; height: 17px;"><?php echo $Description; ?></textarea></td></tr>
<tr><td colspan="2" align="right"><sub>*can be updated</sub></td></tr>
<tr></tr>
<tr><td>Product Price: RM</td><td><input type="text" name="Price" value="<?php echo $Price; ?>"  size="70" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" title="Please fill out this field with numeric value." ></td></tr>
<tr><td colspan="2" align="right"><sub>*can be updated</sub></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td colspan="2" align="center">
<input type="submit" name="Update" value="Update">
<input type="submit" name="Delete" value="Delete" onclick="return myFunction()">
<a href="search.php" style="color:black;">Back</a></td>
</table></font></center>
</form>
</body>
</html>
		  
          
 
        </div>
		</div>
		</div>
		</div>
        <!-- end of content right-->
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
<?php
}
mysql_close($bd);
?>