<?php
	include("connect.php");
	
	$sub_cat_id=$_GET['sub_cat_id'];
	
	$q="delete from sub_cat_master where sub_cat_id='$sub_cat_id'";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:sub_cat_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>