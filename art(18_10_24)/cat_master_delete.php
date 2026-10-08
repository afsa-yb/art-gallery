<?php
	include("connect.php");
	
	$cat_id=$_GET['cat_id'];
	
	$q="delete from cat_master where cat_id='$cat_id'";
	
	print($q);
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:cat_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>