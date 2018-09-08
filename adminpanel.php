<?php
	include("inc/auth.php");
	include("inc/dbcon.php");
	
?>
<!DOCTYPE html>
<html>
<head>
		
		<link rel="stylesheet" type="text/css" href="styl.css">
	<title>nysc</title>
		
</script>
<style type="text/css">
    	.add p{
				padding: 10px;
			}
			p a{
				text-transform: uppercase;
				text-decoration: none;
				font-size: 1.8em;
				color: #fefefe;
				font-weight: bold;
			}.p{
				padding: 10px;
				font-size: 50px;
			}
			.add{
				width:50%;
				margin: 0 auto;
				color: #fefefe;
			}
			.inn{
				width:45%;
				min-width: 200px;
				margin: 1%;
				float: left;
				height: 150px;
				background: #384452;
				text-align: center;
			}
    </style>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<span class="p" style="text-transform: uppercase;padding-left: 10px;color:#f1f1f1;font-size: 1.4em;font-family: Time New Roman;"><img src="images/pre.gif" alt="logo" title="logo" />PATIENT INFOMATION SYSTEM</span>
			
		</header>
		<div id="menu">
			<?php include_once('inc/menu1.php'); ?>
		</div>
		<div class="container-fluid">
	 	<div class="row">
	 		<div class="col-lg-12">
	 		<div class="add">
			 	<div class="inn">
			 	<span class="p fa fa-plus 5x"></span>
			 		<p><a href="register.php">add Patient</a></p>
			 	</div>
			 	<div class="inn">
			 	<span class="p glyphicon glyphicon-user "></span>
			 		<p><a href="view.php">view Patient</a></p>
			 	</div>
			 	<div class="inn">
			 	<span class="p glyphicon glyphicon-user "></span>
			 		<p><a href="course.php">Add Diagnosis</a></p>
			 	</div>
			 	<div class="inn">
			 	<span class="p glyphicon glyphicon-user glyphicon-share"></span>
			 		<p><a href="viewc.php">View Diagnosis</a></p>
			 	</div>
	 	
		 </div>
	</div>
	 </div></div>	
		</div>
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
	<script src="js/jquery.min.js"></script>
</body>
</html>