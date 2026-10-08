<?php
	include("connect.php");
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$usertype=$_POST["usertype"];
	
	if($usertype=="admin")
	{
		$q="select * from admin_master where admin_email='$username' and admin_password='$password'";
				
		$res=mysqli_query($cn,$q);
		
		if($row=mysqli_fetch_array($res))
		{
			session_start();
			$_SESSION["username"]=$username;
			$_SESSION["password"]=$password;
			header("location:admin_home.php");
		}
		else
		{
			echo"Invalid username or password...";
		}
	}
	elseif($usertype=="user")
	{
		$q="select * from user_master where user_email='$username' and user_password='$password'";
		$res=mysqli_query($cn,$q);
		
		if($row=mysqli_fetch_array($res))
		{
			session_start();
			$_SESSION["r_username"]=$username;
			$_SESSION["r_password"]=$password;
			header("location:ruser.php");
		}
		else
		{
			echo"Invalid username or password...";
		}
	}
	else
	{
		echo"Select User Type...";
	}
?>