<?php
include("connect.php");

	$qty=$_POST['qty'];
	$product_id=$_POST['product_id'];
	$user_id=$_POST['user_id'];
	$product_price=$_POST['product_price'];

	
 
 
		  $q3="select * from cart_master where product_id=$product_id";
		  
		  $res3=mysqli_query($cn,$q3);
		  
		  if($row3=mysqli_num_rows($res3)>0)
		  {
			  $q4="select * from cart_master where product_id=$product_id";
			  $res4=mysqli_query($cn,$q4);
			  if($row4=mysqli_fetch_array($res4))
			  {
				  $old_qty=$row4['qty'];
				  
				  $new_qty=$old_qty+$qty;
				  
				  $new_total_price=$new_qty*$product_price;
				  
				  $q5="update cart_master set qty=$new_qty,total_price=$new_total_price where product_id=$product_id and user_id=$user_id";
				  $res5=mysqli_query($cn,$q5);
				  
				  if($res5==1)
				  {
					  header("location:cart_view.php");
				  }
			  }
			  
		  }
 
		  else
		  {
			 	$total_price=$qty*$product_price;
  
		  $q2="insert into cart_master(user_id,product_id,qty,total_price)values($user_id,$product_id,$qty,$total_price)"; 
		  
		  $i=mysqli_query($cn,$q2);
		  
		  if($i==1)
		  {
			header("location:cart_view.php");
		  }
		  else
		  {
			echo "Record not Inserted...";
		 
		  }
		  }
?>