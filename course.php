<?php
include("inc/auth.php");
	//session_start();
	include("inc/dbcon.php");
	if(isset($_POST["submit"])){
		$name=$_POST['course'];	
		$call=$_POST['coursed'];
		//$state=$_POST['state'];
		$sql=mysqli_query($con,"INSERT INTO course(coursename, courseduration) VALUES ('$name','$call') ") OR die("QNS"); 
		//$sql=mysqli_query($con,"UPDATE register SET action=2 where callup='$call' ") OR die("QNS");
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
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-user">&nbsp;&nbsp;</span>Add Disease</h3> 
	 			<?php if(isset($msg)) echo $msg; ?></div>
	 			 <div class="panel-body">
		 			<form role="form" method="post" action="">
					  
					  <div class="form-group col-lg-12">
					      <input type="text" class="form-control"  placeholder="Add Disease" name="course" value="">
					  </div>
					  <div class="form-group col-lg-10">
					      <input type="text" class="form-control"  placeholder="Add Symptoms" name="coursed" value="">
					  </div>
					 
					  
					  
					 
					  <!--div class="form-group col-lg-6">
					      <input type="Password" class="form-control"  placeholder="Confirm Password" name="cpword">
					  </div-->
					  <!--div class="form-group col-lg-6">
					      <select class="form-control" name="location" >
						       	<?php if(isset($trow)) echo $trow; ?>
					        </select>
					  </div-->
					  <span class="pull-right"><button type="submit" class="btn btn-info" name="submit">Submit</button></span>
					</form>
			</div><! --/col-lg-8 -->
			</div>
			</div>
		</div>
	</div>
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
</body>
</html>