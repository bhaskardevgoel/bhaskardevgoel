<html>
<head>
<title>
Trade Select
</title>
<script type="text/javascript" src="js/javascript.js">
</script>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="back_2" onload="myFunction()">
<div id="loader">
</div>
<div class="container animate-bottom" id="myDiv">
<?php
	include('header.php');
	?>
<div class="head_1"><br><br>
<center><p class="head2"><p class="font">Select your Trade</p></p></center><br><br><br>
<div class="flip2">
<div class="front1">
<center><img src="image/mech.png" height="75" width="75"></center>
<center><h2>Mechanical Engineering</h2></center>
</div>
<div class="back1">
<center><table cellspacing="10" class="table_trade" width="27%" height="120px">
<tr><th><a class="trade" href="mechanical(cac).php?trd='1'" >CAC	</a><br></th>
<th><a class="trade" href="mechanical(caf).php?trd='2'" >	CAF	</a><br></th></tr>
<tr><th><a class="trade" href="mechanical(cff).php?trd='3'" >	CFF	</a><br></th>
<th><a class="trade" href="mechanical(ctd).php?trd='4'" >	CTD	</a><br></th></tr>
<tr><th colspan="2"><center><a class="trade" href="mechanical(cwg).php?trd='5'" >CWG</a><br></center></th></tr>
</table></center>
</div>
</div>
<div class="flip2">
<div class="front1">
<center><img src="image/cse.png" height="75" width="75"></center>
<center><h2>Computer Science</h2></center>
</div>
<div class="back1">
<center><table class="table_trade" width="27%" height="130px">
<tr><th><a class="trade" href="computer.php?trd='6'" >CDE</a><br></th></tr>
</table></center>
</div>
</div>
<div class="flip2">
<div class="front1">
<center><img src="image/elec.png" height="75" width="75"></center>
<center><h2>Electronics and Electrical</h2></center>
</div>
<div class="back1">
<center><table cellspacing="10" class="table_trade" width="27%" height="120px">
<tr><th><a class="trade" href="electronics(csme).php?trd='7'" >CSME</a><br></th>
<th><a class="trade" href="electronics(ctv).php?trd='8'" >CTV</a><br></th></tr>
<tr><th colspan="2"><center><a class="trade" href="electrical.php?trd='9'" >CEN</a><br></center></th></tr>
</table></center>
</div>
</div>
<div class="flip2">
<div class="front1">
<center><img src="image/instrument.png" height="75" width="75"></center>
<center><h2>Instrumentation</h2></center>
</div>
<div class="back1">
<center><table class="image/table_trade" width="27%" height="120px">
<tr><th><a class="trade" href="instrumentation.php?trd='10'" >CSMM</a><br></th></tr>
</table></center></div>
</div><br>
<div class="flip2">
<div class="front1">
<center><img src="image/food.png" height="75" width="75"></center>
<center><h2>Chemical and Food</h2></center>
</div>
<div class="back1">
<center><table class="table_trade" width="27%" height="120px">
<tr><th><a class="trade" href="chemical.php?trd='11'" >CPT</a><br></th></tr>
<tr><th><a class="trade" href="food.php?trd='12'" >CPF</a><br></th></tr>
</table></center></div>
</div><br>
<div class="flip2">
<div class="front1">
<center><img src="image/civil.png" height="75" width="75"></center>
<center><h2>Civil</h2></center>
</div>
<div class="back1">
<center><table class="table_trade" width="27%" height="120px">
<tr><th><a class="trade" href="civil.php" >CBM</a><br></th></tr>
</table></center>
</div>
</div><br><br><br><br>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>