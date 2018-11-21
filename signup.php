<html>
<head>
<title>
Sign up
</title>
<script type="text/javascript" src="js/jS.js">
</script>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back_2">
<form action="signup_input.php" method="post" name="signup" onsubmit="return val_chk_signup();" enctype="multipart/form-data">
<div class="container_2">
	<?php
	include('header.php');
	?>
<div class="head_3"><br><br>
		<center><p class="head2"><pre class="font">Please Sign up here!</pre><br>It's completely free and always will be!</p><center><br><br><br><br>
	<center>
	<table class="signup" width="550" height="auto">
	<tr><td width="40%">
	<pre class="input">Name:</pre><br>
	<input type="text" class="box_1" placeholder="	First Name" name="first_name" size="35" required> 		<input type="text" name="last_name" class="box_1" placeholder="	Last Name" size="35" required><br><br>
	<pre class="input">Choose your username:</pre><br>
	<input type="text" class="box_1" name="username"  placeholder="	abcABC" size="76" required><br><br>
	<pre class="input">Create a Password:</pre><br>
	<input type="password" name="password" class="box_1" size="76" id="pass" required><br><br>
	<pre class="input">Confrim your Password:</pre><br>
	<input type="password" name="password_2"class="box_1" size="76" id="confirm_pass" onmouseout="con()" required>&emsp;<b><span id="s"></span></b><br><br>
	<pre class="input">Birthday:</pre><br>
	<select name="month">
	<option><font color="white">Month</font></option>
	<option><font color="white">Jan</font></option>
	<option><font color="white">Feb</font></option>
	<option><font color="white">Mar</font></option>
	<option><font color="white">April</font></option>
	<option><font color="white">May</font></option>
	<option><font color="white">June</font></option>
	<option><font color="white">July</font></option>
	<option><font color="white">Aug</font></option>
	<option><font color="white">Sep</font></option>
	<option><font color="white">Oct</font></option>
	<option><font color="white">Nov</font></option>
	<option><font color="white">Dec</font></option>
	</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="box_1" placeholder="	Day" size="23" name="day" maxlength="2" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="box_1" type="text" name="year" placeholder="	Year" size="23" maxlength="4" required><br><br>
<pre class="input">Gender:</pre><br>
<select class="box_2" name="gender" required>
<option>I am....</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select><br><br><br>
<pre class="input">Mobile Phone:</pre><br>
<input type="text" class="box_1" name="mobile_number" size="76" maxlength="10" required><br><br>
<pre class="input">Upload Your picture(optional)</pre><br>
<input class="input_2" type="file"  name="image">
<br><br>
<pre class="input">				Already have an Account? <a class="link_2" href="signin.php">Sign in</a></pre>
<br><br>
<pre>							    <input type="submit" class="button2" value="Sign Up"></pre>
</form></td></tr>
</table>
</center>
</center>
</div><br><br>
<?php
	include('footer.php');
	?>
</div>
</form>
</body>
</html>
