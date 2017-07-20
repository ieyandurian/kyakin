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
		  		  
		  <?php
/* include db connection file */
include("db.php");

/* update process */
if(isset($_POST['Update'])){
	$ID = $_POST['ID'];
	$Description = $_POST['Description'];
	$Price = $_POST['Price'];
	
	$sql = "UPDATE products SET
			Description = '$Description',
			Price = '$Price'
			WHERE ID = '$ID'";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Update success</h5>";
}
/* delete process */
if(isset($_POST['Delete'])){
	$ID = $_POST['ID'];
	$sql = "DELETE FROM products WHERE ID = '$ID'";
	$query = mysql_query($sql) or die ("Error: " . mysql_error());
	echo "<h5>Delete success</h5>";
}
echo "<br><a href='search.php' style='color:black;'>Back</a>";
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
				<li><a href="index.php">Products</a>|</li>
				<li><a href="gallery.php">Users</a>|</li>
				<li><a href="about.php">Orders</a>|</li>
				<li><a href="services.php">Update Product</a></li>
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