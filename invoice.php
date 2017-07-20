<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kemudi Yakin Furniture Store</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<?php
/* includ db connection file*/
include("db.php");
/* execute SQL statement */
	$currentuser = mysql_query("SELECT * FROM users where Realname like (select Realname from currentuser)");
	$urow=mysql_fetch_assoc($currentuser);
	$Realname = $urow['Realname'];
	$Contact = $urow['Contact'];
	$Address = $urow['Address'];
	$GrandTotalPrice = 0;
	
	$temp = mysql_query("SELECT ID, InvoiceDate, Product, Price, Count, TotalPrice FROM invoice");
	while($r=mysql_fetch_assoc($temp))
	{
		$ID = $r['ID'];
		$InvoiceDate = $r['InvoiceDate'];
	}
	$result = mysql_query("SELECT ID, InvoiceDate, Product, Price, Count, TotalPrice FROM invoice");
	?>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address" readonly><?php echo $Realname; ?>&#10;<?php echo $Address; ?>&#10;&#10;Phone: <?php echo $Contact; ?></textarea>

            <div id="logo">
              <img id="image" src="images/logokyakin.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title" readonly>Dear Sir/Madam,</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice No.</td>
                    <td><textarea readonly><?php echo $ID; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea id="date" readonly><?php echo $InvoiceDate; ?></textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th colspan="2">Product</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <?php 
			while($row=mysql_fetch_assoc($result))
				{
					$Product = $row['Product'];
					$Price = $row['Price'];
					$Count = $row['Count'];
					$TotalPrice = $row['TotalPrice'];
					$GrandTotalPrice = $GrandTotalPrice + $TotalPrice;
					echo '<tr class="item-row">
						<td colspan="2" class="item-name"><textarea readonly>'.$row['Product'].'</textarea></td>
						<td align="right"><textarea readonly>RM '.$row['Price'].'</textarea></td>
						<td align="right"><textarea readonly>'.$row['Count'].'</textarea></td>
						<td align="right"><span class="price">RM '.$row['TotalPrice'].'</span></td>
						</tr>';
				}
			?>

		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Subtotal</td>
		      <td class="total-value" align="right"><div id="subtotal">RM <?php echo number_format((float)$GrandTotalPrice, 2, '.', ''); ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value" align="right"><div id="total">RM <?php echo number_format((float)$GrandTotalPrice, 2, '.', ''); ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Amount Due</td>
		      <td class="total-value balance" align="right"><div class="due">RM <?php echo number_format((float)$GrandTotalPrice, 2, '.', ''); ?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
		<br><br><br><center><a href="invoice0.php" class="button" title="Install Foxit Reader To Save This File.">Print</a>&nbsp;<a href="customersorder.php" class="button">Back</a></center><br><br><br>
	</div>
	
</body>

</html>