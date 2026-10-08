<?php
	include("connect.php");
	
	$order_quantity=$_POST["order_quantity"];
	$total_price=$_POST["total_price"];
	$order_date=$_POST["order_date"];
	$product_id=$_POST["product_id"];	
	
	$q="insert into order_master(order_quantity,total_price,order_date,product_id)values('$order_quantity','$total_price','$order_date','$product_id')";
	
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