<html>
<head>
<title>
Sign In
</title>
<script type="text/javascript" src="js/javascript.js">
</script>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back_2">
<form action="login_check.php" method="POST" name="login" onSubmit="return val_chk();">
<div class="container">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br>
<center><p class="head2"><p class="font">Please Sign In to Continue!</p></p></center>
<div >
<center><br><br><br>
<table class="signin" width="350" height="300" bgcolor="white" >
<tr height="15%">
<th><img src="image/loogo.png" width="150" height="150"></th></tr>
<tr><td><pre class="input">    Username:</pre><br>
<center>
<input class="box_1" type="text" name="username" placeholder="Username" size="40" maxlength="17" required><br>
</center>
</td></tr>
<tr><td><br><pre class="input">    password:</pre><br>
<center>
<input class="box_1" type="password" name="password" placeholder="Password" size="40" required>
<br><center>
</td></tr>
<tr><td>
<pre align="left"><br>     <a href="signup.php" class="link_2"><b>Sign Up</b></a></pre><br><br>
<pre class="next" align="right">				<input type="submit" class="button2" value="Proceed"></pre>
</td></tr>
</table>
</center>
</center>
</div><br><br><br><br><br><br><br><br>
<?php
include('footer.php');
?>
</div>
</form>
</body>
</html>
