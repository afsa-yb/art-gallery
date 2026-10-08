<?php
	include("connect.php");
	
	$cat_name=$_POST["cat_name"];
	$cat_description=$_POST["cat_description"];
	$cat_photo="images/".$_FILES['cat_photo']['name'];
	move_uploaded_file($_FILES['cat_photo']['tmp_name'],$cat_photo);
	
	$q="insert into cat_master(cat_name,cat_description,cat_photo)values('$cat_name','$cat_description','$cat_photo')";
	
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