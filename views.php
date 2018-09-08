<?php
	include("inc/session.php");
	include("inc/dbcon.php");
	$sql=mysqli_query($con,"SELECT * FROM register WHERE id='".$_SESSION['id']."' ") Or die("QNS");
	$c=mysqli_num_rows($sql);
	if($c == 1){
		$sn=1;
		$trow="<table style='width:90%;font-size:1.2em;' class='table table-striped table-hover table-bordered'><thead><tr><th>S/N</th><th>Matric Number</th><th>Name</th><th>Address</th><th>Gender</th><th>Date Of Birth</th><th>Marital Status</<th><th>Phone</th><th>State Of Origin</th><th>Email</th><th>Religion</th><th>Nationality</th><th>Local Govt</th><th>Extra Activities</th><th>Health Status</th><th>Qualification</th><th>Institution</th><th>Service</th><th>Department</th><th>School State</th><th>Call Up Number</th></tr></thead>";
	while($rs=mysqli_fetch_array($sql)){
		$id=$rs['id'];
			$trow.="<tbody><tr><td>".$sn."</td><td>".$rs['matric']."</td><td>".$rs['name']."</td><td>".$rs['address']."</td><td>".$rs['gender']."</td><td>".$rs['dob']."</td><td>".$rs['mstatus']."</td><td>".$rs['phone']."</td><td>".$rs['origin']."</td><td>".$rs['email']."</td><td>".$rs['religion']."</td><td>".$rs['nationality']."</td><td>".$rs['local']."</td><td>".$rs['extra']."</td><td>".$rs['status']."</td><td>".$rs['qualification']."</td><td>".$rs['institution']."</td><td>".$rs['service']."</td><td>".$rs['dept']."</td><td>".$rs['schoolstate']."</td><td>".$rs['callup']."</td></tr></tbody>";
			$sn++;
		}
		$trow.="</table>";
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="education,sport,html,php,JavaScript,technology">
	<meta name="author" content="Austin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheeet"> 
	<script src="js/respond.js"></script>
	<link rel="stylesheet" type="text/css" href="styl.css">
  
</head>
<body>
	<div id="wrapper" style="background: #fefefe;width: 100%;">
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
		
		 			<?php if(isset($trow)) echo $trow; ?>
			
		<div class="clear"></div>
		
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
</body>
</html>