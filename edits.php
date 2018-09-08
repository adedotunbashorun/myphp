<?php
	include("inc/auth.php");
	include("inc/dbcon.php");
	$weeklink="";
	//print_r( $_SERVER);
	$msg="";
	if(isset($_GET['id']))
	{
		if(is_nan($_GET['id']))
		{
			header("LOCATION:.php");
		}
		else
		{
			$getid =$_GET['id'];
			$sql=mysqli_query($con,"SELECT * FROM register WHERE id='$getid'") OR die("QNS");
			$c=mysqli_num_rows($sql);
			if($c == 1){
				$rs=mysqli_fetch_array($sql);
				$id=$rs['id'];
				if(isset($_POST["submit"])){
		$mat=$_POST['matric'];
		$name=$_POST['name'];	
		$add=$_POST['address'];
		$gen=$_POST['gender'];	
		$dob=$_POST['dob'];
		$ms=$_POST['mstatus'];	
		$pn=$_POST['phone'];
		$or=$_POST['origin'];	
		$em=$_POST['email'];
		$re=$_POST['religion'];	
		$nat=$_POST['nationality'];
		$local=$_POST['local'];	
		$ext=$_POST['extra'];	
		$hs=$_POST['status'];
		$qua=$_POST['qualification'];	
		$ins=$_POST['institution'];
		$ser=$_POST['service'];	
		//$dept=$_POST['dept'];
		//$sch=$_POST['schoolstate'];
		//$call=$_POST['callup'];
		$sql="UPDATE `register` SET `matric`='$mat',`name`='$name',`address`='$add',`gender`='$gen',`dob`='$dob',`mstatus`='$ms',`phone`='$pn',`origin`='$or',`email`='$em',`religion`='$re',`nationality`='$nat',`local`='$local',`extra`='$ext',`status`='$hs',`qualification`='$qua',`institution`='$ins',`service`='$ser' WHERE id='$id' ";
		$query=mysqli_query($con,$sql) OR die("QNS");
		header("refresh:2;view.php");
	}
				}
			}
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
	 		<div class="col-lg-12">
	 			<div class="panel panel-info"> 
	 			<div class="panel-heading"> 
	 				<h3 class="panel-title"><span class="glyphicon glyphicon-user">&nbsp;&nbsp;</span>Edit Patient</h3> 
	 			<?php if(isset($msg)) echo $msg; ?></div>
	 			 <div class="panel-body">
		 			<form role="form" method="post" action="">
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Form Number" name="matric">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Full" name="name">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Address" name="address">
					  </div>
					  <div class="form-group col-lg-6">
					      <select name="gender" class="form-control">
					      		<option value>---select---</option>
					      		<option value="1">Male</option>
					      		<option value="2">Female</option>
					      </select>
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="y/m/d" name="dob">
					  </div>
					  <div class="form-group col-lg-6">
					      <select class="form-control" name="mstatus">
					      		<option >--Marital Status---</option>
					      		<option value="1">Single</option>
					      		<option value="2">Married</option>
					      		<option value="3">Divorced</option>
					      		<option value="4">Widow</option>
					      		<option value="5">Widower</option>
					      </select>
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Phone" name="phone">
					  </div>
					  <div class="form-group col-lg-6">
					     <?php echo populateSelect('states','origin','form-control', '---state of origin--', ''); ?>
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="email" class="form-control"  placeholder="Email" name="email">
					  </div>
					  <div class="form-group col-lg-6">
					      <select class="form-control" name="religion">
					      	<option>---religion</option>
					      	<option value="1">Muslim</option>
					      	<option value="2">Christian</option>
					      	<option value="3">Traditional</option>
					      	<option value="4">Others</option>
					      </select>
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Nationality" name="nationality" value="nigeria">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Local Govt" name="local">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Blood Group" name="extra">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Health Status" name="status">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Name" name="qualification">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Phone" name="institution">
					  </div>
					  <div class="form-group col-lg-6">
					      <input type="text" class="form-control"  placeholder="Next Of Kin Address" name="service">
					  </div>
					  <!--div class="form-group col-lg-6">
					      <?php echo populateSelect('department','dept','form-control', '---department--', ''); ?>
					  </div>
					  <div class="form-group col-lg-6">
					     <?php echo populateSelect('states','schoolstate','form-control', '---School State--', ''); ?>
					  </div>					  
					  <!--div class="form-group col-lg-6">
					      <input type="password" class="form-control"  placeholder="Call Up Number" name="callup">
					  </div-->
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