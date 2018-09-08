<?php
	include("inc/session.php");
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
			//DELETE FROM `suser` WHERE 1
			$sql=mysqli_query($con,"DELETE FROM reserve WHERE id='$getid'") OR die("QNS");
			header("Location:viewr.php");			
		}
	}	
	

?>
<!DOCTYPE html>
<html>
<head>
		<title>Off-Campus</title>
		<link rel="stylesheet" type="text/css" href="styl.css">
		<style type="text/css">
			
		</style>
		<script>
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<span class="p" style="text-transform: uppercase;padding-left: 10px;color:#f1f1f1;font-size: 1.4em;font-family: Time New Roman;"><img src="images/pre.gif" alt="logo" title="logo" />off campus accomodation reservation</span>
			<ul>
				<li><a href="register.php">Signup</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</header>
		<div id="menu">
			<?php include_once('inc/menu.php'); ?>
		</div>s
		<div id="log">
		<h2>Reservee lodge</h2>
		<div id="form">	
			<form method="post" action="">
				<label>fullname</label>
				<input type="text" name="uname" placeholder="username" class="input" value="<?php if(isset($_SESSION['n'])) echo $_SESSION['n'] ?>" disabled/>
				<label>phone </label>
				<input type="text" name="phone" placeholder="phone" class="input" value="<?php if(isset($p)) echo $p ?>" disabled />
				<label> lodge </label>
				<input type="text" name="phone" placeholder="phone" class="input" value="<?php if(isset($l)) echo $l ?>" disabled />
				<label> Room </label>
				<input type="text" name="phone" placeholder="phone" class="input" value="<?php if(isset($r)) echo $r ?>" disabled />
				<select class="input" name="status">
					<option>---select---</option>
					<option value="reserve">Reserve</option>
					<option value="payed">Payed</option>
				</select>
				<center style="margin: 2% auto;"><input type="submit" name="submit" value="UPDATE" class="btn"></center>
			</form>
			
		</div>
		</div>
		<footer id="footer"><span class="p" style="font-family: Pristina;font-size: 1.4em;color:#fefefe;"> Copyright &copy; 2016 Designed By:ABDULGENIU MUHAMMED Supervised By: MR TURAKI A.  </span></footer>
	</div>
	<script src="js/jquery.min.js"></script>
</body>
</html>