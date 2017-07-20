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
		<script type="text/javascript">
			function myFunction(){
				alert("Record existed");
			}
		</script>
  </head>
  <body>
  <div id="header">																																																																								
		<div id="header_inside">
			<img src="images/header3.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="#" class="but1_active" style="text-decoration:none">Products</a></li>
				<li><a href="users.php" class="but2" style="text-decoration:none">Users</a></li>
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
				<div class="lg-container">
				<h2 align="center">Add New Product</h2><br>
				<?php
	include('db.php');
	$id = $_POST['id'];
	$prod = $_POST['prod'];
	$desc = $_POST['desc'];
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	
	
	$sql = "INSERT INTO products (ID,Product,Description,Category,Price)
	VALUES('$id','$prod','$desc','$cat','$price')";
	
	$query = mysql_query($sql) or die ("<script type='text/javascript'>
				alert('Record existed');
	</script><br><a href='admin.php' style='color:black;'>Back to previous page</a>");
	$row = mysql_fetch_assoc($query);
	
	header("location: admin.php");
	exit();
?>
				
		  </div>
</div>
        </div>
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
       <area shape="poly" coords="670,87,719,78,727,123,677,130" href="#">
       <area shape="poly" coords="776,124,818,152,793,189,751,160" href="index.php">
       <area shape="poly" coords="834,52,885,61,878,105,828,96" href="#">
	</map>
    </script>
  </body>
</html>
