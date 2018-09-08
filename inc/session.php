<?php 
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("LOCATION:login.php");
	}
?>