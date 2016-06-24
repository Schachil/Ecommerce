<?php
session_start();
include 'includes/inc.php';
include 'functions.php';
?>
<!DOCTYPE HTML>
<html lang="eng">
<head>
<title>Moi University Online Market Platform</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css"/>
</head>
<body>
<?php

include 'header.php';

?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
		<div class="panel"id="sidebar"style="margin-top: -30px;border: 0px;">
		<div class="title">
			<h2 style="text-decoration: underline;margin: -3px;">Categories</h2>
		</div>
		<?php
           $select_cats="SELECT * FROM categories";
			$results=mysql_query($select_cats);
			while($row=mysql_fetch_array($results))
			{
				$cat_id=$row['cat_id'];
				$cat_name=$row['cat_name'];
				echo"<li><a href='index.php?cats=$cat_id'>$cat_name</a><li>
				";
				
			}
				?>
		<div class="title">
			<h2 style="text-decoration: underline;margin: -3px;">Sub Categories</h2>
		</div>
		<?php
           $select_subcats="SELECT * FROM subcategories ORDER BY subcat_title";
			$results2=mysql_query($select_subcats);
			while($row2=mysql_fetch_array($results2))
			{
				$subcat_id=$row2['subcat_id'];
				$subcat_name=$row2['subcat_title'];
				echo"<li><a href='index.php?subcats=$subcat_id'>$subcat_name</a><li>
				";
				
			}
				?>
			</div><!--End of panel-->
		</div><!--end of col-->
		<div class="col-sm-9">
		<?php
		cart();
		?>
		<div id="cart">
			<h3>Welcome Guest! <span style="color: yellow;">Shopping Cart</span>-Total Items:<?php totalItems(); ?> Total Price:<?php totalPrice();  ?><a href="cart.php">Go To Cart</a></h3>
		</div>
	<div class="panel">
	<form method="POST"action="cart.php"enctype="multipart/form-data">
		<table class="table table-striped">
			<tr>
				<th>REMOVE </th>
				<th>PRODUCT(s)</th>
				<th>QUANTITY</th>
				<th>PRICE</th>
			</tr>
			<?php
	$total=0;
	$ip=getIp();
	$selectcat_id="SELECT * FROM cart WHERE ip_add='$ip'";
	$result=mysql_query($selectcat_id);
	while($row=mysql_fetch_array($result))
	{
		$product_id=$row['p_id'];
		$select_price="SELECT * FROM products WHERE product_id='$product_id'";
		$result2=mysql_query($select_price);
		while($product_row=mysql_fetch_array($result2))
		{
			$pro_price=array($product_row['price']);
			$value=array_sum($pro_price);
			$product_title=$product_row['product_name'];
			$product_image=$product_row['product_image'];
			$single_price=$product_row['price'];
			$total+=$value;
?>
            <tr>
            <td><input type="checkbox"name="remove[]"value="<?php echo $product_id; ?>"/></td>
            <td><?php echo $product_title; ?><br /><img src="admin/newimages/<?php echo $product_image; ?>"width="60"height="60"/></td>
            <td><input type="text"name="quantity"</td>
     
            <td>Ksh. <?php echo $single_price; ?></td>
			</tr>
			<?php }} ?>
			<tr style="font-size: 20px;">
				<td></td>
				<td style="font-weight: bolder;"><?php totalItems();?> Items</td>
				<td></td>
				<td style="font-weight: bolder;">Ksh. <?php echo $total;  ?></td>
			</tr>
			<tr style="font-size: 17px;">
				<td colspan="2"><input type="submit"name="update_cart"value="Update Cart"class="btn btn-warning"/></td>
				<td style="margin-right: 30px;"><input type="submit"name="continue"value="Continue Shopping"class="btn btn-primary"/></td>
				<td style="text-align: right;"><a href="checkout.php"class="btn btn-success">Checkout</a></td>
			</tr>
		</table>
		</form>
		<?php
		$ip=getIp();
		if(isset($_POST['update_cart']))
		{
			foreach($_POST['remove'] as $remove_id)
			{
				$delete="DELETE FROM cart WHERE p_id='$remove_id' AND ip_add='$ip'";
				$delete_query=mysql_query($delete);
				if($delete_query)
				{
					echo "<script>window.open('cart.php','_self')</script>";
				}
			}
		}
		else if(isset($_POST['continue']))
		{
			echo "<script>window.open('index.php','_self')</script>";
		}
		
		?>
	</div><!--End of panel-->
		</div><!--end of col-->
	</div><!--End of row-->
</div><!--End of container-->
<script type="text/javascript"src="jquery-1.11.1.min.js"></script>
<script type="text/javascript"src="js/bootstrap.min.js"></script>
<script type="text/javascript"src="me.js"></script>
</body>
</html>