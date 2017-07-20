<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
    <link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
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
				<li><a href="#" class="but1_active" style="text-decoration:none">Products</a></li>
				<li><a href="cart.php" class="but2" style="text-decoration:none">Cart</a></li>
				<li><a href="customersorder.php" class="but4" style="text-decoration:none">Customer Orders</a></li>
				<li><a href="update.php" class="but3" style="text-decoration:none">Update Info</a></li>
				<li><a href="index.php" class="but5" style="text-decoration:none">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="sliderFrame">
        <div id="slider">
            <a class="lazyImage" href="images/image-slider-1.jpg" title="Welcome to Our Furniture Store" /></a>
            <a class="lazyImage" href="images/image-slider-2.jpg" title="Selamat Datang ke Kedai Perabot Online Kami"></a>
            <a class="lazyImage" href="images/image-slider-3.jpg" title="欢迎来到我门的家具店"></a>
            <a class="lazyImage" href="images/image-slider-4.jpg" title="سلامت داتغ ككداي فرابوت كامي"></a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="images/thumb1.jpg" /></div>
                <div class="thumb-content"><p>Living Room</p>There's first love, and there's furniture love</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/thumb2.jpg" /></div>
                <div class="thumb-content"><p>Dining Room</p>Easy, breezy beautiful kitchen</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/thumb3.jpg" /></div>
                <div class="thumb-content"><p>Bedroom</p>Good life begins here</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images/thumb4.jpg" /></div>
                <div class="thumb-content"><p>Outdoor Furniture</p>Enjoy the fine things in life, from your own backyard</div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
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
			<div class="about">
					<img src="images/title2.gif" alt="" width="191" height="30" /><br />
					<p>Kemudi Yakin Furniture Store sells all kinds of branded furniture. Be it new, rejected, used, or extra stock of product from others factory and hotel. 
					   It is a quality furniture store and prepared to provide the services that best suit your needs.
					</p>
				</div>
				<div id="items">
				<img src="images/title00.gif" alt="" width="195" height="30" /><br />
				<img src="images/title01.gif" alt="" width="195" height="30" /><br />
				<div class="news">
					<h3></h3>
					<img src="images/newarrival/BR010.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 800.00</div>
					<a href="addtocart.php?ID=BR010" class="buy" align="right">Add to Cart</a>
					
					</div><div class="news">
					<h3></h3>
					<img src="images/newarrival/DR010.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 1200.00</div>
					<a href="addtocart.php?ID=DR010" class="buy" align="right">Add to Cart</a>
					
					</div><div class="news">
					<h3></h3>
					<img src="images/newarrival/LR010.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 600.00</div>
					<a href="addtocart.php?ID=LR010" class="buy" align="right">Add to Cart</a>
					
					</div>

				<img src="images/title00.gif" alt="" width="195" height="30" /><br />
				
				<img src="images/title02.gif" alt="" width="195" height="30" /><br />
		  		<div class="news">
					<h3></h3>
					<img src="images/bestseller/BR004.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 900.00</div>
					<a href="addtocart.php?ID=BR004" class="buy" align="right">Add to Cart</a>
					
					</div><div class="news">
					<h3></h3>
					<img src="images/bestseller/DR007.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 1200.00</div>
					<a href="addtocart.php?ID=DR007" class="buy" align="right">Add to Cart</a>
					
					</div><div class="news">
					<h3></h3>
					<img src="images/bestseller/LR005.jpg" width="210" height="210" alt="image">
					<br><br><div class="view">PRICE: RM 480.00</div>
					<a href="addtocart.php?ID=LR005" class="buy" align="right">Add to Cart</a>
					
					</div>
				
			</div>
          </div>
        </div>
		</div>
		<img src="images/title00.gif" alt="" width="195" height="30" /><br />
		<img src="images/title00.gif" alt="" width="195" height="30" /><br />
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
       <area shape="poly" coords="670,87,719,78,727,123,677,130" href="#">
       <area shape="poly" coords="776,124,818,152,793,189,751,160" href="index.php">
       <area shape="poly" coords="834,52,885,61,878,105,828,96" href="cart.php">
	</map>
    </script>
  </body>
</html>