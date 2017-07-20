<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
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
				<li><a href="#" target="_parent" class="but2_active" style="text-decoration:none">Gallery</a></li>
				<li><a href="about.php" class="but4" style="text-decoration:none">About Us</a></li>
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
				<img src="images/title4.gif" alt="" width="195" height="30" /><br /><br>
			<center>
			<div id="sliderFrame">
			<div id="slider">
				<?php
					include('db.php');
					if(isset($_POST['filter']))
					{
						$filter = $_POST['filter'];
						$result = mysql_query("SELECT * FROM products where  Category ='$filter'");
					}
					else
					{
						$result = mysql_query("SELECT * FROM products");
					}
						while($row=mysql_fetch_assoc($result))
					{
						echo 
						'<img src="images/products/'.$row['ID'].'.jpg" width="100%" height="100%"/>';
					}
				?>
			</div>
			<!--Custom navigation buttons on both sides-->
			<div class="group1-Wrapper">
				<a onclick="imageSlider.previous()" class="group1-Prev"></a>
				<a onclick="imageSlider.next()" class="group1-Next"></a>
			</div>
			<!--nav bar-->
			<div style="text-align:center;padding:20px;z-index:20;">
				<a onclick="imageSlider.previous()" class="group2-Prev"></a>
				<a id="auto" onclick="switchAutoAdvance()" class="group">
				<a onclick="imageSlider.next()" class="group2-Next"></a>
			</div>
			</div>
			</center>
		<br><br><br><br><br>
		<hr>
		<br><br><br>
		  		  
		  <?php
				include('db.php');
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where  Category ='$filter'");
				}
				else
				{
					$result = mysql_query("SELECT * FROM products");
				}
				while($row=mysql_fetch_assoc($result))
				{
					echo 
					'<div class="news">
					<h4>'.$row['ID'].'</h4>
					<hr>
					<h3>'.$row['Product'].'</h3>
					<img src="images/products/'.$row['ID'].'.jpg" width="210" height="210" alt="image"/>
					<br><br>
					<div class="view">PRICE: RM '.$row['Price'].'</div>
					<a href="products.php" class="buy" align="right">Buy this Product</a>
					</div>';
				}
				?>
				</div>
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

	<script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>
  </body>
</html>