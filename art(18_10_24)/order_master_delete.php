<?php
	include("connect.php");
	
	$order_id=$_GET['order_id'];
	
	$q="delete from order_master where order_id='$order_id'";
	
	print($q);
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:order_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>