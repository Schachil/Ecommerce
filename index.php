<?php
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
			<h3>Welcome Guest! <span style="color: yellow;font-size: 20px;">Shopping Cart</span>-Total Items:<?php totalItems(); ?> Total Price:Ksh.<?php totalPrice();  ?> <a href="cart.php">Go To Cart</a></h3>
		</div>
			<?php
			if(isset($_GET['subcats']))
			{
				include 'subcats.php';
			}
			if(isset($_GET['details']))
			{
				include 'details.php';
			}
			if(isset($_GET['all_products']))
			{
				include 'product.php';
			}
			if(isset($_GET['cats']))
			{
				include 'categorized_products.php';
			}
			if(!isset($_GET['cats']) && !isset($_GET['all_products']) && !isset($_GET['subcats']) && !isset($_GET['details']))
			{
				include 'product.php';
			}
			?>
		</div><!--end of col-->
	</div><!--End of row-->
</div><!--End of container-->
<script type="text/javascript"src="jquery-1.11.1.min.js"></script>
<script type="text/javascript"src="js/bootstrap.min.js"></script>
<script type="text/javascript"src="me.js"></script>
</body>
</html>