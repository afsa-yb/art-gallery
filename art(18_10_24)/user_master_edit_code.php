<?php
	include("connect.php");
	
	$user_id=$_POST['user_id'];
	$user_name=$_POST["user_name"];
	$user_address=$_POST["user_address"];
	$user_city=$_POST["user_city"];
	$user_pincode=$_POST["user_pincode"];
	$user_email=$_POST["user_email"];
	$user_password=$_POST["user_password"];
	$user_mobile=$_POST["user_mobile"];
	
	$q="update user_master set user_name='$user_name',user_address='$user_address',user_city='$user_city',user_pincode='$user_pincode',user_email='$user_email',user_password='$user_password',user_mobile='$user_mobile' where user_id='$user_id'";

	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:user_master_view.php");
	}
	else
	{
		echo"Not Updated...";
	}
?>