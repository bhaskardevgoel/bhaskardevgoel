<html>
<head>
<title>
Mechanical(CAF)
</title>
<script type="text/javascript" src="js/javascript.js">
</script>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back_4">
<div class="container">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br>
<center><p class="head2"><p class="font">Mechanical Engineering		(CAF)</p></p></center><br><br>
<div class="left">
<center>
<div class="sem_select">
<div class="front_trade">
<center><p class="trade_image"><img src="image/syllabus.png" height="300px" width="300px"></p></center>
</div>
<div class="back_trade">
<center>
<table class="semester" width="500px" height="350px">
<tr>         
<td><a class="link_2" href="syllabus/ICD-Syllabus-Ist-SEM.docx" download><button class="button2">SEM I</button></a></td>
<td><a class="link_2" href="syllabus/ICD_Syllabus_2nd_SEM.pdf" download><button class="button2">SEM II</button></a></td>
</tr>
<tr>
<td><a class="link_2" href="syllabus/Syllabus-Scheme-of-ICD-3rd-Semester.pdf"download><button class="button2">SEM III</button></a></td>
<td><a class="link_2" href=" "><button class="button2">SEM IV</button></a></td>
</tr>
<tr>
<td><a class="link_2" href=" "><button class="button2">SEM V</button></a></td>
<td><a class="link_2" href=" "><button class="button2">SEM VI</button></a></td>
</tr>
</table>
</center>
</div>
</div></center>
</div>
<div class="right">
<center>
<div class="sem_select">
<div class="front_trade">
<p class="trade_image"><img src="image/books.png" height="300px" width="300px"></p>
</div>
<div class="back_trade">
<table class="semester" width="500px" height="350px">
<tr>
<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="1">
<td><input class="button2" type="submit" value="SEM I"></td>
</form>
<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="2">
<td><input type="submit" class="button2" value="SEM II"></td>
</form>
</tr>
<tr>
	<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="3">
<td><input type="submit" class="button2" value="SEM III"></td>
	</form>
	<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="4">
<td><input type="submit" class="button2" value="SEM IV"></td>
	</form></tr>
<tr>
<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="5">
<td><input type="submit" class="button2" value="SEM V"></td>
	</form>
<form name="" action="books.php" method="post">
<input type="hidden" name="trd" value="2">
<input type="hidden" name="s1" value="6">
<td><input type="submit" class="button2" value="SEM VI"></td>
	</form>
</tr>
</table>
</div>
</div></center>
</div>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>
