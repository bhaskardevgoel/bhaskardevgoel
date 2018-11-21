<?php
include('database.php');
?>
<html>
<head>
<title>
Welcome to SLIET Longowal
</title>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back">
<div class="container">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br><br>
<center><p class="font"><b>WELCOME </b><?php echo $_SESSION['username']?></p><br>
</center> <br><br><br><br>
<div class="account"><br>
<center><a href="change_username.php"><img src="image/change_username.png" height="80%" width="70%"></a><br>
<font size="5"> Change Username</font>
</div>
<div class="account"><br>
<center><a href="change_password.php"><img src="image/change_password.png" height="80%" width="70%"></a><br>
<font size="5"> Change Password</font>
</div>
<div class="account_delete"><br>
<center><a href="delete_account_confrim.php"><img src="image/delete_account.png" height="80%" width="70%"></a><br>
<font size="5">Delete Account</font>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include('footer.php');
?>
</div>
</body>
</html>