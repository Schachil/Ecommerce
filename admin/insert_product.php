<?php
include 'includes/inc.php';

if(isset($_POST['insert']))
{

	$product_name=$_POST['product_name'];
	$product_cat=$_POST['product_cat'];
	$product_subcat=$_POST['product_subcat'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_image=$_FILES['product_image']['name'];
	$product_image_tmp=$_FILES['product_image']['tmp_name'];
	move_uploaded_file($product_image_tmp,"newimages/$product_image");
	$insert_product="INSERT INTO products(product_name,category_id,subcat_id,price,product_image,product_desc)VALUES('$product_name','$product_cat','$product_subcat','$product_price','$product_image','$product_desc')";
	if(mysql_query($insert_product))
	{
		echo "product successfully inserted";
	}
	else
	{
		echo "Error occured in submiting";
	}
	
}


?>
  			<div class="panel">
  				<div class="panel-heading btn btn-default btn-block">
  					<h3>INSERT YOUR PRODUCT</h3>
  				</div><!--End of panel heading-->
  				<div class="panel-body btn btn-default btn-block">
  					<form method="POST"action="index.php?insert_product"class="form-horizontal"role="form"enctype="multipart/form-data">
  				<div class="form-group">
  					<label for="product_name"class="control-label col-sm-3" >Product Name</label>
  					<div class="col-sm-9">
  						<input type="text"name="product_name"placeholder="Enter Name"class="form-control"/>
  					</div>
  				</div><!--end of form-group-->
  				<div class="form-group">
  					<label for="product_cat"class="control-label col-sm-3" >Product category</label>
  					<div class="col-sm-9">
  						<select name="product_cat"class="form-control">
  						<?php
  			$select_cats="SELECT * FROM categories";
			$results=mysql_query($select_cats);
			while($row=mysql_fetch_array($results))
			{
				$cat_id=$row['cat_id'];
				$cat_name=$row['cat_name'];
				echo"<option value='$cat_id'>$cat_name</option>
				";
				
			}?>
  						</select>
  					</div>
  				</div><!--end of form-group-->
  				<div class="form-group">
  					<label for="product_subcat"class="control-label col-sm-3" >Product Subcategory</label>
  					<div class="col-sm-9">
  						<select name="product_subcat"class="form-control">
  						<?php
  							$select_subcats="SELECT * FROM subcategories";
					$subcatresult=mysql_query($select_subcats);
					while($rowsubcats=mysql_fetch_array($subcatresult))
					{
						$subcat_id=$rowsubcats['subcat_id'];
						echo "<option value='$subcat_id'>$rowsubcats[subcat_title]</option>";
					}?>
  						</select>
  					</div>
  				</div><!--end of form-group-->
  				<div class="form-group">
  					<label for="product_price"class="control-label col-sm-3" >Product Price</label>
  					<div class="col-sm-9">
  						<input type="text"name="product_price"placeholder="Enter product price"class="form-control"/>
  					</div>
  				</div><!--end of form-group-->
  				<div class="form-group">
  					<label for="product_image"class="control-label col-sm-3" >Product Image</label>
  					<div class="col-sm-9">
  						<input type="file"name="product_image"placeholder="Enter product Image"class="form-control"/>
  					</div>
  				</div><!--end of form-group-->
  				
  				<div class="form-group">
  					<label for="product_Description"class="control-label col-sm-3" >Product Description</label>
  					<div class="col-sm-9">
  						<textarea cols="20"rows="10"class="form-control"name="product_desc">
  							
  						</textarea>
  					</div>
  				</div><!--end of form-group-->
  				<input type="submit"name="insert"class="btn btn-success btn-lg pull-left"value="Insert"/>
  						<input type="reset"class="btn btn-danger btn-lg pull-right"value="Cancel"/>
  			</form>
  				</div><!--end of panel body-->
  			</div><!--End of panel-->