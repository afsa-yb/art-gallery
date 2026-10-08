<?php
	include("connect.php");
	
	$product_id=$_POST["product_id"];
	$product_name=$_POST["product_name"];
	$product_description=$_POST["product_description"];
	$product_photo="images/".$_FILES['product_photo']['name'];
	move_uploaded_file($_FILES['product_photo']['tmp_name'],$product_photo);
	$product_mfg_date=$_POST["product_mfg_date"];
	$product_price=$_POST["product_price"];
	$artist_id=$_POST["artist_id"];
	$cat_id=$_POST['cat_id'];
	$sub_cat_id=$_POST['sub_cat_id'];
	
	$q="update product_master set product_name='$product_name',product_description='$product_description',product_photo='$product_photo',product_mfg_date='$product_mfg_date',product_price='$product_price',artist_id='$artist_id',cat_id='$cat_id',sub_cat_id='$sub_cat_id' where product_id='$product_id'";

	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:product_master_view.php");
	}
	else
	{
		echo"Not Updated...";
	}
?>