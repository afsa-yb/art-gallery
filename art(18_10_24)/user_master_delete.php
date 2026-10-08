<?php
	include("connect.php");
	
	$user_id=$_GET['user_id'];
	
	$q="delete from user_master where user_id='$user_id'";
	
	print($q);
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:user_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>