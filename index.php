<html>
<head>
<title>
Welcome to Sliet Diploma Chapter
</title>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back">
<div class="container">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br><br><br>
<p class="head2"><center><br><p class="font">Welcome To The <b>SLIET DIPLOMA CHAPTER</b></p></center></p><br><br>
<div class="flip">
<div class="front2">
<center><img src="image/mech.png" height="75" width="75"></center>
<center><h2>Mechanical Engineering</h2></center>
</div>
<div class="back2">
<center><img src="image/instrument.png" height="75" width="75"></center>
<center><h2>Instrumentation</h2></center>
</div>
</div>
<div class="flip">
<div class="front2">
<center><img src="image/cse.png" height="75" width="75"></center>
<center><h2>Computer Science</h2></center>
</div>
<div class="back2">
<center><img src="image/food.png" height="75" width="75"></center>
<center><h2>Chemical and Food</h2></center>
</div>
</div>
<div class="flip">

<div class="front2">
<center><img src="image/elec.png" height="75" width="75"></center>
<center><h2>Electronics and Electrical</h2></center>
</div>

<div class="back2">
<center><img src="image/civil.png" height="75" width="75"></center>
<center><h2>Civil</h2></center>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
		if(empty($_SESSION['username']))
		{
?>
	<center>
		<form action="signin.php">
<?php
}
else
{
?>		
	<center>
		<form action="trade2.php">
<?php
}
?>
		<input type="submit" class="button1" value="Get Started"></form></center>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>