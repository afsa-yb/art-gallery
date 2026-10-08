<?php
	include("connect.php");
	
	$feedback_msg=$_POST["feedback_msg"];
	$feedback_date=date("d/m/Y");
	$user_id=$_POST['user_id'];
	
	$q="insert into feedback_master(feedback_msg,feedback_date,user_id)values('$feedback_msg','$feedback_date',$user_id)";
	
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
