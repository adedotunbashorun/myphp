<?php if(!isset($_SESSION['aid']))
			echo "<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='login.php'>Login</a></li>
				<!--li><a href='views.php'>View Corpers</a></li-->
				<li><a href='about.php'>About Us</a></li>
				<li><a href='admin.php'><i class='fa fa-dashboard'>ADMIN</i></a></li>
			</ul>";
			else
			echo "<ul>
				<li><a href='index.php'>home</a></li>
				<li><a href='register.php'>Register Patient</a></li>
				<li><a href='view.php'>View Patient</a></li>
				<li><a href='course.php'>Add Diagnosis</a></li>
				<li><a href='viewc.php'>View Diagnosis</a></li>
				<li><a href='post.php'>Diagnos Patient</a></li>
				<li><a href='vpost.php'>View Patient Diagnosis</a></li>
				<li><a href='about.php'>About</a></li>
				
				<li><a href='logout.php'>Logout</a></li>
			</ul>";	
		
		?>