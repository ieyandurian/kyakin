<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
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
			<img src="images/header.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="productsuser.php" class="but1" style="text-decoration:none">Products</a></li>
				<li><a href="cart.php" class="but2" style="text-decoration:none">Cart</a></li>
				<li><a href="#" class="but4_active" style="text-decoration:none">Customer Orders</a></li>
				<li><a href="update.php" class="but3" style="text-decoration:none">Update Info</a></li>
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
				<img src="images/title11.gif" alt="" width="190" height="30" /><br /><br>
          <h2>Customer Order List</h2>
		  
		  
		  <?php
				include('db.php');
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM orders where Customer = (select Realname from users)");
				}
				else
				{	
					$result = mysql_query("SELECT ID, Customer, Product, Count, TotalPrice, Address, OrderDate FROM orders where Customer like (select Realname from currentuser)");
				}
				
				echo'<table border="1" bgcolor="f3f1e9" cellpadding="0" cellspacing="0" width="100%">
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Count&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;Price (RM)&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>';
				while($row=mysql_fetch_assoc($result))
				{
					echo '<tr>
							<td>'.$row['Customer'].'</td>
							<td>'.$row['Product'].'</td>
							<td>'.$row['Count'].'</td>
							<td align="center">'.$row['TotalPrice'].'</td>
							<td>'.$row['Address'].'</td>
							<td>'.$row['OrderDate'].'</td>
						</tr>';
				}
				echo '</table><br><br><br>';
				
				?>
				<center><a href="invoice.php" class="button">Invoice</a></center>

		  </div>
		</div>
        </div>

        <!-- end of ocntent left -->
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
