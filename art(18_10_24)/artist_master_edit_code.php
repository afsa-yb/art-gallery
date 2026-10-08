<?php
	include("connect.php");
	
	$artist_id=$_POST["artist_id"];
	$artist_name=$_POST["artist_name"];
	$artist_description=$_POST["artist_description"];
	$artist_address=$_POST["artist_address"];
	$artist_city=$_POST["artist_city"];
	$artist_pincode=$_POST["artist_pincode"];
	$artist_mobile=$_POST["artist_mobile"];
	$artist_email=$_POST["artist_email"];
	$artist_password=$_POST["artist_password"];
	$cat_id=$_POST["cat_id"];
	
	$q="update artist_master set artist_name='$artist_name',artist_description='$artist_description',artist_address='$artist_address',artist_city='$artist_city',artist_pincode='$artist_pincode',artist_mobile='$artist_mobile',artist_email='$artist_email',artist_password='$artist_password',cat_id='$cat_id' where artist_id='$artist_id' ";

	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:artist_master_view.php");
	}
	else
	{
		echo"Not Updated...";
	}
?>