<?php
	include("connect.php");
	
	$artist_name=$_POST["artist_name"];
	$artist_description=$_POST["artist_description"];
	$artist_address=$_POST["artist_address"];
	$artist_city=$_POST["artist_city"];
	$artist_pincode=$_POST["artist_pincode"];
	$artist_email=$_POST["artist_email"];
	$artist_password=$_POST["artist_password"];
	$artist_mobile=$_POST["artist_mobile"];
	$cat_id=$_POST["cat_id"];
	
	$q="insert into artist_master(artist_name,artist_description,artist_address,artist_city,artist_pincode,artist_email,artist_password,artist_mobile,cat_id)values('$artist_name','$artist_description','$artist_address','$artist_city','$artist_pincode','$artist_email','$artist_password','$artist_mobile',$cat_id)";
	
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