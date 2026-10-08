<?php
	include("connect.php");
	
	$product_id=$_GET['product_id'];
	
	$q="delete from product_master where product_id='$product_id'";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:product_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>