<?php

	include("connect.php");
	
	$order_date=date("d/m/Y");	

	
	$user_id=$_GET['user_id'];
	
	$q1="insert into order_master(user_id,product_id,order_qty,total_price)select user_id,product_id,qty,total_price from cart_master where user_id=$user_id";
	
	
	
	$i1=mysqli_query($cn,$q1);	
	
	$q2="delete from cart_master where user_id=$user_id";
	$i2=mysqli_query($cn,$q2);	

	$q3="update order_master set order_date='$order_date'";
	$i3=mysqli_query($cn,$q3);

	if($i3==1)
	{
		header("location:tnx.php");
	}
	else
	{
		print "error";
	}		
	
?>