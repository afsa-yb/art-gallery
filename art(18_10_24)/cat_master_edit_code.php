<?php
	include("connect.php");
	
	$cat_id=$_POST['cat_id'];
	$cat_name=$_POST["cat_name"];
	$cat_description=$_POST["cat_description"];
	$cat_photo="images/".$_FILES['cat_photo']['name'];
	move_uploaded_file($_FILES['cat_photo']['tmp_name'],$cat_photo);
		
	$q="update cat_master set cat_name='$cat_name',cat_description='$cat_description',cat_photo='$cat_photo' where cat_id='$cat_id'";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:cat_master_view.php");
	}
	else
	{
		echo"Not Updated...";
	}
?>