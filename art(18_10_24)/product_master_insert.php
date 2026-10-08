<?php
	include("connect.php");
	
	$product_name=$_POST["product_name"];
	$product_description=$_POST["product_description"];
	$product_photo="images/".$_FILES['product_photo']['name'];
	move_uploaded_file($_FILES['product_photo']['tmp_name'],$product_photo);
	$product_mfg_date=$_POST["product_mfg_date"];
	$product_price=$_POST["product_price"];
	
	$artist_id=$_POST["artist_id"];
	$cat_id=$_POST['cat_id'];
	$sub_cat_id=$_POST['sub_cat_id'];
	
	$q="insert into product_master(product_name,product_description,product_photo,product_mfg_date,product_price,artist_id,cat_id,sub_cat_id)values('$product_name','$product_description','$product_photo','$product_mfg_date','$product_price',$artist_id,$cat_id,$sub_cat_id)";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		echo"Inserted..."; 
	}
	else
	{
		echo"Not Inserted...";
	}
?>