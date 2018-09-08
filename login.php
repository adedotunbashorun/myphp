<?php
	session_start();
	include("inc/dbcon.php");
	if(isset($_POST["submit"])){
		//$f=$_POST["fname"];
		$u=$_POST["uname"];
		$p=$_POST["pword"];
		//$p=md5($p);
		$sql="SELECT * FROM register where matric='$u' and callup='$p'";
		$query=mysqli_query($con,$sql) OR die ("QNS");
		$count=mysqli_num_rows($query);
		if($count>=1){
			$rs=mysqli_fetch_array($query);
			$_SESSION['id']=$rs['id'];
			$_SESSION['un']=$rs['name'];
			$_SESSION['pn']=$rs['phone'];
			$_SESSION['ad']=$rs['address'];
			$_SESSION['gd']=$rs['gender'];
			$_SESSION['dob']=$rs['dob'];
			$_SESSION['ms']=$rs['mstatus'];
			$_SESSION['or']=$rs['origin'];
			$_SESSION['em']=$rs['email'];
			$_SESSION['re']=$rs['religion'];
			$_SESSION['nat']=$rs['nationality'];
			$_SESSION['loc']=$rs['local'];
			$_SESSION['ext']=$rs['extra'];
			$_SESSION['st']=$rs['status'];
			$_SESSION['qua']=$rs['qualification'];
			$_SESSION['ins']=$rs['institution'];
			$_SESSION['ser']=$rs['service'];
			$_SESSION['dept']=$rs['dept'];
			$_SESSION['sch']=$rs['schoolstate'];
			$_SESSION['call']=$rs['callup'];
			header('refresh:0; url=profile.php');
		}
		else {
			$msg="<span class='fail'>Login Failed!</span>";
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
		<title>Off-Campus</title>
		<style type="text/css">
			#log{
				width:40%;
				min-width: 300px;
				margin: 10% auto;
			}
			body{
				background: url(images/login-bg.jpg);
			}
			#wrapper{
			 width:100%;
			 margin:0 auto;
			 overflow:auto;
			}
			h2{
				margin: 0 auto;
				text-align: center;
				background: transparent;
				color: #fefefe;
				font-size: 1.8em;
			}
			input{
				display: block;
				padding: 10px; 
				border-radius:4px;
				border: medium none;
				border: 1px solid;
				border-color: #f4f4f4;
				width:80%;
				min-width: 100px;
				margin-left:3%;
				margin-top: 2%; 
			}
			label{
				display: block;
				padding: 10px; 
				text-transform: uppercase;
				width:80%;
				font-size: 1.2em;
				font-weight: bold;
				min-width: 100px;
				margin-left:3%;
				margin-top: 2%; 
			}
			.btn{
	display: block; 
	width:80%;
	min-width: 100px;
	text-align: center;
	text-transform: uppercase;
    font-family: "Oswald",sans-serif;
    font-weight: 500;
    display: block;
    color: #FFF;
    background-color: #325D88;
    border-color: transparent;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    padding:16px;
    font-size: 14px;
    border-radius: 4px;
    -moz-user-select: none;
}
			#form{
				width: 100%;
				min-width: 200px;
				margin: 1% auto;
				height: 300px;
				padding: 10px;
				background: #fefefe;
				text-transform: uppercase;
			}
			a{
				text-transform: uppercase;
				margin-left: 60%;
				text-decoration: none;
				font-size: 0.8em;
				font-weight: bold;
			}
		</style>
</head>
<body>
	<div id="wrapper">
		
		<div id="log">
		<h2>Corpers' Log In</h2>
		<div id="form">	
			<form method="post" action="">
				<label>username or email</label>
				<input type="text" name="uname" placeholder="username" />
				<label>password</label>	
				<input type="password" name="pword" placeholder="password" />	
				<center><input type="submit" name="submit" value="login" class="btn"></center>
			</form>
		</div>
		</div>
		
	</div>
</body>
</html>