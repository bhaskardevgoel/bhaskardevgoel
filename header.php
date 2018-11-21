<div class="head_4">
	<?php
	
		session_start();
		if(empty($_SESSION['username']))
		{
	?>
	<div><br>
		<ul>
			<li><a class="link_4" href="admin/index.php"><img src="image/admin.png" width="20px" height="20px">&nbsp;Admin</a></li>
			<li><a class="link_4" href="signup.php"><img src="image/signup.png" width="15px" height="15px">&nbsp;Register</a></li>
			<li><a class="link_4"  href="signin.php"><img src="image/login.png" width="15px" height="15px">&nbsp;Login</a></li>
		</ul>
	</div><br><br><br>
	<?php
		}
		else 
		{
	?>
	<div><br>
	<p><p class="uname link_3"><img src="image/user.png" width="20px" height="20px">&nbsp;&nbsp;<?php echo $_SESSION['username']?></p></p>
		<ul>
			<li><a class="link_4_1"  href="logout.php"><img src="image/logout.png" width="15px" height="15px">&nbsp;Logout</a></li>
			<li><a  class="link_4" href="my_account.php"><img src="image/my_account.png" width="15px" height="15px">&nbsp;My Account</a></li>
		</ul>
	</div><br><br><br>
	<?php
		}
	?>
	<a href="index.php" class="head"><b>SLIET</b> Longowal</a>														
	<a class="link" href="index.php" align="right">Home</a>	
	<a class="link" href="http://sliet.ac.in/" target="_blank">SLIETofficial</a>	
	<a class="link" href="aboutus.php">About us</a>
	<br><br>
	<hr>
</div><br><br><br><br><br><br>