<?php
	include("connect.php");
	
	$cart_id=$_GET['cart_id'];
	
	$q="delete from cart_master where cart_id='$cart_id'";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:cart_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>