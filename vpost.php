<?php
include("inc/auth.php");
	//session_start();
	include("inc/dbcon.php");
	$sql=mysqli_query($con,"SELECT * FROM post") Or die("QNS");
	$c=mysqli_num_rows($sql);
	if($c>=1){
		$sn=1;
		$trow="<table style='width:90%;font-size:1.2em;' class='table table-striped table-hover table-bordered'><thead><tr><th>S/N</th><th>Name</th><th>Form No</th><th>Diagnosis</th></tr></thead>";
	while($rs=mysqli_fetch_array($sql)){
		$id=$rs['user_id'];
			
			$trow.="<tbody><tr><td>".$sn."</td><td>".$rs['name']."</td><td>".$rs['callupno']."</td><td>".$rs['areaposted']."</td></tr></tbody>";
			$sn++;
		}
		$trow.="</table>";
}
	
	
?>
<!DOCTYPE html>
<html>
<head>
		<title>prison</title>
		<link rel="stylesheet" type="text/css" href="styl.css">
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
				<li><a href="login.php">Login</a></li>
			</ul>
		</header>
		<div id="menu">
			<?php include_once('inc/menu1.php'); ?>
		</div>
		<div class="container">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<div class="panel panel-info"> 
	 			<div class="panel-heading"> 
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-user">&nbsp;&nbsp;</span>View Patient Diagnosis</h3> 
	 			<?php if(isset($msg)) echo $msg; ?></div>
	 			 <div class="panel-body">
		 			<?php if(isset($trow)) echo $trow; ?>
			</div><! --/col-lg-8 -->
			</div>
			</div>
		</div>
	</div>
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
</body>
</html>