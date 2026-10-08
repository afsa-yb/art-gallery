<?php
	include("connect.php");
	
	$sub_cat_id=$_POST['sub_cat_id'];
	$sub_cat_name=$_POST["sub_cat_name"];
	$sub_cat_description=$_POST["sub_cat_description"];
	$sub_cat_photo="images/".$_FILES['sub_cat_photo']['name'];
	move_uploaded_file($_FILES['sub_cat_photo']['tmp_name'],$sub_cat_photo);
	$cat_id=$_POST['cat_id'];
	
	$q="update sub_cat_master set sub_cat_name='$sub_cat_name',sub_cat_description='$sub_cat_description',sub_cat_photo='$sub_cat_photo',cat_id='$cat_id' where sub_cat_id='$sub_cat_id'";
	

	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:sub_cat_master_view.php");
	}
	else
	{
		echo"Not Updated...";
	}
?>