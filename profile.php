<?php
include("inc/session.php");
include("inc/dbcon.php");
	//session_start();
	
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
			<?php include_once('inc/menu.php'); ?>
		</div>
		<div class="container">
	 	<div class="row">
	 		<div class="col-lg-12">
	 			<div class="panel panel-info"> 
	 			<div class="panel-heading"> 
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-user">&nbsp;&nbsp;</span>Patient Profile</h3> 
	 			<?php if(isset($msg)) echo $msg; ?></div>
	 			 <div class="panel-body">
		 			<form role="form" method="post" action="">
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Form Number" name="matric" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Full" name="name" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					   		<input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					   </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="y/m/d" name="dob" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					       <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Phone" name="phone" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="email" class="form-control"  placeholder="Email" name="email" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					       <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Nationality" name="nationality" value="nigeria" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Local Govt" name="local" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Blood Group" name="extra" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Name" name="status" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Phone" name="qualification" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Address" name="institution" disabled="">
					  </div>
					  <!--div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Service Year" name="service" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					       <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Address" name="address" disabled="">
					  </div-->					  
					  <div class="form-group col-lg-6">
					      <input type="password" class="form-control"  placeholder="Call Up Number" name="callup" disabled="">
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