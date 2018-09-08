
		<?php if(!isset($_SESSION['id']))
			echo "<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='login.php'>Login</a></li>
				<!--li><a href='views.php'>View Corpers</a></li-->
				<li><a href='about.php'>About Us</a></li>
				<li><a href='admin.php'><i class='fa fa-dashboard'>ADMIN</i></a></li>
			</ul>";
			else
			echo "<ul>
				<li><a href='index.php'>Home</a></li>
				<!--li><a href='views.php'>View Corpers</a></li-->
				<li><a href='profile.php'>Patient Profile</a></li>
				<li><a href='viewcc.php'>View Diagnosis</a></li>
				<li><a href='about.php'>About</a></li>
				
				<li><a href='logout.php'>Logout</a></li>
			</ul>";	
		
		?>
