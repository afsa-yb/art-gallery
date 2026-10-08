<?php
	include("connect.php");
	
	$artist_id=$_GET['artist_id'];
	
	$q="delete from artist_master where artist_id='$artist_id'";
	
	print($q);
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:artist_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>