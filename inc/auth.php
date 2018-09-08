<?php 
	session_start();
	if(!isset($_SESSION['aid']))
	{
		header("LOCATION:admin.php");
	}
?>