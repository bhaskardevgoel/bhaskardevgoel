<html>
<head>
<title>
Password Change(ADMIN)
</title>
<script type="text/javascript" src="js/javascript.js">
</script>
<link rel="stylesheet" href="../css/main.css" />
<link rel="icon" href="../image/change_password.png" />
</head>
<body class="back_2">
<form action="change_password_check.php" method="POST" name="change_password" onSubmit="return val_chk();">
<div class="container">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br>
<center><p class="head2"><p class="font">Change Password(ADMIN)</p></p></center>
<div >
<center><br><br><br><div class="account_change">
<table class="signin" width="350" height="300" bgcolor="white" >
<tr><td><br><pre class="input">    Old Password:</pre>
<center>
<input class="box_1" type="password" name="old_password" size="40" required>
<br><center>
</td></tr>
<tr><td><br><pre class="input">    New Password:</pre>
<center>
<input class="box_1" type="password" name="new_password" size="40" required>
<br><center>
</td></tr>
<tr><td><br><pre class="input">    Confrim New Password:</pre>
<center>
<input class="box_1" type="password" name="password_2" size="40" required>
<br><center>
</td></tr>
<tr><td><br><br>
<pre class="next" align="right"><input type="submit" class="button2" value="change"></pre>
</td></tr>
</table></div>
</center>
</center>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include('footer.php');
?>
</div>
</form>
</body>
</html>
