 <div class="panel panel-default"style="margin-top: 10px;">
         	<div class="panel-heading">
         		<h3 style="text-align: center;">View All Products</h3>
         	</div><!--End of panel haeding-->
         	<div class="panel-body">
         		<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Product Id</th>
							<th>Product Name</th>
							<th>Product Description</th>
							<th>product Image</th>
							<th>Product Price</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
							<?php
			include'includes/inc.php';
			$retrieveproducts="SELECT * FROM products";
			$productquery=mysql_query($retrieveproducts);
			while($productrow=mysql_fetch_array($productquery))
			{
				$product_id=$productrow['product_id'];
				$product_name=$productrow['product_name'];
				$product_price=$productrow['price'];
				$product_desc=$productrow['product_desc'];
				$product_image=$productrow['product_image'];
							
							?>
					<tbody>
						<tr>
							<td><?php echo $product_id;?></td>
							<td><?php echo $product_name; ?></td>
							<td><?php echo $product_price;  ?></td>
							<td><?php echo $product_desc;  ?></td>
							<td><img src="newimages/<?php echo $product_image; ?>"height="60"width="60"></td>         
							<td><a href="index.php?edit_product=<?php echo $product_id; ?>">Edit</a></td>
							<td><a href="delete_post.php?delete_product=<?php echo $product_id; ?>">Delete</a></td>
							<?php } ?>
						</tr>
					</tbody>
				</table>
         	</div><!--End of panel body-->
         </div><!--End of panel-->