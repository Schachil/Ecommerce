<?php
			if(isset($_GET['details']))
			{
			$details=$_GET['details'];
			$retrieveproducts="SELECT * FROM products WHERE product_id='$details'";
			$productquery=mysql_query($retrieveproducts);
			while($productrow=mysql_fetch_array($productquery))
			{
				$product_id=$productrow['product_id'];
				$product_name=$productrow['product_name'];
				$product_price=$productrow['price'];
				$product_desc=$productrow['product_desc'];
				$product_image=$productrow['product_image'];
				echo "
				<h3 class='caption'style='text-align:center;'>$product_name</h3>
				<div class='img-thumbnail'><center><img src='admin/newimages/$product_image'/width='500px'height='400px'></center>
				<span style='color:white;background-color:red;padding:5px;margin-right:10px;'class='badge pull-right'>Ksh. $product_price</span>
				<a href='index.php?add_cart=$product_id'class='btn btn-success'style='margin-top:10px;'>ADD to Cart</a>
				<prev>$product_desc<prev>
				</div>
				";
			}
			}
			
			?>