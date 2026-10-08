<?php
	include("connect.php");
	
	$user_name=$_POST["user_name"];
	$user_address=$_POST["user_address"];
	$user_city=$_POST["user_city"];
	$user_pincode=$_POST["user_pincode"];
	$user_email=$_POST["user_email"];
	$user_password=$_POST["user_password"];
	$user_mobile=$_POST["user_mobile"];
	
	$q="insert into user_master(user_name,user_address,user_city,user_pincode,user_email,user_password,user_mobile)values('$user_name','$user_address','$user_city','$user_pincode','$user_email','$user_password','$user_mobile')";

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