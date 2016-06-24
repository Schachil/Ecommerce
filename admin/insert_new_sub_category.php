<?php
include 'includes/inc.php';
if(isset($_POST['addsubcat']))
{
	$subcat_name=$_POST['subcat_name'];
	$insert_subcategory="INSERT INTO subcategories(subcat_title)VALUES('$subcat_name')";
	if(mysql_query($insert_subcategory))
	{
		echo "<script>alert('Category Successfully inserted')</script>";
	}
	else
	{
		echo "Error occured in inserting Category";
	}
}

?>
<!DOCTYPE HTML">
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css"rel="stylesheet"href="../css/bootstrap.min.css"/>
<link type="text/css"rel="stylesheet"href="styles.css"/>
</head>
<body>
    <div class="panel panel-default"style="margin-top: 10px;">
    	<div class="panel-heading">
    		<h3 style="text-align: center;">Insert New Sub Category</h3>
    	</div><!--End of panel heading-->
    	<div class="panel-body">
    		<form method="POST"action="index.php?insertsubcategory"class="form-inline">
    			<div class="form-group">
    				<label class="control-label">Sub Category Name</label>
    				<div style="text-align: center;">
    					<input type="text"name="subcat_name"class="form-control"size="50"/>
    					<input type="submit"name="addsubcat"class="btn btn-success"value="ADD"/>
    				</div>

    			</div><!--End of form group-->
    		</form>
    	</div><!--End of panel body-->
    </div><!--End of panel-->
</body>
</html>