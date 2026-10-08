<?php
	include("connect.php");
	
	$feedback_id=$_GET['feedback_id'];
	
	$q="delete from feedback_master where feedback_id='$feedback_id'";
	
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		header("location:feedback_master_view.php");
	}
	else
	{
		echo"Not Deleted...";
	}
?>