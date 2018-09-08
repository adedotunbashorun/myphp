<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styl.css">
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="education,sport,html,php,JavaScript,technology">
	<meta name="author" content="Austin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheeet"> 
	<script src="js/respond.js"></script>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<span class="p" style="text-transform: uppercase;padding-left: 10px;color:#f1f1f1;font-size: 1.4em;font-family: Time New Roman;"><img src="images/pre.gif" alt="logo" title="logo" />PATIENT INFOMATION SYSTEM</span>
			<ul>
				<li><a href="register.php">Signup</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</header>
		<div id="menu">
			<?php if(isset($_SESSION['aid'])){include_once('inc/menu1.php');} else{include_once("inc/menu.php");} ?>
		</div>
		<div id="top">
			<h1>WELCOME TO PATIENT MANAGEMENT INFORMATION SYSTEM</h1>
			<h1>A  place of -------------</h1>
			<div id="center">
				<a href="#" >Learn more........</a>
			</div>
		</div>
		<div id="top1">
			<div id="c">
				<p class="d"><img src="images/my.jpg" alt="any" class="circle" title="Our Service"></p>
				<p><h3 style="color:#fefefe;">About Us</h3></p>
				<div id="center">
					<a href="#">Learn more........</a>
				</div>
			</div>
			<div id="c">
				<p class="d"><img src="images/my.jpg" alt="any" class="circle" title="About Us"></p>
				<p><h3 style="color:#fefefe;">Add Patient</h3></p>
				<div id="center">
					<a href="#">Learn more........</a>
				</div>
			</div>
			<div id="c">
				<p class="d"><img src="images/my.jpg" alt="any" class="circle" title="Our Portfolio"></p>
				<p><h3 style="color:#fefefe;">View Patient</h3></p>
				<div id="center">
					<a href="#">Learn more........</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
</body>
</html>