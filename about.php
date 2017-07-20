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
			<img src="images/header2.jpg" alt="setalpm" width="999" height="222" border="0" usemap="#Map" /><br />																																										
			<ul id="menu">
				<li><a href="index.php" class="but1" style="text-decoration:none">Home</a></li>
				<li><a href="gallery.php" target="_parent" class="but2" style="text-decoration:none">Gallery</a></li>
				<li><a href="#" class="but4_active" style="text-decoration:none">About Us</a></li>
				<li><a href="services.php" target="_parent" class="but3" style="text-decoration:none">Services</a></li>
				<li><a href="products.php" target="_parent" class="but5" style="text-decoration:none">My Account</a></li>
			</ul>
		</div>
	</div>
      <!-- end of menu -->
      <div id="wrapper">																																																																											
		<div id="content_inside">
          <div id="sidebar">
				<img src="images/title1.gif" alt="" width="174" height="30" /><br />																																																																		
				<ul id="list">
					<li class="color"><a href="products.php">Living Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="products.php">Dining Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="products.php">Bed Room&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
					<li class="color"><a href="products.php">Outdoor Furniture&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					<li><a style="text-decoration:none">&nbsp;</a></li>
				</ul>
			</div>
			<div id="main_block">
				<img src="images/title5.gif" alt="" width="195" height="30" /><br /><br>
				<img src="images/title5_1.gif" alt="" width="195" height="30" /><br />
				<font color="#111100" face="Arial"><br><h3 align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Kemudi Yakin Furniture Store sells all kinds of branded furniture. Be it new, rejected, used, or extra stock of product from others factory and hotel. It is a quality furniture store and prepared to provide the services that best suit your needs. Since the store, Kedai Perabot Kemudi Yakin begins the business; the ways of how the people in Senawang, Seremban bought their furniture has improved because the store sells quality furniture with an affordable price. The customer demands have increased due to the excellent in services and quality of the product the store provide. Since then, Kemudi Yakin Furniture Store have grown into one of the leading furniture companies located in Senawang, Seremban. By offering unique and stylish furniture at affordable prices, attractive packages, superior service and fast delivery, Kedai Perabot Kemudi Yakin sure has become a favourite furniture store for residents in the vicinity. Every day, the customers will discover new exclusive, fashionable and good quality furniture. Each week, the store will be updating its inventory, offering the latest looks in fashion and home office furniture at affordable prices. In addition, the store sales associates who are well trained, knowledgeable and friendly will create comfort for the customers. The comfortable showroom will also provide a new and perfect image of the displayed products to the customers. Kemudi Yakin Furniture store will also provide fast and express delivery services to ensure that the customers can receive their furniture in a short time.</h3>
				<br>
		  
			<br><img src="images/title5.1.gif" alt="" width="195" height="30" /><br />
				<h3>&nbsp;&nbsp;&nbsp;&nbsp;Kemudi Yakin Sdn Bhd</h3>
		  
			<br><img src="images/title5.3.gif" alt="" width="195" height="30" /><br />
			    <h3>&nbsp;&nbsp;&nbsp;&nbsp;06-6794563</h3></font>  
				
			<br><img src="images/title5.2.gif" alt="" width="195" height="30" /><br />
				<h3>&nbsp;&nbsp;&nbsp;&nbsp;No 1, 46, 47, 48 &amp; 50, Jalan Tampin,<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Taman Bukit Emas,<br>
				&nbsp;&nbsp;&nbsp;&nbsp;70450 Seremban,<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Negeri Sembilan.</h3>
			<br><img src="images/map.png"><br>
			 
        </div>

		</div>
	<div id="footer">
		<div id="footer_inside">
			<ul class="footer_menu">
				<li><a href="index.php">Home</a>|</li>
				<li><a href="gallery.php">Gallery</a>|</li>
				<li><a href="about.php">About Us</a>|</li>
				<li><a href="services.php">Services</a>|</li>
				<li><a href="products.php">My Account</a></li>
			</ul><br /><br />
			<p>Copyright &copy;. All rights reserved.</p>																																																											
		</div>
	</div>
    <map name="Map">
       <area shape="rect" coords="78,45,312,119" href="index.php">
       <area shape="poly" coords="670,87,719,78,727,123,677,130" href="#">
       <area shape="poly" coords="776,124,818,152,793,189,751,160" href="#">
       <area shape="poly" coords="834,52,885,61,878,105,828,96" href="#">
	</map>
    </script>
  </body>
</html>