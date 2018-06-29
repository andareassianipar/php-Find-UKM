<?php
include("config.php");
if(isset($_POST['login']))
{
	$username = secure($_POST['username'], $mysqli);
	$password =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			
			header("Location:../../index.php");
			exit;
		}
		else
		{
			echo"<script> location='../../login.php';alert('INVALID USERNAME OR PASSWORD');</script>";
		}
	}
}
?>